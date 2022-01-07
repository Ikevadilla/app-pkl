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
                                <label for="">Masukan Nama Pasien</label>
                                <input type="text" name="nama_pasien" value="{{ $pasien->nama_pasien }}"
                                    class="form-control @error('nama_pasien') is-invalid @enderror">
                                @error('nama_pasien')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Gender</label>
                                <input type="text" name="gender" value="{{ $pasien->gender }}"
                                    class="form-control @error('gender') is-invalid @enderror">
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Masukan Tempat, tanggal lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $pasien->tgl_lahir }}"
                                    class="form-control @error('tgl_lahir') is-invalid @enderror">
                                @error('tgl_lahir')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" value="{{ $pasien->alamat }}"
                                    class="form-control @error('alamat') is-invalid @enderror">
                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="">Masukan No Hp</label>
                                <input type="text" name="no_hp" value="{{ $pasien->no_hp }}"
                                    class="form-control @error('no_hp') is-invalid @enderror">
                                @error('no_hp')
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