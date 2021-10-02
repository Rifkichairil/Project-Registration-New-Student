<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nama_lengkap'          => 'required|max:255',
            'nik'                   => 'required',
            'no_kk'                 => 'required',
            'akte'                  => 'required',
            'nisn'                  => 'max:100',
            'gender'                => 'required',
            'tempat'                => 'required',
            'tgl_lahir'             => 'required|date',
            'alamat'                => 'required|max:255',
            'rt'                    => 'required',
            'rw'                    => 'required',
            'kelurahan'             => 'required|max:100',
            'kecamatan'             => 'required|max:100',
            'kota'                  => 'required|max:100',
            'gaji'                  => 'required|max:100',
            'minat'                 => 'required|max:100',
            'bakat'                 => 'required|max:100',
            'hobi'                  => 'required|max:100',
            // 'accounts_id'   => 'required|exists:accounts,id',
            'pend_asal_mutasi'      => 'max:240',
            'pend_alamat_mutasi'    => 'max:200',
            'pend_asal'             => 'required|max:240',
            'pend_alamat'           => 'required|max:200',
            'berat_badan'           => 'required|numeric',
            'tinggi_badan'          => 'required|numeric',
            'wali_nama_ayah'        => 'required|max:200',
            'nik_ayah'              => 'required',
            'tempat_ayah'           => 'required|max:100',
            'tgl_lahir_ayah'        => 'required|date',
            'pekerjaan_ayah'        => 'required|max:100',
            'no_telp_ayah'          => 'required',
            'wali_nama_ibu'         => 'required|max:200',
            'nik_ibu'               => 'required',
            'tempat_ibu'            => 'required|max:100',
            'tgl_lahir_ibu'         => 'required|date',
            'pekerjaan_ibu'         => 'required|max:100',
            'no_telp_ibu'           => 'required',
        ];
    }
}
