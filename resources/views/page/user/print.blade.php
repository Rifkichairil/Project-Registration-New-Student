<!DOCTYPE html>
<html>
<head>
<style>
    * {
        margin: 0;
        padding: 0;
    }
    table, td, th {
    /* border: 1px solid black; */
    }

    table {
    width: 100%;
    border-collapse: collapse;
    }
    .container{
        page-break-after: always;
    }

    .pg-1{
        position: relative;
        width: 100%;
        height: 29.7cm;
        background-size: 210mm 297mm;
        background-image: url({{asset('file/1_regis.png')}});
    }
    .nomor_urut h2{
        position: absolute;
        right: 10px;
        padding-top: 60px;
        padding-right: 60px;
    }

    .nama {
        position: absolute;
        bottom: 0px;
        top: 64%;
        left: 45%;
        padding-bottom: 60px;
    }
    .pg-2{
        position: relative;
        width: 100%;
        height: 29.7cm;
        background-size: 210mm 297mm;
        background-image: url({{asset('file/2_student.png')}});
    }
    .pg-3{
        position: relative;
        width: 100%;
        height: 29.7cm;
        background-size: 210mm 297mm;
        background-image: url({{asset('file/3_parent.png')}});
    }

    .tgl_pendaftaran{
        position: absolute;
        top: 20%;
        left: 70%;
    }

    .table{
        position: absolute;
        top: 24.5%;
        padding-right: 15%;
        padding-left: 13%;
    }
    .table-3{
        position: absolute;
        top: 23%;
        padding-right: 15%;
        padding-left: 13%;
    }
    td {
        vertical-align:bottom;
    }


</style>
</head>
<body>
    <div class="container pg-1">
        <div class="nomor_urut">
            <h2></h2>
        </div>
        <div class="nama">
            <h2>{{$account->nama_lengkap}}</h2>
            <h2 style="padding-top: 20px">{{$account->waliayah->no_telp_ayah}}</h2>
        </div>

    </div>

    <div class="container pg-2">

        <div class="tgl_pendaftaran">
            <h3> {{\Carbon\Carbon::parse($account->created_at)->format('d F Y')}}</h2>
        </div>
        <table class="table">
            <tr>
                <td style="width:45%; height: 26px"></td>
                <td >{{$account->nama_lengkap}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 26px"></td>
                <td>{{$account->gender}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td> {{(@$account->nisn == null) ?  '-' : $account->nisn}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 28px"></td>
                <td>{{$account->nik}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 31px"></td>
                <td>{{$account->akte}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 30px"></td>
                <td>{{$account->tempat}}, {{\Carbon\Carbon::parse($account->tgl_lahir)->format('d F Y')}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td>{{$account->alamat}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td>{{$account->rt}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td>{{$account->rw}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td>{{$account->kelurahan}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 30px"></td>
                <td>{{$account->kecamatan}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 30px"></td>
                <td>{{$account->kota}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td>{{$account->pendidikan->pend_asal}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 27px"></td>
                <td>{{$account->pendidikan->pend_alamat}}</td>
            </tr>
            {{-- pend mutasi --}}
            <tr>
                <td style="width:45%;height: 85px"></td>
                <td> {{(@$account->mutasi->pend_asal_mutasi == null) ?  '-' : $account->mutasi->pend_asal}} </td>
            </tr>
            <tr>
                <td style="width:45%;height: 45px"></td>
                <td>{{(@$account->mutasi->pend_alamat_mutasi == null) ?  '-' : $account->mutasi->pend_alamat}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 40px"></td>
                <td>{{$account->minat}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 28px"></td>
                <td>{{$account->bakat}}</td>
            </tr>
            <tr>
                <td style="width:45%;height: 29px"></td>
                <td>{{$account->hobi}}</td>
            </tr>
        </table>
    </div>

    <div class="container pg-3">

        <table class="table-3">
            <tr>
                <td style="width:45%; height: 26px"></td>
                <td >{{$account->no_kk}}</td>
            </tr>
            {{-- Ayah --}}
            <tr>
                <td style="width:45%; height: 28px"></td>
                <td>{{$account->waliayah->wali_nama_ayah}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 28px"></td>
                <td>{{$account->waliayah->nik_ayah}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 30px"></td>
                <td>{{$account->waliayah->tempat_ayah}},{{\Carbon\Carbon::parse($account->waliayah->tgl_lahir_ayah)->format('d F Y')}} </td>
            </tr>
            <tr>
                <td style="width:45%; height: 28px"></td>
                <td>{{$account->waliayah->pekerjaan_ayah}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 28px"></td>
                <td>{{$account->waliayah->no_telp_ayah}}</td>
            </tr>
            {{-- Ibu --}}
            <tr>
                <td style="width:45%; height: 48px"></td>
                <td>{{$account->waliibu->wali_nama_ibu}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 26px"></td>
                <td>{{$account->waliibu->nik_ibu}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 26px"></td>
                <td>{{$account->waliibu->tempat_ibu}},{{\Carbon\Carbon::parse($account->waliibu->tgl_lahir_ibu)->format('d F Y')}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 27px"></td>
                <td>{{$account->waliibu->pekerjaan_ibu}}</td>
            </tr>
            <tr>
                <td style="width:45%; height: 27px"></td>
                <td>{{$account->waliibu->no_telp_ibu}}</td>
            </tr>

        </table>
    </div>
</body>
</html>


