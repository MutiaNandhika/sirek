<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;
    protected $table = 'pendaftar';
    public $timestamps = false;
    protected $primaryKey = 'pendaftar_id';

    protected $fillable = [
        'pendaftar_id',
        'nama',
        'email',
        'telpon',
        'alamat',
        'tgllahir',
        'jeniskelamin',
        'nim',
        'jurusan',
        'fakultas',
        'angkatan',
        'pilihan1',
        'alasan1',
        'pilihan2',
        'alasan2',
        'filecv',
        'fileloc',
        'event_id',
    ];
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }
    
}
