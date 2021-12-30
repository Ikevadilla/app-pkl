@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pasien</div>
                    <div class="card-body">
                        <form action="{{ route('pasien.update', $pasien->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for=""> Nama Pasien</label>
                                <input type="text" name="nama" value="{{ $pasien->nama }}"
                                    class="form-control @error('nama') is-invalid @enderror" disabled>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           <div class="form-group">
                                <label for=""> Gender </label>
                                <input type="text" name="gender" value="{{ $pasien->gender }}"
                                    class="form-control @error('gender') is-invalid @enderror" disabled>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Tempat, tanggal lahir</label>
                                <input type="text" name="tgl_lahir" value="{{ $dataanak->tgl_lahir }}"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror" disabled>
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> Alamat</label>
                                <input type="text" name="alamat" value="{{ $pasien->alamat }}"
                                    class="form-control @error('pendidikan') is-invalid @enderror" disabled>
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for=""> No Hp</label>
                                <input type="text" name="no_hp" value="{{ $pasien->no_hp }}"
                                    class="form-control @error('no_hp') is-invalid @enderror" disabled>
                                @error('no_hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">

                                <a href="{{ route('pasien.index') }}" class="btn btn-block btn-primary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection