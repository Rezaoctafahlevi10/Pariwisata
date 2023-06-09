<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	
	<div class="container mt-3">
		<div class="mb-3">
			<h3 class="text-center">Form Edit Wisata</h3>
			<a href="/index"> Kembali</a> 
			<br>
			@foreach($edit as $p)
			<form action="/index/update" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
				{{-- <label for="exampleFormControlInput1" class="form-label mt-2">Nama</label> --}}
				Nama  <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Nama wisata" name="nama" value="{{ $p->nama }}">
				<div class="mb-3">
				{{-- <label for="exampleFormControlTextarea1" class="form-label mt-2">Fasilitas</label> --}}
				Fasilitas  <textarea class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" required="required" name="fasilitas">{{ $p->fasilitas }}</textarea>
				</div>
				{{-- <label for="exampleFormControlInput1" class="form-label ">Harga</label> --}}
				Harga <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Harga" name="harga"value="{{ $p->harga}}">
					{{-- <label for="exampleFormControlInput1" class="form-label mt-2">Nama</label> --}}
				<input type="submit" class="form-control mt-5 bg-danger"  value="Simpan Data">
			</form>
			@endforeach
	</div>
</body>
</html>