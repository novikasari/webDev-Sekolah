@extends('layout.main')

@section('title', 'Detail Guru')

@section('container')
<div class="container">
        <div class="row">
             <div class="col-10">
             <h1 class="mt-3">Detail Guru</h1>

             <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{$teacher->nama_guru}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$teacher->jenis_kelamin}}</h6>
                    <p class="card-text">{{$teacher->tanggal_lahir}}</p>
                    <p class="card-text">{{$teacher->alamat_guru}}</p>                   
                    <p class="card-text">{{$teacher->no_telepon}}</p>   

                   <a href="{{$teacher->id}}/edit" class="btn btn-success">Edit</a>

                   <form action="/teachers/{{$teacher->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
                    <a href="/teachers" class="card-link">Back</a>
                </div>
                </div>
            </div>
         </div>
    </div>
@endsection