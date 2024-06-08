<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'event';
    public $timestamps = false;
    protected $primaryKey = 'event_id';
    protected $fillable = ['event_id', 'nama_event','deskripsi','gambar'];

    public function pengumuman(){
        return  $this->hasOne(Pengumuman::class);
    }
    public function pendaftar(){
        return  $this->hasMany(Pendaftar::class);
    }
}
