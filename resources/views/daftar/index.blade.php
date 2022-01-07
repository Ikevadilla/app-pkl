@extends('adminlte::page')

@section('content_header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Daftar</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('daftar.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            Pendfatran</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nomor</th>
                                    <th>tgl_daftar</th>
                                    <th>kd_pasien</th>
                                    <th>kd_poli</th>
                                    <th>kd_dokter</th>
                                    <th>keluhan</th>
                                    <th>kd_obat</th>
                                </tr>
                                @php $no=1; @endphp
                                @foreach ($daftar as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->tgl_daftar }}</td>
                                        <td>{{ $data->kd_pasien }}</td>
                                        <td>{{ $data->kd_poli }}</td>
                                        <td>{{ $data->kd_daftar }}</td>
                                        <td>{{ $data->keluhan }}</td>
                                        <td>{{ $data->kd_obat}}</td>
                                        <td>
                                            <form action="{{ route('daftar.destroy', $data->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <a href="{{ route('daftar.edit', $data->id) }}"
                                                    class="btn btn-info">Edit</a>
                                                <a href="{{ route('daftar.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')

@endsection

@section('js')

@endsection