<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Audio;
use App\Models\AudioImage;

class ClientAudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('client.audios.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the main Audio item
        $item = Audio::findOrFail($id);
        $item->update([
            'read_count' => $item->read_count + 1,
        ]);

        // Retrieve images related to the Audio
        $multi_images = AudioImage::where('audio_id', $id)
                                        ->latest()
                                        ->get();

        // Retrieve related Audios excluding the item itself
        $related_items = Audio::where(function($query) use ($item) {
            $query->where('audio_category_id', $item->audio_category_id);
        })->where('id', '!=', $item->id) // Exclude the item itself
        ->inRandomOrder()
        ->limit(6)
        ->get();

        // Return the view with the data
        return view('client.audios.show', [
            'item' => $item,
            'multi_images' => $multi_images,
            'related_items' => $related_items,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
