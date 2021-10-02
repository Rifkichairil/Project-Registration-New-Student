@extends('user-app')

@section('style')


@endsection

@section('content')


<div class="popular-categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h3  class="mt-1 text-black">DI PORTAL PENERIMAAN PESERTA DIDIK BARU (PPDB) ONLINE</h4>
            <h3   class="mt-1 text-black">SDIT BAHRUL FIKRI </h3>
            <h3   class="mt-1 text-black">TAHUN AJARAN 2021/2022 </h3>
            {{-- <h6 class="mt-4 "> Silahkan klik tombol di bawah ini untuk mendaftarkan ananda di sekolah kami yang tercinta, atau download brosur untuk info sekolah.</h6> --}}
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <span class="icon"><img src="{{asset('file/icon/home.png')}}" alt=""></span>
                        Beranda
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="{{asset('file/icon/info.png')}}" alt=""></span>
                        Info Pendaftaran
                      </div>
                    </div>
                    <div  >
                      <div class="thumb ">
                        <span class="icon"><img src="{{asset('file/icon/writing.png')}}" alt=""></span>
                        Isi Formulir Pendaftaran
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <span class="icon"><img src="{{asset('file/icon/promotion.png')}}" alt=""></span>
                        Pengumuman Hasil Seleksi
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <span class="icon"><img src="{{asset('file/icon/telephone.png')}}" alt=""></span>
                        Kontak Kami
                      </div>
                    </div>
                  </div>
                </div>

                {{-- Tab Index --}}
                @include('page.user._tab-index')

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
