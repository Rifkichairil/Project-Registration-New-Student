@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <p class="mb-4">Siswa Terdaftar</p>
                <p class="fs-30 mb-2">{{$accounts->count()}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <p class="mb-4">Status Pending</p>
                <p class="fs-30 mb-2">{{$pending}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4 stretch-card transparent">
        <div class="card card-tale">
            <div class="card-body">
                <p class="mb-4">Status Aktif</p>
                <p class="fs-30 mb-2">{{$active}}</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <div class="dloat-end">

            </div>

            <div class="d-flex justify-content-between mb-4">
                <h4 class="card-title">Data Siswa</h4>
                <a href="{{route('excel')}}" type="submit" class="btn btn-primary mr-2"  target="_blank">Export Excel</a>
            </div>

            <div class="table-responsive">
                <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Nama Lengkap Siswa</th>
                        <th class="th-sm">Nama Ayah</th>
                        <th class="th-sm">Nama Ibu</th>
                        <th class="th-sm">Gender </th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm" style="width: 15%">Aksi </th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- looping data siswa --}}
                        @foreach ($accounts as $account)
                        <tr>
                            <td>{{$account->nama_lengkap}}</td>
                            <td>{{$account->waliayah->wali_nama_ayah}}</td>
                            <td>{{$account->waliibu->wali_nama_ibu}}</td>
                            <td>{{$account->gender}}</td>
                            @if ($account->status == 0)
                                <td><label class="badge badge-danger">Pending</label></td>
                            @else
                                <td><label class="badge badge-success">Aktif</label></td>
                            @endif
                            <td>
                                <a href="{{route('detail', $account->uuid)}}" class="btn btn-primary btn-icon-text"> <i class="ti-file btn-icon-prepend"></i>Detail </a>
                                @if ($account->status == 1)
                                    <a href="{{route('print', $account->uuid)}}" class="btn btn-info btn-icon-text"> <i class="ti-download btn-icon-prepend"></i>Cetak </a>
                                @endif
                                <form action="{{route('delete', $account->uuid)}}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-icon-text"> <i class="ti-trash btn-icon-prepend"></i></button>
                                </form>


                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
            </div>
            </div>
        </div>

    </div>
</div>


@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>

@endsection
