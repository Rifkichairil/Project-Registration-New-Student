@extends('app')

@section('content')

<div class="col-12 grid-margin stretch-card">
    {{-- Data Probadi Siswa --}}
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4">Data Pribadi Siswa</h4>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Nama Lengkap</label>
                        <p class="card-description">{{$account->nama_lengkap}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">NIK</label>
                        <p class="card-description">{{$account->nik}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">No. KK</label>
                        <p class="card-description">{{$account->no_kk}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">No. Akte Lahir</label>
                        <p class="card-description">{{$account->akte}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">NISN</label>
                        <p class="card-description">
                            {{(@$account->nisn == null) ?  '-' : $account->nisn}} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Gender</label>
                        <p class="card-description">{{$account->gender}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Tempat, Tanggal Lahir</label>
                        <p class="card-description">{{$account->tempat}}, {{\Carbon\Carbon::parse($account->tgl_lahir)->format('d F Y')}}</p>

                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="form-group ">
                        <label for="exampleInputName1">Alamat</label>
                        <p class="card-description">{{$account->alamat}}, Rt. {{$account->rt}}, Rw. {{$account->rw}}, Kel. {{$account->kelurahan}}, Kec. {{$account->kecamatan}}, Kota {{$account->kota}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Minat</label>
                        <p class="card-description">{{$account->minat}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Bakat</label>
                        <p class="card-description">{{$account->bakat}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Hobby</label>
                        <p class="card-description">{{$account->hoby}}</p>
                    </div>
                </div>
            </div>
<hr>
            <h4 class="mb-4">Pendidikan Asal Siswa</h4>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Pendidikan Asal</label>
                        <p class="card-description">{{$account->pendidikan->pend_asal}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Tinggi Badan</label>
                        <p class="card-description">{{$account->pendidikan->tinggi_badan}} Cm</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Berat Badan</label>
                        <p class="card-description">{{$account->pendidikan->berat_badan}} Kg</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group ">
                        <label for="exampleInputName1">Alamat</label>
                        <p class="card-description">{{$account->pendidikan->pend_alamat}}</p>
                    </div>
                </div>

            </div>
<hr>
            <h4 class="mb-4">Pendidikan Mutasi Siswa</h4>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Pendidikan Asal Mutasi</label>
                        {{-- <p class="card-description">{{$account->mutasi->pend_asal}}</p> --}}
                        <p class="card-description"> {{(@$account->mutasi->pend_asal_mutasi == null) ?  '-' : $account->mutasi->pend_asal_mutasi}} </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Alamat</label>
                        <p class="card-description">{{(@$account->mutasi->pend_alamat_mutasi == null) ?  '-' : $account->mutasi->pend_alamat_mutasi}}</p>
                    </div>
                </div>
            </div>
<hr>
            <h4 class="mb-4">Orang Tua Siswa</h4>
            <h4 class="mb-4">Ayah</h4>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Nama Lengkap Ayah</label>
                        <p class="card-description">{{$account->waliayah->wali_nama_ayah}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">NIK Ayah</label>
                        <p class="card-description">{{$account->waliayah->nik_ayah}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">No. Telpon ayah</label>
                        <p class="card-description">{{$account->waliayah->no_telp_ayah}} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Pekerjaan Ayah</label>
                        <p class="card-description">{{$account->waliayah->pekerjaan_ayah}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Tempat Tanggal Lahir Ayah</label>
                        <p class="card-description">{{$account->waliayah->tempat_ayah}}, {{\Carbon\Carbon::parse($account->waliayah->tgl_lahir_ayah)->format('d F Y')}}</p>
                    </div>
                </div>
            </div>

            <h4 class="mb-4 mt-4">Ibu</h4>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Nama Lengkap Ibu</label>
                        <p class="card-description">{{$account->waliibu->wali_nama_ibu}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">NIK Ibu</label>
                        <p class="card-description">{{$account->waliibu->nik_ibu}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">No. Telpon Ibu</label>
                        <p class="card-description">{{$account->waliibu->no_telp_ibu}} </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Pekerjaan Ibu</label>
                        <p class="card-description">{{$account->waliibu->pekerjaan_ibu}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group ">
                        <label for="exampleInputName1">Tempat, Tanggal Lahir Ibu</label>
                        <p class="card-description">{{$account->waliibu->tempat_ibu}}, {{\Carbon\Carbon::parse($account->waliayah->tgl_lahir_ibu)->format('d F Y')}}</p>
                    </div>
                </div>
            </div>

            <hr>
            <h4 class="mb-4">Penghasilan Orang Tua Siswa</h4>
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group ">
                            <p class="card-description">{{$account->gaji}}</p>

                    </div>
                </div>
            </div>

<hr>
            <div class="row mt-4">
                <div class="float-end">
                    <a href="{{route('edit', $account->uuid)}}" type="submit" class="btn btn-primary mr-2">Edit</a>
                    <form action="{{route('status', $account->id)}}" method="POST" style="display: inline-block">
                        @csrf
                        @if ($account->status == 1)
                            <button type="submit" class="btn btn-danger ">
                                Uverifikasi Siswa
                            </button>
                        @else
                            <button type="submit" class="btn btn-success ">
                                Verifikasi Siswa
                            </button>
                        @endif
                    </form>
                    <a href="{{route('dashboard.user')}}" class="btn btn-light mr-2">Kembali</a>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
