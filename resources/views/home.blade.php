@extends('adminlte::page')

@section('title','Dashboard')

@section('content_header')

Dashboard

@stop 

@section('content')
<div class="card-group">
  <div class="card">
    <img src="vendor/adminlte/dist/img/pasien.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Pasien</h5>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="vendor/adminlte/dist/img/dokter.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Dokter</h5>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="vendor/adminlte/dist/img/obat.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Obat</h5>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

@stop 

@section('css')
    
@stop 

@section('js')

@stop