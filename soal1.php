<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post">
 		NIM : <input type="text" name="nim"><br>
 		NAMA<input type="text" name="nama"><br>
 		EMAIL<input type="text" name="email"><br>
 		<input type="submit" name="kirim">
 	</form>

 </body>
 </html>



<?php 

$conn = mysqli_connect("localhost","root","","d_modul5");


if (isset($_POST["kirim"])) {
	$nim = $_POST["nim"];
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$komentar = $_POST["komentar"];


if (strlen($nama)> 20) {
	$Error = "f";
	echo "Nama Maksimal 20 karakter";
} else {
	$Error = "t";
}

if (!is_numeric($nim)) {
	$nimError = "f";
	echo "NIM harus angka";
} 
else {
	$nimError = "t";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$emailErr = "f";
  echo "Format email salah";
} else {
	$emailErr = "t";
}


	if ($Error == "t" && $nimError == "t" && $emailErr == "t" ) {
		mysqli_query($conn, "INSERT INTO t_jurnal1 VALUES ('$nim','$nama','$email','$komentar')");
		echo "DATA BERHASIL DIINPUTKAN";
		header("Location: soal2.php");
	} 

	
}




?>

