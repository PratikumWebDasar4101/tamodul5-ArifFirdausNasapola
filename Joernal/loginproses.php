<?php 
	session_start();

	$pengguna = array(
	"username" => "user",
	"password" => 123
);

	if ($pengguna["username"] == $_POST["username"] && $pengguna["password"] == $_POST["password"]) {
		$_SESSION["username"] = $pengguna["username"];
		$_SESSION["password"] = $pengguna["password"];
		$_SESSION["user"] = $pengguna;

		header("Location: Input.php");
	}else {
		header("Location: Awal.php");
	}
?>