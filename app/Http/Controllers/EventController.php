<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Event;

class EventController extends Controller
{
    public function guest(){
        $event = Event::all();
        return Inertia::render('GuestEvent', ['event' => $event,'flash' => session('success')
    ]
    );
    }
    public function index(){
        $event = Event::all();
        Log::info(session()->all());  // Menambahkan logging untuk memeriksa data session
        return Inertia::render('Event', [
            'event' => $event,
            'flash' => session()->all()
        ]);
    }
    

    public function create(){
        $formtype = 'create';
        return Inertia::render('EventForm', ['formtype' => $formtype]);
    }

    public function edit($id){
        $event = Event::findOrFail($id);
        $formtype = 'edit';
        return Inertia::render('EventForm', ['event' => $event, 'formtype' => $formtype]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_event' => ['required', 'max:50'],
            'deskripsi' => ['required'],
            'gambar' => ['nullable', 'file', 'max:2048'], 
        ]);

        if ($request->hasFile('gambar')) {
            $filePath = $request->file('gambar')->store('gambar', 'public');
            $validatedData['gambar'] = $filePath;
        }

        Event::create($validatedData);
        return redirect()->route('event.index')->with('success', 'Event Inserted Successfully');
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'nama_event' => ['required', 'max:50'],
            'deskripsi' => ['required'],
            'gambar' => ['nullable', 'image', 'max:2048'], // Validasi untuk file gambar (opsional)
        ]);
        
        $event = Event::findOrFail($id);
        $event->nama_event = $validatedData['nama_event'];
        $event->deskripsi = $validatedData['deskripsi'];
    
        if ($request->hasFile('gambar')) {
            // Simpan gambar baru
            $filePath = $request->file('gambar')->store('gambar', 'public');
            
            // Hapus gambar lama jika ada
            if ($event->gambar) {
                Storage::disk('public')->delete($event->gambar);
            }
            
            // Update kolom gambar dengan path yang baru
            $event->gambar = $filePath;
        }
        
        $event->save();
        return redirect()->route('event.index')->with('success', 'Event Successfully Updated');
    }
    
    public function delete($id){
        try {
            $event = Event::findOrFail($id);
            if ($event->gambar) {
                Storage::disk('public')->delete($event->gambar);
            }
            $event->delete();
            return redirect()->route('event.index')->with('success', 'Event deleted');
        } catch (\Exception $e) {
            Log::error('Error deleting event: ' . $e->getMessage());
            return redirect()->route('event.index')->with('error', 'Failed to delete event');
        }
    }
}
