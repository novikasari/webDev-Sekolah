@extends('layout.main')

@section('title', 'Form Tambah Data Guru')

@section('container')
<div class="container">
        <div class="row">
             <div class="col-10">
             <h1 class="mt-3 my-3">Form Tambah Data Guru</h1>
             <form method="post" action="/teachers">
             @csrf

             <div class="form-group">
             <label for="nama_guru" class="form-label">Nama Guru</label>
                <input type="text" id="nama_guru" class="form-control @error('nama_guru') is-invalid @enderror" 
                placeholder="Masukkan Nama" name="nama_guru" value="{{old('nama_guru')}}">
                @error('nama_guru')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
             </div> 

             <div class="form-group">
             <label for="jenis_kelamin" class="form-label @error('jenis_kelamin') is-invalid @enderror">Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" name="jenis_kelamin" value="{{old('jenis_kelamin')}}">
                @error('jenis_kelamin')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
             </div> 

             <div class="form-group">
             <label for="tanggal_lahir" class="form-label @error('tanggal_lahir') is-invalid @enderror">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal Lahir" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                @error('tanggal_lahir')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
             </div> 

             <div class="form-group">
             <label for="alamat_guru" class="form-label @error('alamat_guru') is-invalid @enderror">Alamat Guru</label>
                <input type="text" id="alamat_guru" class="form-control" placeholder="Masukkan Alamat" name="alamat_guru" value="{{old('alamat_guru')}}">
                @error('alamat_guru')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
             </div> 

             <div class="form-group">
             <label for="no_telepon" class="form-label @error('no_telepon') is-invalid @enderror">Nomor Telepon</label>
                <input type="text" id="no_telepon" class="form-control" placeholder="Masukkan Nomor Telepon" name="no_telepon" value="{{old('no_telepon')}}">
                @error('no_telepon')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
             </div> 

             <div class="form-group">
             <label for="input_date" class="form-label">Input Date</label>
                <input type="date" id="input_date" class="form-control" placeholder="Masukkan Input  Date" name="input_date" value="{{old('input_date')}}">
             </div> 

              <button type="submit" class="btn btn-primary my-3">Tambah Data</button>
             </form>
           </div>
         </div>
    </div>
@endsection