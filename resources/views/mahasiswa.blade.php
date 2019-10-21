@extends('layouts.app')
@include('nav')
@section('title', 'Mahasiswa')
@section('content')
  <div class="container">
    {{-- <div class="row">
      <div class="col"></div>
      <div class="col-8">
          <table class="table table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">E-Mail</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($user as $usr)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $usr->name }}</td>
                  <td>{{ $usr->email }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>
      <div class="col"></div>
    </div> --}}

    <div class="row mt-5">
        <div class="col"></div>
        <div class="col-8">
          <h2>Tabel Mahasiswa</h2>
        <a href="{{ url('mahasiswa/create') }}">Tambah Mahasiswa</a>
            <table class="table table-hover">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Prodi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mahasiswa as $mhs)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->fakultas }}</td>
                    <td>{{ $mhs->prodi }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <div class="col"></div>
      </div>
  </div>
  

  
@endsection