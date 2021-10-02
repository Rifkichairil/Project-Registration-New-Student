<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';

    protected $fillable = [
        'accounts_id',
        'pend_asal',
        'pend_alamat',
        'berat_badan',
        'tinggi_badan'
    ];

    public function accounts()
    {
        return $this->belongsTo(Accounts::class, 'accounts_id');
    }
}
