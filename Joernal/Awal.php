<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<form action="loginproses.php" method="post">
		<table align="center">
			<tr>
				<td colspan="3" align="center"><h1> KALTARA CERDAS</h1></td>
			</tr>
			<?php if(isset($_SESSION["pesan"])) : ?>
			<tr>
				<td><?php echo $pesan; ?></td>
			</tr>
			<?php endif; ?>
			<tr>
				<td colspan="3" align="center">Username</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">Password</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="password" name="password"></td>
			</tr>
			<tr></br>
				<td colspan="3" align="center"><input type="submit" name="submit" value="login" style="width: 172px;"></td>
			</tr>
		</table>
	</form>
</body>
</html>