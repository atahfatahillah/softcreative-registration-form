<!DOCTYPE html>
<html>
<head>
	<title>SoftCreative | Registration</title>
</head>
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
	form {
	}
	input {
		width: 300px;
		max-width: 100%;
		height: 30px;
		border: 2px solid #fff;
		border-radius: 5px;
		border: 0px;
		    -webkit-transition: background-color 0.4s, -webkit-transform 0.4s; /* Safari */
    transition: background-color 0.4s, transform 0.4s;
	}
	input.txtarea {
		width: 300px;
		max-width: 100%;
		height: 250px;
		border-radius: 5px;
		border: 0px;
	}
	input:hover {
		background-color:rgba(25, 181, 254, 0.2);
		border: 2px solid #fff;
		    -webkit-transition: background-color 0.4s, -webkit-transform 0.4s; /* Safari */
    transition: background-color 0.4s, transform 0.4s;
	}
	button.btn {
		margin-top: 10px;
		width: 100px;
		height: 40px;
		border:0px;
		border-radius: 5px;
		background-color: #fff;
		    -webkit-transition: background-color 0.4s, -webkit-transform 0.4s; /* Safari */
    transition: background-color 0.4s, transform 0.4s;
	}
	button.btn:hover {
		background-color: #4c4c4c;
		    -webkit-transition: background-color 0.4s, -webkit-transform 0.4s; /* Safari */
    transition: background-color 0.4s, transform 0.4s;
	}
</style>
<body>
<h1>Sign Up Here!</h1>
<form action="action_page.php" method="POST" accept-charset="UTF-8"
enctype="application/x-www-form-urlencoded" autocomplete="on" novalidate>
	<input type="text" value="Nama" name="nama">
	<br><br>
	<input type="text" value="Kelas" name="kelas">
	<br><br>
	<input type="text" value="Jurusan" name="jurusan">
	<br><br>
	<input type="text" value="No. Telp" name="nomor_telp">
	<br><br>
	<input type="text" class="txtarea" value="Alasan" name="alasan">
	<br><br>
	<button class="btn" type="submit" name="button" value="submit">Submit</button>
</form>
</body>
</html>