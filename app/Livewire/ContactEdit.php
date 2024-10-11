<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactEdit extends Component
{
    public $contact; // Variable to hold the contact record for editing
    public $name;
    public $name_kh;
    public $description;
    public $description_kh;
    public $contact_info;
    public $contact_info_kh;
    public $iframe;

    public function mount(Contact $contact)
    {
        $this->contact = $contact; // Initialize the $contact variable with the provided contact model instance
        $this->name = $contact->name;
        $this->name_kh = $contact->name_kh;
        $this->description = $contact->description;
        $this->description_kh = $contact->description_kh;
        $this->contact_info = $contact->contact_info;
        $this->contact_info_kh = $contact->contact_info_kh;
        $this->iframe = $contact->iframe;
    }

    public function save()
    {
        $this->dispatch('livewire:updated');
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            'name_kh' => 'required|string|max:255',
            'description' => 'nullable',
            'description_kh' => 'nullable',
            'contact_info' => 'nullable',
            'contact_info_kh' => 'nullable|string|max:255',
            'iframe' => 'nullable|string|max:500',
        ]);

        // Update the existing contact record
        $this->contact->update($validated);

        session()->flash('success', 'Updated successfully!');

        // return redirect('admin/settings/contact');
    }

    public function render()
    {
        return view('livewire.contact-edit');
    }
}
