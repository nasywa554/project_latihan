@extends('layouts.app')

@section('konten')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div>
                <a class="btn btn-primary" href="/siswa/tambah"> + Tambah Siswa Baru </a>
            </div>
            <br>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col" width="150">Opsi</th>
                    </tr>
@foreach($siswa as $siswa)
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $siswa->id}}</th>
                        <td>{{ $siswa->nama}}</td>
                        <td>{{ $siswa->alamat}}</td>
                        <td>{{ $siswa->email}}</td>
                        <td>
                        <a class="btn btn-primary" href="/siswa/edit/{{ $siswa->id }}">Edit</a>  
                        <a class="btn btn-danger" href="/siswa/hapus/{{ $siswa->id }}">Hapus</a>
                        </td>
                    </tr> 
@endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
 
 @endsection