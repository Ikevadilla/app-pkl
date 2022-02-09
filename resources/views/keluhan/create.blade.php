@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content_header')

<h2>Data Keluhan</h2>

@stop

@section('content')

<div class="row">

<div class="col-sm-1"></div>
<div class="card col-md-10">
  <h2 class="card-header">keluhan
    <a href="{{ route('keluhan.index') }}" class="btn btn-default float-right col-sm-2"><span class="fa fa-arrow-left">&nbsp;</span> Kembali</a>
</h2>
  <div class="card-body">
    <div class="col-md-12">
        <form role="form" action="{{ route('keluhan.store') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Nama keluhan</label>
                    <input type="text" name="nama_keluhan" class="form-control" placeholder="Nama keluhan">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <button class="btn btn-default" type="reset">Batal</button>
                </div>
            </form>
        </div>
  </div>

@stop

@section('css')

@stop

 @section('js')
 
@stop