@extends('layouts.admin')

@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Home<h1>
</div>
</div>
</div>
</div>
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <center>
               <h1 class="m-0">Galery<h1>
                <div class="card-body">
                <div class="text-center">
                        <img src=" {{ asset('assets/img/pasien1.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien2.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien3.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien4.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien5.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien6.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien7.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien8.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien9.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien10.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien11.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                        <img src=" {{ asset('assets/img/pasien12.jpg') }}" style="height: 25%; width: 25%" class="rounded" alt="...">
                      </div>
                </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection