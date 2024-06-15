<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    
    public function create($event_id)
    {
        $event = Event::findOrFail($event_id);
        $formtype = 'create';
        return Inertia::render('PendaftarForm', ['formtype' => $formtype, 'event' => $event]);
    }

    public function detail($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        return Inertia::render('DetailPendaftar', [
            'pendaftar' => $pendaftar,
        ]);
    }

    public function edit($event_id, $pendaftar_id)
    {
        $pendaftar = Pendaftar::findOrFail($pendaftar_id);
        $formtype = 'edit';
        $event = Event::findOrFail($event_id);
        return Inertia::render('PendaftarForm', ['pendaftar' => $pendaftar, 'formtype' => $formtype, 'event' => $event]);
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
            'filecv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'fileloc' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'event_id' => 'required|integer',
        ]);

        $pendaftar = Pendaftar::findOrFail($id);

        if ($request->hasFile('filecv')) {
            $filecvPath = $request->file('filecv')->store('cv_files', 'public');
            if ($pendaftar->filecv) {
                Storage::disk('public')->delete($pendaftar->filecv);
            }
            $validatedData['filecv'] = $filecvPath;
        }

        if ($request->hasFile('fileloc')) {
            $filelocPath = $request->file('fileloc')->store('loc_files', 'public');
            if ($pendaftar->fileloc) {
                Storage::disk('public')->delete($pendaftar->fileloc);
            }
            $validatedData['fileloc'] = $filelocPath;
        }

        $pendaftar->update($validatedData);

        return redirect()->route('pendaftar.index')->with('flashMessage', 'Pendaftar successfully updated!');
    }

    public function store(Request $request)
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
            'filecv' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'fileloc' => 'required|file|mimes:pdf,doc,docx|max:2048',
            'event_id' => 'required|integer',
        ]);

        if ($request->hasFile('filecv')) {
            $filecvPath = $request->file('filecv')->store('cv_files', 'public');
            $validatedData['filecv'] = $filecvPath;
        }

        if ($request->hasFile('fileloc')) {
            $filelocPath = $request->file('fileloc')->store('loc_files', 'public');
            $validatedData['fileloc'] = $filelocPath;
        }

        Pendaftar::create($validatedData);
        session()->flash('flashMessage', 'Pendaftar successfully created!');
        return redirect()->route('event.guest');
    }

    public function delete($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->delete();
        return redirect()->route('pendaftar.index')->with('flashMessage', 'Data deleted successfully!');
    }
}

?>
