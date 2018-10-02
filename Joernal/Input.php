<?php 
 if(isset($_POST['eror']))
{
	$eror = $_POST['eror'];
}
else{
	$eror = "";
}
$pesan = "";
if($eror=="variabel_belum_set")
{
	$pesan="<h3> Maaf, Anda harus mengakses Input.php </h3>";
}
if ($eror=="nama_kosong")
{
	$pesan="<h4>Nama tidak boleh kosong </h4>";
}
if ($eror=="nama_harus_huruf")
{
	$pesan="<h4>Maaf, Nama Anda harus huruf</h4>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Input </title>
</head>
<body>
	
	<table align="center">
		<form action="Login.php" method="POST" enctype="multipart/form-data">
		<center>
			<?php
			echo $pesan;
			?>
		</center>
			<tr>
				<td colspan="2" ><h1> FORMULIR</h1></td>
			</tr>
			<tr>
				<td colspan="2" ><h1> KALTARA CERDAS</h1></td>
			</tr>
			<tr> 
				<td> NIM</td>
				<td>:</td>
				<td><input type="number" name="nim" minlength="1" maxlength="10" ></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" ></td>
			</tr>

			<tr>
				<td> Jenis Kelamin </td>
				<td>:</td>
				<td></br>
					<input type="radio" name="jenkel" value="Laki-laki">Laki-laki</br>
					<input type="radio" name="jenkel" value="Perempuan">Perempuan</br>
				</td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td> 
					<select name="jurusan">
						<option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
						<option value="D3 Sistem Informasi">D3 Sistem Informasi</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td></br>
					<input type="checkbox" name="Hobi[]" value="Bermain bola"> Bermain bola</br>
					<input type="checkbox" name="Hobi[]" value="Bermain basket"> Bermain basket</br>
					<input type="checkbox" name="Hobi[]" value="Bermain voli"> Bermain voli</br>
					<input type="checkbox" name="Hobi[]" value="Bermain tenis meja"> Bermain tenis meja</br>
				</td>
			</tr>
			<tr></br>
				<td> Comment</td>
				<td> : </td>
				<td><textarea name="komentar"></textarea></td>
			</tr>
			<tr>
				<td>Upload Foto</td>
				<td>:</td>
				<td><input type="file" name="gambar" id="gambar"></br></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="" value="Submit" style="width: 100px"></td>
			</tr>
			<img src="">


		</form>

	</table>
</body>
</html>