<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Malang Travel</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<nav class="navbar bg-body-tertiary">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#">Malang Travel</a>
		  <i class="fa fa-user" aria-hidden="true"></i>
		</div>
</nav>
<section id="home">
    <div class="container text-center">
        <div class="row align-items-start">
          <div class="col-4  ">
           <ul>
            <li><a href="/">Home</a></li>
           <li><a href="/index">Wisata</a></li>
           <li><a href="/riwayat">Riwayat Pemesan</a></li>
           <li><a href="/logut">Logout</a></li>
           </ul>
          </div>
          <div class="col">
            <div class="row mt-5">
				<h3>Riwayat</h3>
					<a href="/riwayat/tambah_riwayat"><i class="fa-solid fa-plus" style="color: #3d6ed0;">TAMBAH</i></a>
			</div>
			<div class="col">
				<div class="row ">
					<table class="table table-light ms-5 mt-5 border-primary ">
						<thead>
						  <tr>
							<th>Id</th>
							<th>Tanggal</th>
							<th>Wista</th>
							<th>Biaya keuntungan</th>
							<th>Opsi</th>
						  </tr>
						  @foreach($riwayat as $p)
						<tr>
							<td>{{ $p->id}}</td>
							<td>{{ $p->tanggal}}</td>
							<td>{{ $p->wista }}</td>
							<td>{{ $p->Keuntungan}}</td>
							<td>
								{{-- <button type="button" class="btn btn-primary">
									<a href="/riwayat/form_edit{{ $p->id }}">
										<i class="fa-regular fa-pen-to-square"style="color:orange"></i>
									</a> --}}
								</button>
									<button type="button" class="btn btn-primary">
										<a href="/riwayat/hapus/{{ $p->id }}">
											<i class="fa-regular fa-trash" style="color:red"></i>
										</a> 
									</button>
							</td>
						</tr>
						@endforeach
						</thead>
					  </table>
				</div>
            </div>
          </div>
        </div>
    </div>
</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>