<?php  
 	$nim     = $_POST["nim"];
 	$nama	   = $_POST["nama"];
 	$email	 = $_POST["email"];
  $jenkel  = $_POST["jenkel"];
  $jurusan = $_POST["jurusan"];
  $Hobi    = $_POST["Hobi"];

      $dir = "foto/";
      $nama_file = $_FILES["gambar"]["name"];
      $nama_file_tmp = $_FILES["gambar"]["tmp_name"];
      $target_file = $dir.$nama_file;
      move_uploaded_file($nama_file_tmp, $target_file);

  	if(isset($_POST['nama']) AND isset($_POST["email"]))
  	{
      $nim      = $_POST["nim"];
  		$nama     = $_POST['nama'];
  		$email    = $_POST['email'];
      $Hobi    = $_POST["Hobi"];
      $komentar = $_POST['komentar'];
  			$nama	= htmlspecialchars($nama);
  			$email	= strip_tags($email);
        $kata_komentar = explode(" ", $komentar);
        $count_komentar = count($kata_komentar);
  	}
  	else{
  		header("Location: Input.php?eror = variabel_belum_set");
  	}
  	if(empty($nama))
  	{
  		header("Location: Input.php?eror=nama_kosong");
  	}
  	if(is_numeric($nama))
  	{
  		header("Location: Input.php?eror=nama_harus_huruf");
  	}
  	else{
  		echo "<center>Selamat Datang $nama</center>";
      echo "<br>";
      echo "<center> Email Anda $email</center>";
      echo "<br>";
      echo "<center> NIM $nim </center>";
      echo "<br>";
  	  echo "<center> Jenis Kelamin $jenkel</center>";
      echo "<center> Jurusan Anda $jurusan </center>";

      foreach ($Hobi as $key => $value) {
        echo "<center> Hobi Anda ". $value." </center>";
      }
    
    }

    if ($count_komentar < 5) {
          echo "<center>Kalimat harus lebih dari Lima Karakter</center>";
          echo "<br>";
        }else echo "<center>Komentar: $komentar</center";{
        }
        echo"<br>";
 ?>
 <center>
 <img src="<?php  echo($target_file) ?>">
 </center>