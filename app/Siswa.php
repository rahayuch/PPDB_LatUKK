<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'nis', 'nama', 'jk', 'tempat_lahir', 'tgl_lahir', 'alamat', 'asal_sekolah', 'kelas', 'jurusan'
    ];
}
