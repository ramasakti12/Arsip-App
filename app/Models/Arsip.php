<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    protected $table = 'arsip';
    protected $fillable = ['nomor_surat','kategori_surat','judul_surat','waktu_pengarsipan'];
}
