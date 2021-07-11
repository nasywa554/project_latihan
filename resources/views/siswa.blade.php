@extends('layouts.app')

@section('konten')

    <body>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
            @foreach($siswa as $siswa)
            <tr>
                <td>{{ $siswa->nama}}</td>
                <td>{{ $siswa->alamat}}</td>
                <td>{{ $siswa->email}}</td>
            </tr>
            @endforeach
        </table>
    </body>
     
 
 @endsection