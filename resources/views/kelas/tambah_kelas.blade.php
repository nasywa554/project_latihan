@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div class="form-group">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<h3>Data kelas</h3>
						<a href="/kelas" class="btn btn-secondary"> Kembali</a>	
						<br/>
						<br/>
						<form  action="{{ route('kelas.store') }}"  method="post">
							{{ csrf_field() }}
							<div class="form-group">
								<label>kelas</label>
								<input type="text" class="form-control" name="kelas" placeholder="kelas">
							</div>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
@endsection