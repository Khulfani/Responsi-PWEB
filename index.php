<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FanSCargo</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="menu">
		<nav>
			<h1>FanSCargo </h1>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="datapengirim.php">Cek Biaya Pengiriman</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</nav>
		<div class="home">
			<h1> Jasa Pengiriman Barang </h1><br>
			<p> FanSCargo ..... </p>
			<p> Melayani dengan sepenuh hati </p>
			<p> Kepuasan konsumen harus di Utamakan</p>
			<p> Silahkan Isi Form di samping untuk jasa pengiriman barang ------></p>
		</div>
		<div class="jasa">
			<div class="content">
				<h2> Data Pengirim</h2>
				<form action="proses.php" method="POST">
					<table>
						<tr>
							<td>Nama Lengkap</td>
							<td>:</td>
							<td><input type="text" name="nama" autocomplete="off"></td>
						</tr>
						<tr>
							<td>No Handphone</td>
							<td>:</td>
							<td><input type="number" name="no_hp" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Nama Barang</td>
							<td>:</td>
							<td><input type="text" name="nama_brg" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" autocomplete="off"></td>
						</tr>
						<tr>
							<td>Jarak(Km)</td>
							<td>:</td>
							<td><input type="text" name="jarak" autocomplete="off"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<button type="submit" name="kirim">Kirim</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
