    @extends('adminlte::page')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Keluhan</div>
                        <div class="card-body">
                            <form action="{{ route('keluhan.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Masukan Keluhan</label>
                                    <input type="text" name="nama_keluhan"
                                        class="form-control @error('nama_keluhan') is-invalid @enderror">
                                    @error('nama_keluhan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
    @endsection

    @section('css')

    @endsection

    @section('js')

    @endsection