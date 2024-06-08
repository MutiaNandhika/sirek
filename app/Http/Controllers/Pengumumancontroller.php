<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Pengumuman;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{ public function unduhPengumuman($id)
    {
        // Mengambil nilai file_pengumuman dari database berdasarkan pengumuman_id
        $filePath = Pengumuman::where('pengumuman_id', $id)->pluck('file_pengumuman')->first();
    
        if ($filePath) {
            // Menghasilkan jalur relatif file di penyimpanan publik
            $relativePath = 'storage/' . $filePath;
    
            // Menghasilkan jalur lengkap file di penyimpanan publik
            $fullFilePath = public_path($relativePath);
    
            // Memeriksa apakah file ada
            if (file_exists($fullFilePath)) {
                // Mengunduh file
                return response()->download($fullFilePath);
            } else {
                return response()->json(['error' => 'File not found'], 404);
            }
        } else {
            return response()->json(['error' => 'Pengumuman not found'], 404);
        }
    }
    
    
    
    public function guest(){
        $pengumuman = Pengumuman::with('event')->get();
        return Inertia::render('GuestPengumuman',['pengumuman' => $pengumuman]);
    }
    public function index()
    {
        $pengumuman = Pengumuman::with('event')->get(); // Fetch the data as a collection
        return Inertia::render('Pengumuman', [
            'pengumuman' => $pengumuman, // Pass the data as an array
        ]);
    }
    
public function create()
{
    $formtype = 'create';
    // Ambil daftar event dari database
    $pengumuman = Event::all(); // Anda dapat menyesuaikan ini dengan cara Anda mengambil data event
    // Kemudian kirim data event ke tampilan menggunakan properti data
    return Inertia::render('PengumumanForm', [
        'formtype' => $formtype,
        'pengumuman' => $pengumuman // Mengirim daftar event ke tampilan
    ]);
}

    
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id)->load('event');
        $formtype = 'edit';
        return Inertia::render('PengumumanForm', [
            'formtype' => $formtype,
            'pengumuman' => $pengumuman,
        ]);
    }
    
    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'file_pengumuman' => ['nullable', 'file', 'max:2048'], // nullable agar tidak wajib diisi saat update
        'tgl_pengumuman' => ['required', 'date'],
        'keterangan' => ['required'],
    ]);

    $pengumuman = Pengumuman::findOrFail($id);
    $pengumuman->tgl_pengumuman = $validatedData['tgl_pengumuman'];
    $pengumuman->keterangan = $validatedData['keterangan'];

    // Jika ada file baru yang diunggah, perbarui juga file pengumuman
    if ($request->hasFile(key: 'file_pengumuman')) {
        // Simpan gambar baru
        $filePath = $request->file('file_pengumuman')->store('pengumuman_files', 'public');
        
        // Hapus gambar lama jika ada
        if ($pengumuman->file_pengumuman) {
            Storage::disk('public')->delete($pengumuman->file_pengumuman);
        }
        
        // Update kolom gambar dengan path yang baru
        $pengumuman->file_pengumuman = $filePath;
    }
    $pengumuman->save();

    return redirect()->route('pengumuman.index')->with('success', 'Pengumuman successfully updated!');
}

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'event_id' => ['required', 'max:50'],
            'file_pengumuman' => ['required', 'file', 'max:2048'], // max:2048 means 2MB
            'tgl_pengumuman' => ['required', 'date'],
            'keterangan' => ['required'],
        ]);

        if ($request->hasFile('file_pengumuman')) {
            $filePath = $request->file('file_pengumuman')->store('pengumuman_files', 'public');
            $validatedData['file_pengumuman'] = $filePath;
        }

        Pengumuman::create($validatedData);

        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman successfully created!');
    }
    public function delete($id){
    $pengumuman = Pengumuman::findorfail($id);
    $pengumuman->delete();
    return redirect()->route('pengumuman.index')->with('success', 'Data deleted successfully!');
    }
    
}
