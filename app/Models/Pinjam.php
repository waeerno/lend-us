<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis_pengguna',
        'nama_peminjam',
        'nomor_induk',
        'hp',
        'email',
        'nomor_surat',
        'tanggal_surat',
        'nama_kegiatan',
        'file',
    ];
}
