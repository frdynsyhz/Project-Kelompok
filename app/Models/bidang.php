<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class bidang extends Model
{
    use HasFactory;
    protected  $table = 'bidang';
     protected $fillable = [
        'nama_bidang',

    ];

    public function tempat_pkl(): HasMany
    {
        //bidang memiliki banyak tempat pkl
        return $this->hasMany(tempat_pkl::class);
    }
}
