<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;
    protected $table = 'pengumuman';
    public $timestamps = false;
    protected $primaryKey = 'pengumuman_id';

    protected $fillable = ['pengumuman_id', 'event_id', 'file_pengumuman','tgl_pengumuman','keterangan'];

    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id', 'event_id');
    }
    
}
