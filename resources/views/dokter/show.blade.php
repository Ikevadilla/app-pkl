@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data dokter</div>
                    <div class="card-body">
                        <form action="{{ route('dokter.update', $dokter->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama dokter</label>
                                <input type="text" name="nama_dokter" value="{{ $dokter->nama_dokter }}"
                                    class="form-control @error('nama_dokter') is-invalid @enderror" disabled>
                                @error('nama_dokter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> spesialis </label>
                                <input type="text" name="spesialis" value="{{ $dokter->spesialis }}"
                                    class="form-control @error('spesialis') is-invalid @enderror" disabled>
                                @error('spesialis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> No_Hp</label>
                                <input type="text" name="no_hp" value="{{ $dokter->no_hp }}"
                                    class="form-control @error('no_hp') is-invalid @enderror" disabled>
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> gender</label>
                                <input type="text" name="gender" value="{{ $dokter->gender }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('dokter.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection