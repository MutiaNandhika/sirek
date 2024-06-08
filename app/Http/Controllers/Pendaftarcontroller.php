<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Pendaftar;
use App\Models\Event;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftar = Pendaftar::with('event')->get();
        return Inertia::render('Pendaftar', [
            'pendaftar' => $pendaftar,
        ]);
    }
    

    public function create()
    {
        $formtype = 'create';
        return Inertia::render('PendaftarForm', ['formtype' => $formtype]);
    }
    public function detail($id)
{
    $pendaftar = Pendaftar::findOrFail($id);
    return Inertia::render('DetailPendaftar', [
        'pendaftar' => $pendaftar,
    ]);
}
public function edit($id){
    $event = Pendaftar::findOrFail($id);
    $formtype = 'edit';
    return Inertia::render('PendaftarForm', ['event' => $event, 'formtype' => $formtype]);
}
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|string|email|max:100',
            'telpon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'tgllahir' => 'required|date',
            'jeniskelamin' => 'required|string|max:50',
            'nim' => 'required|string|max:20',
            'jurusan' => 'required|string|max:100',
            'fakultas' => 'required|string|max:100',
            'angkatan' => 'required|string|max:10',
            'pilihan1' => 'required|string|max:100',
            'alasan1' => 'required|string',
            'pilihan2' => 'required|string|max:100',
            'alasan2' => 'required|string',
            'filecv' => 'required|string|max:100', // Nullable for updates
            'fileloc' => 'required|string|max:100', // Nullable for updates
            'event_id'=>'required|string|max:100', // Nullable for updates
        ]);

        $pendaftar = Pendaftar::findOrFail($id);

        // Update fields based on the submitted data
        $pendaftar->update($validatedData);

        return redirect()->route('pendaftar.index')->with('success', 'Pendaftar successfully updated!');
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'pendaftar_id' => 'required|integer',
            'nama' => 'required|string|max:100',
            'email' => 'required|string|email|max:100',
            'telpon' => 'required|string|max:15',
            'alamat' => 'required|string',
            'tgllahir' => 'required|date',
            'jeniskelamin' => 'required|string|max:50',
            'nim' => 'required|string|max:20',
            'jurusan' => 'required|string|max:100',
            'fakultas' => 'required|string|max:100',
            'angkatan' => 'required|string|max:10',
            'pilihan1' => 'required|string|max:100',
            'alasan1' => 'required|string',
            'pilihan2' => 'required|string|max:100',
            'alasan2' => 'required|string',
            'filecv' => 'required|string|max:100',
            'fileloc' => 'required|string|max:100',
            'event_id' => 'required|string|max:100',
        ]);

        Pendaftar::create($validatedData);

        return redirect()->route('pendaftar.index')->with('success', 'Pendaftar successfully created!');
    }

    public function delete($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->delete();
        return redirect()->route('pendaftar.index')->with('success', 'Data deleted successfully!');
    }
}
