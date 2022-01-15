@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data keluhan</div>
                    <div class="card-body">
                        <form action="{{ route('keluhan.update', $keluhan->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">Masukan Nama keluhan</label>
                                <input type="text" name="nama_keluhan" value="{{ $keluhan->nama_keluhan }}"
                                    class="form-control @error('nama_keluhan') is-invalid @enderror">
                                @error('nama_keluhan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
@endsection