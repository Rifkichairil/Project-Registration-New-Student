<?php

namespace App\Exports;

use App\Models\Accounts;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class SiswaExport implements FromCollection, WithMapping, WithHeadings, WithEvents
{

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Accounts::with('pendidikan', 'waliibu', 'waliayah', 'mutasi')->get();
    }

    public function map($account): array
    {
        return [
            $account->id,
            $account->nama_lengkap,
            $account->nik,
            $account->no_kk,
            $account->akte,
            $account->nisn,
            $account->gender,
            $account->tempat,
            $account->tgl_lahir,
            $account->alamat,
            $account->rt,
            $account->rw,
            $account->kelurahan,
            $account->kecamatan,
            $account->kota,
            $account->mutasi->pend_asal, //pendidikan mutasi
            $account->mutasi->pend_alamat,
            $account->pendidikan->pend_asal, //pendidikan
            $account->pendidikan->pend_alamat,
            $account->pendidikan->berat_badan,
            $account->pendidikan->tinggi_badan,
            $account->waliayah->wali_nama_ayah, //waliayah
            $account->waliayah->nik_ayah,
            $account->waliayah->tempat_ayah,
            $account->waliayah->tgl_lahir_ayah,
            $account->waliayah->pekerjaan_ayah,
            $account->waliayah->no_telp_ayah,
            $account->waliibu->wali_nama_ibu, //waliibu
            $account->waliibu->nik_ibu,
            $account->waliibu->tempat_ibu,
            $account->waliibu->tgl_lahir_ibu,
            $account->waliibu->pekerjaan_ibu,
            $account->waliibu->no_telp_ibu,
            Carbon::parse($account->created_at)->toFormattedDateString()
        ];
    }

    public function headings(): array
    {
        return [
            '#',
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
            'pend_asal_mutasi',
            'pend_alamat_mutasi',
            'pend_asal',
            'pend_alamat',
            'berat_badan',
            'tinggi_badan',
            'wali_nama_ayah',
            'nik_ayah',
            'tempat_ayah',
            'tgl_lahir_ayah',
            'pekerjaan_ayah',
            'no_telp_ayah',
            'wali_nama_ibu',
            'nik_ibu',
            'tempat_ibu',
            'tgl_lahir_ibu',
            'pekerjaan_ibu',
            'no_telp_ibu',
            'created_at'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {

                // ... HERE YOU CAN DO ANY FORMATTING
                $cellRanges = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG', 'AH'];
                $cellColors = ['A1', 'B1', 'C1', 'D1', 'E1', 'F1', 'G1', 'H1', 'I1', 'J1', 'K1', 'L1', 'M1', 'N1', 'O1', 'P1', 'Q1', 'R1', 'S1', 'T1', 'U1', 'V1', 'W1', 'X1', 'Y1', 'Z1', 'AA1', 'AB1', 'AC1', 'AD1', 'AE1', 'AF1', 'AG1', 'AH1'];


                foreach ($cellColors as $cellColor) {
                    # code...
                    $event->sheet->getDelegate()->getStyle($cellColor)
                        ->getFill()
                        ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                        ->getStartColor()
                        ->setARGB('85f027');
                }

                foreach ($cellRanges as $cellRange) {
                    # code...
                    $event->sheet->getDelegate()->getColumnDimension($cellRange)->setWidth(20);
                    $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
                }
                // $event->sheet->getDelegate()->getRowDimension('1')->setRowHeight(40);

                // $event->sheet->getDelegate()->getColumnDimension('A')->setWidth(50);
            },

        ];
    }
}
