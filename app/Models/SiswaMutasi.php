<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaMutasi extends Model
{
    use HasFactory;
    protected $table = 'siswa_mutasi';

    protected $fillable = [
        'accounts_id',
        'pend_asal_mutasi',
        'pend_alamat_mutasi',
    ];

    public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');
    }
}
