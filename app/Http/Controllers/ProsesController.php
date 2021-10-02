<?php

namespace App\Http\Controllers;


use App\Exports\SiswaExport;
use App\Models\Accounts;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Alert;

class ProsesController extends Controller
{
    //
    public function excel()
    {
        $now = Carbon::now();
        return Excel::download(new SiswaExport, 'siswa-' . $now . '.xlsx');
    }

    public function print($uuid)
    {
        $account = Accounts::with('pendidikan', 'waliayah', 'waliibu')->where('uuid', $uuid)->firstOrFail();
        $pdf = PDF::loadview('page.user.print',  compact('account'));

        // return $pdf->stream();
        return $pdf->download('Pendaftaran Siswa ' . $account->nama_lengkap . '.pdf');
    }

    public function status($id)
    {
        DB::beginTransaction();
        try {
            // find id accounts
            $account = Accounts::whereId($id)->firstOrFail();
            if ($account->status == 0) {
                # ubah status
                $account->status = 1;
            } else {
                $account->status = 0;
            }

            $account->save();
        } catch (\Throwable $e) {
            //throw $th;
            DB::rollBack();
        }
        DB::commit();

        Alert::success('Selamat', 'Anda berhasil mengaktivasi status siswa!');


        return redirect()->route('dashboard');
    }
}
