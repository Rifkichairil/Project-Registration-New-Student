<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;


class AdminController extends Controller
{
    //
    public function index()
    {
        $accounts   = Accounts::with('pendidikan', 'waliayah', 'waliibu', 'mutasi')->get();
        $pending    = Accounts::where('status', 0)->count();
        $active     = Accounts::where('status', 1)->count();
        return view('page.admin.index', compact('accounts', 'pending', 'active'));
    }

    public function detail($uuid)
    {
        $account = Accounts::with('pendidikan', 'waliayah', 'waliibu', 'mutasi')->where('uuid', $uuid)->firstOrFail();
        // dd($account);
        return view('page.user.detail', compact('account'));
    }

    public function edit($uuid)
    {
        $account = Accounts::with('pendidikan', 'waliayah', 'waliibu', 'mutasi')->where('uuid', $uuid)->firstOrFail();

        return view('page.user.edit', compact('account'));
    }

    public function update(Request $request, $uuid)
    {

        DB::beginTransaction();
        try {
            //mencari id
            $account = Accounts::with('pendidikan', 'waliayah', 'waliibu', 'mutasi')->where('uuid', $uuid)->firstOrFail();

            $account->update([
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

            $account->pendidikan->update([
                'pend_asal'     => $request->pend_asal,
                'pend_alamat'   => $request->pend_alamat,
                'berat_badan'   => $request->berat_badan,
                'tinggi_badan'  => $request->tinggi_badan,
            ]);

            $account->mutasi->update([
                'pend_asal_mutasi'     => $request->pend_asal_mutasi,
                'pend_alamat_mutasi'   => $request->pend_alamat_mutasi,
            ]);

            $account->waliayah->update([
                'wali_nama_ayah'    => $request->wali_nama_ayah,
                'nik_ayah'          => $request->nik_ayah,
                'tempat_ayah'       => $request->tempat_ayah,
                'tgl_lahir_ayah'    => $request->tgl_lahir_ayah,
                'pekerjaan_ayah'    => $request->pekerjaan_ayah,
                'no_telp_ayah'      => $request->no_telp_ayah,
            ]);
            $account->waliibu->update([
                'wali_nama_ibu'     => $request->wali_nama_ibu,
                'nik_ibu'           => $request->nik_ibu,
                'tempat_ibu'        => $request->tempat_ibu,
                'tgl_lahir_ibu'     => $request->tgl_lahir_ibu,
                'pekerjaan_ibu'     => $request->pekerjaan_ibu,
                'no_telp_ibu'       => $request->no_telp_ibu,
            ]);
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        Alert::success('Selamat', 'Anda berhasil mengubah data siswa!');

        return redirect()->route('dashboard');
    }

    public function delete($uuid)
    {
        $account = Accounts::with('pendidikan', 'waliayah', 'waliibu', 'mutasi')->where('uuid', $uuid)->firstOrFail();

        DB::beginTransaction();
        try {
            $account = Accounts::with('pendidikan', 'waliayah', 'waliibu', 'mutasi')->where('uuid', $uuid)->firstOrFail();
            $account->delete();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        DB::commit();

        Alert::success('Selamat', 'Anda berhasil menghapus data siswa!');


        return redirect()->route('dashboard');
    }
}
