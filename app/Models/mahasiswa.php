<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }

    protected $fillable = [
        'nama',
        'nim',
        'prodi_id',
        'alamat',
        'usia',
        'tgl_lahir',
    ];
}
