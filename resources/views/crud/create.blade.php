@extends('layouts.app')
@include('nav')
@section('title', 'Mahasiswa')
@section('content')
<form action="/mahasiswa" method="POST">
        <div class="row">
          <div class="col"></div>
          <div class="col-6">
              <h2>Tambah Mahasiswa</h2>
              @csrf
              <div class="form-group">
                <label for="nama">NIM</label>
              <input type="text" class="form-control" name="nim" placeholder="Isikan NIM" value="{{ old('nim') }}">
                {{ $errors->first('nim') }}
                <small id="nimHelp" class="form-text text-muted"></small>
                <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap" value="{{ old('nama') }}">
                {{ $errors->first('nama') }}
                <small id="namaHelp" class="form-text text-muted"></small>
                <label for="fakultas">Fakultas</label>
                <select class="form-control" name="fakultas" id="fakultas">
                  <option disabled selected>Pilih Fakultas</option>
                  <option>Ilmu Komputer</option>
                  <option>Matematika dan Ilmu Pengetahuan Alam</option>
                  <option>Peternakan</option>
                  <option>Pertanian</option>
                  <option>Kedokteran</option>
                </select>
                {{ $errors->first('fakultas') }}
                <small id="fakultasHelp" class="form-text text-muted"></small>
                <label for="fakultas">Prodi</label>
                <select class="form-control" name="prodi" id="prodi">
                  <option disabled selected>Pilih Prodi</option>
                  <option>Teknologi Informasi</option>
                  <option>Informatika</option>
                  <option>Teknik Komputer</option>
                  <option>Sistem Informasi</option>
                  <option>Pendidikan Teknologi Informasi</option>
                </select>
                {{ $errors->first('fakultas') }}
                <small id="fakultasHelp" class="form-text text-muted"></small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col"></div>
          </div> 
            </form>
            @endsection