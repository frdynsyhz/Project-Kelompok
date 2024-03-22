<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempat_pkl extends Model
{
    use HasFactory;
    protected $table = 'tempat_pkl';
    protected $fillable = [
        'bidang_id',
        'nama_perusahaan',
        'alamat',
    ];
}
