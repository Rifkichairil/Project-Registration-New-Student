<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Pendidikan;
use App\Models\WaliAyah;
use App\Models\WaliIbu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Alert;
use App\Http\Requests\SiswaRequest;
use App\Models\SiswaMutasi;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    //
    public function dashboardHome()
    {
        return view('page.user.index');
    }
    public function dashboard()
    {
        return view('page.user.index');
    }

    public function store(Request $request)
    {

        DB::beginTransaction();
        try {
            // memasukan data
            // dd($request->all());
            $account =  Accounts::create([
                'uuid'          => Uuid::uuid4(),
                'nama_lengkap'  => $request->nama_lengkap,
                'nik'           => $request->nik,
                'no_kk'         => $request->no_kk,
                'akte'          => $request->akte,
                'gender'        => $request->gender,
                'nisn'          => $request->nisn,
                'tempat'        => $request->tempat,
                'tgl_lahir'     => $request->tgl_lahir,
                'alamat'        => $request->alamat,
                'rt'            => $request->rt,
                'rw'            => $request->rw,
                'kelurahan'     => $request->kelurahan,
                'kecamatan'     => $request->kecamatan,
                'kota'          => $request->kota,
                'gaji'          => $request->gaji,
                'status'        => 0,
                'minat'         => $request->minat,
                'bakat'         => $request->bakat,
                'hobi'          => $request->hobi,
            ]);

            Pendidikan::create([
                'accounts_id'   => $account->id,
                'pend_asal'     => $request->pend_asal,
                'pend_alamat'   => $request->pend_alamat,
                'berat_badan'   => $request->berat_badan,
                'tinggi_badan'  => $request->tinggi_badan,
            ]);

            WaliAyah::create([
                'accounts_id'       => $account->id,
                'wali_nama_ayah'    => $request->wali_nama_ayah,
                'nik_ayah'          => $request->nik_ayah,
                'tempat_ayah'       => $request->tempat_ayah,
                'tgl_lahir_ayah'    => $request->tgl_lahir_ayah,
                'pekerjaan_ayah'    => $request->pekerjaan_ayah,
                'no_telp_ayah'      => $request->no_telp_ayah,
            ]);
            WaliIbu::create([
                'accounts_id'       => $account->id,
                'wali_nama_ibu'     => $request->wali_nama_ibu,
                'nik_ibu'           => $request->nik_ibu,
                'tempat_ibu'        => $request->tempat_ibu,
                'tgl_lahir_ibu'     => $request->tgl_lahir_ibu,
                'pekerjaan_ibu'     => $request->pekerjaan_ibu,
                'no_telp_ibu'       => $request->no_telp_ibu,
            ]);
            SiswaMutasi::create([
                'accounts_id'          => $account->id,
                'pend_asal_mutasi'     => $request->pend_asal_mutasi,
                'pend_alamat_mutasi'   => $request->pend_alamat_mutasi,
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        Alert::success('Selamat', 'Pendaftaran Siswa Baru Berhasil!');

        return redirect()->route('success');
        // return Redirect::to('https://ppdb.sditbahrulfikri.sch.id/success?token={{$token}}');
    }

    public function success()
    {
        // $token      = Crypt::decrypt($request->token);
        // dd($token);
        // {
        // }

        return view('success');
    }
}
