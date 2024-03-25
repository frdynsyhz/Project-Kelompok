<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class tempat_pkl extends Model
{
    use HasFactory;
    protected $table = 'tempat_pkl';
    protected $fillable = [
        'bidang_id',
        'nama_perusahaan',
        'alamat',
    ];

    public function bidang(): BelongsTo
    {
        //tempat pkl memiliki bidang 
        return $this->belongsTo(bidang::class);
    }
}
