<div>
    <div class="thumb">
        <div class="row">
            <h3 class="text-center mt-3 mb-4">Formulir Pendaftaran</h3>
            <div class="col-lg-11 ">
                <div class="left-text">
                    <form action="{{route('user.store')}}" method="post" id="contact">
                        @csrf
                        <div class="row">
                            <h4 class="mb-2">Data Pribadi Siswa (wajib)</h4>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="nik" id="nik" placeholder="Masukan NIK" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="no_kk" id="no_kk" placeholder="Masukan No. Kartu Keluarga" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="akte" id="akte" placeholder="Masukan No. Regis Akte Lahir" autocomplete="off" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-6">
                                <span style="color: red"></span>
                                <fieldset>
                                    <select class="form-control" name="gender"  id="gender" required>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <span style="color: red">Jika belum dapat harap isi dengan ( - )</span>

                                <fieldset>
                                    <input type="text" name="nisn" id="nisn" placeholder="Masukan No. NISN" autocomplete="off">
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="tempat" id="tempat" placeholder="Masukan Tempat Lahir" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" placeholder="Masukan Tanggal Lahir" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" autocomplete="off" required></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="rt" id="rt" placeholder="Masukan Rt" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="rw" id="rw" placeholder="Masukan Rw" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="kelurahan" id="kelurahan" placeholder="Masukan Kelurahan" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="kecamatan" id="kecamatan" placeholder="Masukan Kecamatan" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="kota" id="kota" placeholder="Masukan Kota" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="minat" id="minat" placeholder="Masukan Minat" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="bakat" id="bakat" placeholder="Masukan Bakat" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <fieldset>
                                    <input type="text" name="hobi" id="hobi" placeholder="Masukan Hobi" autocomplete="off" required>
                                </fieldset>
                            </div>
                        </div>

                        {{-- Pendidikan --}}
                        <div class="row">
                            <h4 class="mb-2">Pendidikan</h4>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="pend_asal" id="pend_asal" placeholder="Masukan Paud / TK Asal" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea type="text" name="pend_alamat" id="pend_alamat" placeholder="Masukan Alamat" autocomplete="off" required></textarea>
                                </fieldset>
                            </div>

                            <span style="color: red">Untuk tinggi badan dan berat badan harap masukan angka saja.</span>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="berat_badan" id="berat_badan" placeholder="Masukan Berat Badan" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="tinggi_badan" id="tinggi_badan" placeholder="Masukan Tinggi Badan" autocomplete="off" required>
                                </fieldset>
                            </div>
                        </div>


                        {{-- Wali --}}
                        <div class="row">
                            <h4 class="mb-2">Orang tua (wajib)</h4>
                            <h4 class="mb-2 mt-2">Ayah</h4>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="wali_nama_ayah" id="wali_nama_ayah" placeholder="Masukan Nama Lengkap Ayah" autocomplete="off" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="nik_ayah" id="nik_ayah" placeholder="Masukan NIK" autocomplete="off" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="tempat_ayah" id="tempat_ayah" placeholder="Masukan Tempat Lahir" autocomplete="off" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="date" name="tgl_lahir_ayah" id="tgl_lahir_ayah" placeholder="Masukan Tanggal Lahir" autocomplete="off" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="pekerjaan_ayah" id="pekerjaan_ayah" placeholder="Masukan Pekerjaan" autocomplete="off" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6">
                                    <fieldset>
                                        <input type="text" name="no_telp_ayah" id="no_telp_ayah" placeholder="Masukan No. Telpon" autocomplete="off" required>
                                    </fieldset>
                                </div>
                        </div>

                        <div class="row">
                            <h4 class="mb-2">Ibu</h4>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="wali_nama_ibu" id="wali_nama_ibu" placeholder="Masukan Nama Lengkap Ibu" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="nik_ibu" id="nik_ibu" placeholder="Masukan NIK" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="tempat_ibu" id="tempat_ibu" placeholder="Masukan Tempat Lahir" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="date" name="tgl_lahir_ibu" id="tgl_lahir_ibu" placeholder="Masukan Tanggal Lahir" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="pekerjaan_ibu" id="pekerjaan_ibu" placeholder="Masukan Pekerjaan" autocomplete="off" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <input type="text" name="no_telp_ibu" id="no_telp_ibu" placeholder="Masukan No. Telpon" autocomplete="off" required>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <h4 class="mb-2"> Penghasilan Orang Tua</h4>
                            <div class="col-lg-12">
                                <select class="form-control" name="gaji"  id="gaji" required>
                                    <option value="Rp. 500.000 s/d Rp. 1.000.000">Rp. 500.000 s/d Rp. 1.000.000</option>
                                    <option value="Rp. 1.000.000 s/d Rp. 2.500.000">Rp. 1.000.000 s/d Rp. 2.500.000</option>
                                    <option value="Rp. 2.500.000 s/d Rp. 5.000.000">Rp. 2.500.000 s/d Rp. 5.000.000</option>
                                    <option value="Diatas Rp. 5.000.000">Diatas Rp. 5.000.000</option>
                                </select>
                            </div>
                        </div>

                        <hr>
                        {{-- Pendidikan Mutasi--}}
                        <div class="row">
                            <h4 class="mb-2">Pendidikan Mutasi</h4>
                            <span style="color: red">Jika tidak harap dikosongkan saja.</span>

                            <span style="color: red"></span>

                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="pend_asal_mutasi" id="pend_asal_mutasi" placeholder="Masukan SD Asal" autocomplete="off" >
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea type="text" name="pend_alamat_mutasi" id="pend_alamat_mutasi" placeholder="Masukan Alamat" autocomplete="off" ></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <hr>
                        <span style="color: red">Harap dicek kembali, pastikan semua data telah terisi dengan benar.</span>

                        <div class="row">
                            <button type="submit" class="main-white-button mb-2">Simpan</button>
                            {{-- <div class="main-white-button"><a rel="nofollow" href="https://templatemo.com/contact"><i class="fa fa-eye"></i> Read More</a></div> --}}
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
