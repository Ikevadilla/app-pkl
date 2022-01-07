@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">tgl_daftar</div>
                    <div class="card-body">
                        <form action="{{ route('daftar.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan tanggal daftar</label>
                                <input type="text" name="tgl_daftar"
                                    class="form-control @error('tgl_daftar') is-invalid @enderror">
                                @error('tgl_daftar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan kode pasien</label>
                                <input type="text" name="kd_pasien"
                                    class="form-control @error('kd_pasien') is-invalid @enderror">
                                @error('kd_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan kode poli</label>
                                <input type="text" name="kd_poli"
                                    class="form-control @error('kd_poli') is-invalid @enderror">
                                @error('kd_poli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan kode dokter</label>
                                <input type="text" name="kd_dokter"
                                    class="form-control @error('kd_dokter') is-invalid @enderror">
                                @error('kd_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan keluhan</label>
                                <input type="text" name="keluhan"
                                    class="form-control @error('keluhan') is-invalid @enderror">
                                @error('keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan kode obat</label>
                                <input type="text" name="kd_obat"
                                    class="form-control @error('kd_obat') is-invalid @enderror">
                                @error('kd_obat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            </div>
                        </form>
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