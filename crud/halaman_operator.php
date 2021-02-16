<!DOCTYPE html>
<html>
<head>
	<title>Halaman Operator</title>
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Mega&family=Merienda+One&family=Raleway&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../crud/stylopr.css">
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<h1>Hello Opr!</h1>

	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
	<a href="logout.php" class = "btn">Logout</a>

	<br/>
	<br/>

	
</body>
</html>