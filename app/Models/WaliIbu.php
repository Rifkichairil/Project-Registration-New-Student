<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliIbu extends Model
{
    use HasFactory;
    protected $table = 'wali_ibu';

    protected $fillable = [
        'accounts_id',
        'wali_nama_ibu',
        'nik_ibu',
        'tempat_ibu',
        'tgl_lahir_ibu',
        'pekerjaan_ibu',
        'no_telp_ibu',
    ];
    public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');
    }
}
