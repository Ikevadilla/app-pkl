@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content_header')

<h2>Data Keluhan</h2>

@stop

@section('content')

 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                        <a href="{{ route('keluhan.create') }}" class="btn btn-sm btn-primary float-right">Tambah
                            keluhan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama keluhan</th>
                        <th>Aksi</th>

                    </tr>
                </thead>
                <tbody>
                @php $no=1 @endphp
                    @foreach ($keluhan as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama_keluhan}}</td>
                            <td>
                                <form class="text-center" action="{{route('keluhan.destroy',$data->id)}}" method="post">
                                @method('delete')
                                @csrf
                                    <a href="{{route('keluhan.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('keluhan.show',$data->id)}}" class="btn btn-warning">show</a>
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
  </div>
</div>

</div>

@stop

@section('css')

@stop

 @section('js')
 
@stop