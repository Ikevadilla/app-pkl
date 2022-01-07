@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Nama dokter</div>
                    <div class="card-body">
                        <form action="{{ route('dokter.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Masukan Nama dokter</label>
                                <input type="text" name="nama_dokter"
                                    class="form-control @error('nama_dokter') is-invalid @enderror">
                                @error('nama_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan spesialis</label>
                                <input type="text" name="spesialis"
                                    class="form-control @error('spesialis') is-invalid @enderror">
                                @error('spesialis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan No Hp</label>
                                <input type="integer" name="no_hp"
                                    class="form-control @error('no_hp') is-invalid @enderror">
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="">Masukan gender</label>
                                <input type="text" name="gender"
                                    class="form-control @error('gender') is-invalid @enderror">
                                @error('gender')
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