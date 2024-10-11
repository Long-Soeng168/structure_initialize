<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

use App\Models\Major;

class MajorTableData extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public $search = '';

    #[Url(history: true)]
    public $perPage = 10;

    #[Url(history: true)]
    public $filter = 0;

    #[Url(history: true)]
    public $sortBy = 'created_at';

    #[Url(history: true)]
    public $sortDir = 'DESC';

    public function setFilter($value) {
        $this->filter = $value;
        $this->resetPage();
    }

    public function setSortBy($newsortBy) {
        if($this->sortBy == $newsortBy){
            $newsortDir = ($this->sortDir == 'DESC') ? 'ASC' : 'DESC';
            $this->sortDir = $newsortDir;
        }else{
            $this->sortBy = $newsortBy;
        }
    }

    // ResetPage when updated search
    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id)
    {
        $major = Major::find($id);
        $major->delete();

        session()->flash('success', 'Successfully deleted!');
    }

     // ==========Add New major============
     public $newName = null;
     public $newName_kh = null;

     public function save()
     {
         try {
             $validated = $this->validate([
                 'newName' => 'required|string|max:255|unique:majors,name',
             ]);

             Major::create([
                 'name' => $this->newName,
                 'name_kh' => $this->newName_kh,
             ]);

             session()->flash('success', 'Add New Major successfully!');

             $this->reset(['newName', 'newName_kh']);

         } catch (\Illuminate\Validation\ValidationException $e) {
             session()->flash('error', $e->validator->errors()->all());
         }
     }

     public $editId = null;
     public $name;
     public $name_kh;

     public function setEdit($id) {
        $major = Major::find($id);
        $this->editId = $id;
        $this->name = $major->name;
        $this->name_kh = $major->name_kh;
     }

     public function cancelUpdate() {
        $this->editId = null;
        $this->name = null;
        $this->name_kh = null;
     }

     public function update($id) {
        try {
            $validated = $this->validate([
                'name' => 'required|string|max:255|unique:languages,name,' . $id,
            ]);

            $major = Major::find($id);
            $major->update([
                'name' => $this->name,
                'name_kh' => $this->name_kh,
            ]);

            session()->flash('success', 'Successfully edited!');

            $this->reset(['name', 'editId']);

        } catch (\Illuminate\Validation\ValidationException $e) {
            session()->flash('error', $e->validator->errors()->all());
        }
     }

    public function render(){

        $items = Major::where(function($query){
                                $query->where('name', 'LIKE', "%$this->search%");
                            })
                            ->orderBy($this->sortBy, $this->sortDir)
                            ->paginate($this->perPage);

        return view('livewire.major-table-data', [
            'items' => $items,
        ]);
    }
}
