<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'uuid',
        'nama_lengkap',
        'nik',
        'no_kk',
        'akte',
        'nisn',
        'gender',
        'tempat',
        'tgl_lahir',
        'alamat',
        'rt',
        'rw',
        'kelurahan',
        'kecamatan',
        'kota',
        'gaji',
        'status',
        'minat',
        'bakat',
        'hobi',
    ];

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'accounts_id');
    }

    public function waliayah()
    {
        return $this->hasOne(WaliAyah::class, 'accounts_id');
    }

    public function waliibu()
    {
        return $this->hasOne(WaliIbu::class, 'accounts_id');
    }

    public function mutasi()
    {
        return $this->hasOne(SiswaMutasi::class, 'accounts_id');
    }
}
