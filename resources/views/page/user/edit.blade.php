@extends('app')

@section('content')

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <form action="{{route('update', $account->uuid)}}" method="POST" enctype="multipart/form-data"  class="forms-sample">
                @csrf
                @method('PATCH')
                <h4 class="mb-4">Data Pribadi Siswa</h4>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{$account->nama_lengkap}}">
                    </div>
                    <div class="col-lg-6">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Name" value="{{$account->nik}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for="no_kk">No. Kartu Keluarga</label>
                        <input type="text" class="form-control" id="no_kk" name="no_kk" value="{{$account->no_kk}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="nisn">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Name" value=" {{(@$account->nisn == null) ?  '-' : $account->nisn}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="akte">No. Akte Lahir</label>
                        <input type="text" class="form-control" id="akte" name="akte" placeholder="Name" value="{{$account->akte}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="{{$account->gender}}" selected>{{$account->gender}}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label for="tempat">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Name" value="{{$account->tempat}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Name" value="{{$account->tgl_lahir}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <label for="alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" autocomplete="on" >{{$account->alamat}}</textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-2">
                        <label for="rt">RT</label>
                        <input type="number" class="form-control" id="rt" name="rt" placeholder="Name" value="{{$account->rt}}">
                    </div>
                    <div class="col-lg-2">
                        <label for="rw">RW</label>
                        <input type="number" class="form-control" id="rw" name="rw" placeholder="Name" value="{{$account->rw}}">
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-lg-4">
                        <label for="kelurahan">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Name" value="{{$account->kelurahan}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Name" value="{{$account->kecamatan}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="kota">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota" placeholder="Name" value="{{$account->kota}}">
                    </div>
                </div>
                <div class="row mt-3 ">
                    <div class="col-lg-4">
                        <label for="minat">Minat</label>
                        <input type="text" class="form-control" id="minat" name="minat" placeholder="Name" value="{{$account->minat}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="bakat">Bakat</label>
                        <input type="text" class="form-control" id="bakat" name="bakat" placeholder="Name" value="{{$account->bakat}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="hobi">Hobi</label>
                        <input type="text" class="form-control" id="hobi" name="hobi" placeholder="Name" value="{{$account->hobi}}">
                    </div>
                </div>
                <hr>

                <h4 class="mb-4 mt-3">Pendidikan Asal Siswa</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="pend_asal">Pendidikan Asal Siswa</label>
                        <input type="text" class="form-control" id="pend_asal" name="pend_asal" value="{{$account->pendidikan->pend_asal}}">
                    </div>
                    <div class="col-lg-3">
                        <label for="tinggi_badan">Tinggi Badan (Cm)</label>
                        <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan" placeholder="Name" value="{{$account->pendidikan->tinggi_badan}}">
                        <code > Harap masukan angka saja.</code>
                    </div>
                    <div class="col-lg-3">
                        <label for="berat_badan">Berat Badan (Kg)</label>
                        <input type="text" class="form-control" id="berat_badan" name="berat_badan" placeholder="Name" value="{{$account->pendidikan->berat_badan}}">
                        <code > Harap masukan angka saja.</code>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <label for="pend_alamat">Alamat</label>
                        <textarea type="text" class="form-control" name="pend_alamat" id="pend_alamat" placeholder="Masukan Alamat" autocomplete="on" >{{$account->pendidikan->pend_alamat}}</textarea>
                    </div>
                </div>
                <hr>
                <h4 class="mb-4 mt-3">Pendidikan Mutasi Siswa</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="pend_asal_mutasi">Pendidikan Asal Siswa</label>
                        <input type="text" class="form-control" id="pend_asal_mutasi" name="pend_asal_mutasi" value="{{@$account->mutasi->pend_asal_mutasi}}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <label for="pend_alamat_mutasi">Alamat</label>
                        <textarea type="text" class="form-control" name="pend_alamat_mutasi" id="pend_alamat_mutasi" placeholder="Masukan Alamat" autocomplete="on" >{{@$account->mutasi->pend_alamat_mutasi}}</textarea>
                    </div>
                </div>
                <hr>


                <h4 class="mb-4 mt-3">Orang Tua Siswa</h4>

                <h4 class="mb-4">Ayah</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="wali_nama_ayah">Nama Lengkap Ayah</label>
                        <input type="text" class="form-control" id="wali_nama_ayah" name="wali_nama_ayah" value="{{$account->waliayah->wali_nama_ayah}}">
                    </div>
                    <div class="col-lg-6">
                        <label for="nik_ayah">NIK</label>
                        <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" placeholder="Name" value="{{$account->waliayah->nik_ayah}}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for="tempat_ayah">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_ayah" name="tempat_ayah" placeholder="Name" value="{{$account->waliayah->tempat_ayah}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="tgl_lahir_ayah">Tanggal Lahir </label>
                        <input type="date" class="form-control" id="tgl_lahir_ayah" name="tgl_lahir_ayah" placeholder="Name" value="{{$account->waliayah->tgl_lahir_ayah}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for="pekerjaan_ayah">Pekerjaan </label>
                        <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Name" value="{{$account->waliayah->pekerjaan_ayah}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="no_telp_ayah">No. Telp </label>
                        <input type="text" class="form-control" id="no_telp_ayah" name="no_telp_ayah" placeholder="Name" value="{{$account->waliayah->no_telp_ayah}}">
                    </div>
                </div>

                <h4 class="mb-4 mt-4">Ibu</h4>
                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="wali_nama_ibu">Nama Lengkap Ayah</label>
                        <input type="text" class="form-control" id="wali_nama_ibu" name="wali_nama_ibu" value="{{$account->waliibu->wali_nama_ibu}}">
                    </div>
                    <div class="col-lg-6">
                        <label for="nik_ibu">NIK</label>
                        <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" placeholder="Name" value="{{$account->waliibu->nik_ibu}}">
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for="tempat_ibu">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_ibu" name="tempat_ibu" placeholder="Name" value="{{$account->waliibu->tempat_ibu}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="tgl_lahir_ibu">Tanggal Lahir </label>
                        <input type="date" class="form-control" id="tgl_lahir_ibu" name="tgl_lahir_ibu" placeholder="Name" value="{{$account->waliibu->tgl_lahir_ibu}}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for="pekerjaan_ibu">Pekerjaan </label>
                        <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" placeholder="Name" value="{{$account->waliibu->pekerjaan_ibu}}">
                    </div>
                    <div class="col-lg-4">
                        <label for="no_telp_ibu">No. Telp </label>
                        <input type="text" class="form-control" id="no_telp_ibu" name="no_telp_ibu" placeholder="Name" value="{{$account->waliibu->no_telp_ibu}}">
                    </div>
                </div>

                <h4 class="mb-4 mt-3">Penghasilan Orang TUa</h4>
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <select class="form-control" id="gaji" name="gaji">
                            <option value="{{$account->gaji}}" selected>{{$account->gaji}}</option>
                            <option value="Rp. 500.000 s/d Rp. 1.000.000">Rp. 500.000 s/d Rp. 1.000.000</option>
                            <option value="Rp. 1.000.000 s/d Rp. 2.500.000">Rp. 1.000.000 s/d Rp. 2.500.000</option>
                            <option value="Rp. 2.500.000 s/d Rp. 5.000.000">Rp. 2.500.000 s/d Rp. 5.000.000</option>
                            <option value="Diatas Rp. 5.000.000">Diatas Rp. 5.000.000</option>
                        </select>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="float-end">
                        <button type="submit" class="btn btn-primary ml-2">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
