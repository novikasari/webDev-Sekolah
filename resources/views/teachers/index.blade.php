@extends('layout.main')

@section('title', 'Daftar Guru')

@section('container')
<div class="container">
        <div class="row">
             <div class="col-10">
             <h1 class="mt-3">Daftar Guru</h1>
             
             <a href="/teachers/create" class="btn btn-success my-3">Tambah Data Guru</a>
           
            @if (session('status'))
                <div class="alert alert-success">
                {{session('status')}}
                </div>
            @endif

             <ul class="list-group">
                @foreach($teachers as $teacher)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$teacher->nama_guru}}
                    <a href="/teachers/{{$teacher->id}}" class="btn btn-primary">Detail</a>
                </li>
                @endforeach
            </div>
         </div>
    </div>
@endsection