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
                <a href="/guru" class="btn btn-secondary"> Kembali</a>
                <br />
                <br />              
                <form action="{{ route('guru.update',$guru->id) }}" method="post">
                    {{ csrf_field() }}
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $guru->id }}"> <br />
                    <div class="form-group">
                        <label>nama</label>
                        <input name="nama" type="text" class="form-control" placeholder="nama"
                            required="required" value="{{ $guru->nama }}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="simpan">

                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
