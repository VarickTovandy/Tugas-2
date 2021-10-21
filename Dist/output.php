<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas 2 Praktikum</title>
	<link rel="stylesheet" href="stylekeluaran.css">
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

	<div class="block">
		<?php
			echo "<p>Nama Lengkap		: $_POST[fname] $_POST[lname] </p><br>";
			echo "<p>Jenis Kelamin		: $_POST[jenis_kelamin] </p><br>";
			echo "<p>Email				: $_POST[email] </p><br>";
			echo "<p>Alamat			: $_POST[alamat],  $_POST[kota],  $_POST[provinsi],  $_POST[kodepos] </p><br>";
			echo "<p>Mata Kuliah		: $_POST[matkul] </p><br>";						
		?>
	</div>
</body>
</html>