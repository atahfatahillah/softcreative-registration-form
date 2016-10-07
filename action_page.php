<html>
<title>SoftCreative | Success!</title>
<style type="text/css">
	/**
	* Website using HTML5, PHP5, CSS3
	* HTML5 by SoftCreative Dev. Team
	* CSS3  by SoftCreative Dev. Team
	* PHP5  by SoftCreative Dev. Team
	**/
	html {
	}
	body {
		font-family: calibri;
		background-color: #16a085;
	}
	h2, h3, h4, h5, p, form, input {
		text-align: center;
	}
	h1 {
		color: #fff;
		text-align: center;
	}
</style>
<body>
<?php
	include_once "koneksi_sql.php"; koneksi_mysql();
	$nm 	= $_POST['nama'];
	$kls 	= $_POST['kelas'];
	$jrsn 	= $_POST['jurusan'];
	$notelp = $_POST['nomor_telp'];
	$alsn	= $_POST['alasan'];
	$sql	= "INSERT INTO daftar ( nama, kelas, jurusan, nomor_telp, alasan) VALUES ('$nm', '$kls', '$jrsn', '$notelp', '$alsn')";
	$eksekusi_query = mysql_query($sql);
	if ($eksekusi_query) {
	 	echo "Sukses, Data Tersimpan";
	 } 
	if (!$eksekusi_query) {
		die("Error Query : " .mysql_error());
	}
?>
</body>
</html>