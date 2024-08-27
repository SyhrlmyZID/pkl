<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bamusrenbangdes extends Model
{
   
    protected $table = 'bamusrenbangdes';

    public $timestamps = false;

    protected $fillable = ['tanggal', 'jam', 'tempat', 'bahas_kegiatan', 'materi_pembahasan', 'pimpinan_rapat', 'notulen', 'narasumber', 'ketua_bpd', 'wakil_masyarakat'];

}


