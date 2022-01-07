@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data daftar</div>
                    <div class="card-body">
                        <form action="{{ route('daftar.update', $daftar->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> tanggal daftar</label>
                                <input type="text" name="tgl_daftar" value="{{ $daftar->tgl_daftar }}"
                                    class="form-control @error('tgl_daftar') is-invalid @enderror" disabled>
                                @error('tgl_daftar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> kode pasien </label>
                                <input type="text" name="kd_pasien" value="{{ $daftar->kd_pasien }}"
                                    class="form-control @error('kd_pasien') is-invalid @enderror" disabled>
                                @error('kd_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> kode poli</label>
                                <input type="text" name="kd_poli" value="{{ $daftar->kd_poli }}"
                                    class="form-control @error('kd_poli') is-invalid @enderror" disabled>
                                @error('kd_poli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> kode dokter</label>
                                <input type="text" name="kd_dokter" value="{{ $daftar->kd_dokter }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                @error('kd_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> keluhan</label>
                                <input type="text" name="keluhan" value="{{ $daftar->keluhan }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                @error('keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> kode obat</label>
                                <input type="text" name="kd_obat" value="{{ $daftar->kd_obat }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                @error('kd_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('daftar.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection