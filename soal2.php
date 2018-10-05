<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="textarea" name="komentar" placeholder="Masukkan komentar"><br>
		<input type="submit" name="input">
	</form>
</body>
</html>


<?php 

$conn = mysqli_connect("localhost","root","","d_modul5");

if (isset($_POST["input"])) {
	$komentar = $_POST["komentar"];


	mysqli_query($conn, "UPDATE t_jurnal1 SET komentar = '$komentassr' where nim = $nim ");
	header("Location: soal3.php");
}



 ?>