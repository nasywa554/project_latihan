@extends('layouts.app')
@section('konten')
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<form>
			<div class="form-group">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-12">
							<h3>Data Siswa</h3>
							<a href="/siswa"> Kembali</a>	
							<br/>
							<br/>
							<form action="/siswa/store" method="post">
								{{ csrf_field() }}
								<div class="form-group">
    								<label>Nama</label>
    								<input type="text" class="form-control" placeholder="Nama">
  								</div>
								  <div class="form-group">
    								<label for="exampleInputPassword1">Alamat</label>
    								<textarea name="alamat" class="form-control" required="required" placeholder="alamat" ></textarea>
  								</div>
								  <div class="form-group">
    								<label>Email</label>
    								<input type="email" class="form-control" placeholder="email">
  								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>
@endsection