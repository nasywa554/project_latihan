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
                <a href="/kelas" class="btn btn-secondary"> Kembali</a>
                <br />
                <br />              
                <form action="{{ route('kelas.update',$kelas->id) }}" method="post">
                    {{ csrf_field() }}
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $kelas->id }}"> <br />
                    <div class="form-group">
                        <label>kelas</label>
                        <input name="kelas" type="text" class="form-control" placeholder="kelas"
                            required="required" value="{{ $kelas->kelas }}">
                    </div>
                    <input type="submit" class="btn btn-primary" value="simpan">

                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
