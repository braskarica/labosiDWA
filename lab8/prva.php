<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Zdravko Dren</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <link rel="stylesheet" href="stil.css" />

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>

<?php
session_start();

session_destroy();
?>




  <section class="gray-boxes row">

		<div class="logo column column-6">
  
				<img class= "image image-featured" src="images/logo.png" alt="">
				<p class="moto"> Dominica sancta, quid remediis sunt. </p>
	
		</div>
  
		<div class="forma column column-6">
		
				<form  action="login.php" method="POST" >
					<div>
						<label for="name">Korisničko ime:</label>
						<input type="text" name="username" />
					</div>
					
					<div>
						<label for="password">Lozinka:     </br> </label>
						<input type="password" name="password" />
					</div>
					
					<div class="button">
						<button type="submit">Login</button>
					</div>
				</form> 
		</div>
  </section>



  <footer class="site-footer">
 
    <p>Copyright &copy; ZKD,2014</p>
	
  </footer>
</body>
</html>