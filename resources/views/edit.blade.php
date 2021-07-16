@extends('layouts.app')

@section('konten')
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <a href="/siswa" class="btn btn-secondary"> Kembali</a>
                <br />
                <br />
                @foreach($siswa as $siswa)
                <form action="/siswa/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $siswa->id }}"> <br />
                    <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="Nama"
                            required="required" value="{{ $siswa->nama }}">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required="required"
                            placeholder="alamat">{{ $siswa->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="email"
                            value="{{ $siswa->email }}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="simpan">

                </form>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
@endsection
