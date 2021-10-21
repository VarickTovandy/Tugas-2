<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 2 Praktikum</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="container">
		   	<h1 class="logo">Tugas 2 Praktikum</h1>
		    <nav>
		    	<ul>
		        <li><a href="#">Beranda</li>
		        <li><a href="#">Mahasiswa</a></li>
		        <li><a href="#">Info Praktikum</a></li>
			    </ul>
		    </nav>
		</div>
	</header>

	<form action="output.php" method="post">
		<div class="form_wrap">
			<div class="input_grp">
				<div class="input_wrap">
					<label for="nama">Nama Lengkap</label>
					<input type="text" id="fname" name="fname" placeholder="First Name">
					<input type="text" id="lname" name="lname" placeholder="Last Name">
				</div>
			</div>	

			<div class="input_wrap">
				<label>Jenis Kelamin</label>
					<ul>
					<li>
						<label class="radio_wrap">
						<input type="radio" name="jenis_kelamin" value="Perempuan" class="input_radio" checked>
						<span>Perempuan</span>
				</label>
					</li>
					<li>
						<label class="radio_wrap">
						<input type="radio" name="jenis_kelamin" value="Laki-Laki" class="input_radio">
						<span>Laki-Laki</span>
				</label>
					</li>
					</ul>
			</div>

			<div class="input_wrap">
				<label for="email">Email</label>
				<input type="text" id="email" name="email" placeholder="name@example.com">
			</div>

			<div class="input_wrap">
				<label for="alamat">Alamat</label>
				<textarea cols="30" rows="4" name="alamat" id="alamat"></textarea>
			</div>

			<div class="input_drp">
				<div class="input_wrap">
					<input type="text" style="width: 1000px" id="kota" name="kota" placeholder="City">
					<input type="text" style="width: 245px" id="provinsi" name="provinsi" placeholder="State">
					<input type="text" style="width: 245px" id="kodepos" name="kodepos" placeholder="Zip">
				</div>	
			</div>	

			<div class="input_wrap">
				<label for="matkul">Matkul</label>
				<select name="matkul">
				<option value="Desain Grafik">Desain Grafik</option>
				<option value="AI">AI</option>
				<option value="Dasar-Dasar Manajemen">Dasar-Dasar Manajemen</option>
				<option value="Sistem Operasi">Sistem Operasi</option>
				<option value="Pemrograman Web">Pemrograman Web</option>
				</select>
			</div>

			<div class="input_wrap">
				<input type="submit" value="Kirim Data" class="submit_btn">
			</div>	
		</div>	
	</form>

</body>
</html>