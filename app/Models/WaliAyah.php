<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliAyah extends Model
{
    use HasFactory;
    protected $table = 'wali_ayah';

    protected $fillable = [
        'accounts_id',
        'wali_nama_ayah',
        'nik_ayah',
        'tempat_ayah',
        'tgl_lahir_ayah',
        'pekerjaan_ayah',
        'no_telp_ayah',
    ];
    public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');
    }
}
