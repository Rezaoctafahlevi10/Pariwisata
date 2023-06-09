<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-3">
		<div class="mb-3">
			<h3 class="text-center">Form  Data Riwayat</h3>
			<a href="/riwayat"> Kembali</a> 
			<br>
			<br>
			<form action="/riwayat/tambah_riwayat" method="post">
				{{ csrf_field() }}
				{{-- <label for="exampleFormControlInput1" class="form-label mt-2">Nama</label> --}}
				tanggal <input type="date" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Tanggal" name="tanggal">
				<br>
				<div class="mb-3">
				{{-- <label for="exampleFormControlTextarea1" class="form-label mt-2">Fasilitas</label> --}}
				 wista <input type="text" class="form-control mt-2" id="exampleFormControlTextarea1" rows="3" required="required" name="wista"></input>
				</div>
				{{-- <label for="exampleFormControlInput1" class="form-label ">Harga</label> --}}
				Keuntungan <input type="number" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Harga" name="Keuntungan">
					{{-- <label for="exampleFormControlInput1" class="form-label mt-2">Nama</label> --}}
				<input type="submit" class="form-control mt-5 bg-danger"  value="Simpan Data">
			</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</body>
</html>