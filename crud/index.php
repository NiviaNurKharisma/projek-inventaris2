<!DOCTYPE html>
<html>
<head>
	<title>Hello good people!</title>
	<link href="https://fonts.googleapis.com/css2?family=Merienda+One&family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../crud/style.css">
</head>
<body>
	<div row>
		<h2>Hello good people!</h2>
	</div>
	

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="failed"){
			echo "<div class='alert'>Username dan Password not suitable !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Please login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Input your username .." required="required">
			<br>
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Input your password .." required="required">
			 <br><br><br>
			
			 <input type="submit" class="tombol_login" value="Login!">
				<a href="../kel.6/index.html" class = "btn btn2">Back</a>
			
			
		</form>
		
	</div>
 
 
</body>
</html>