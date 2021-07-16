@extends('layouts.app')

@section('konten')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12"> 
            <div>
                <a class="btn btn-primary"  href="{{ route('guru.create') }}"> + Tambah guru Baru </a>
            </div>
            <br>
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col" width="150">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($guru as $data)
                    <tr>
                        <th scope="row">{{ $data->id}}</th>
                        <td>{{ $data->nama}}</td>
                        <td>
                            <form action="{{ route('guru.destroy',$data->id) }}" method="POST">
                                <a class="btn btn-primary btn-sm" href="{{ route('guru.edit',$data->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
 
 @endsection