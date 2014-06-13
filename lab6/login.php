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

  <header class="site-header">
  
  <div class="row">
 
	  <img class= "logoMali" src="images/logo.png" alt="">
      
     <div class="logged column-3">
	 
Dobrodošli <?php

      session_start();
	  
	  if (!isset($_SESSION['ime'])){
			  if(!isset($_POST['username'])){
			  header('Location: prva.php');
			  }	 
			  $ime = $_POST['username'];
			  $password = $_POST['password'];
			  
			 $con=mysqli_connect("localhost","root","123","zdk");
			 if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();}
			 
			mysqli_query($con,"SET NAMES 'utf8'");
			mysqli_query($con,"SET CHARACTER_SET 'utf8'");
			
			$query = "SELECT * FROM korisnici WHERE username = '$ime' AND password = '$password';";
			$result = mysqli_query($con,$query);
			if (!$result) {
			echo $query;
				die('Invalid query: ' . mysql_error());
				}

			$row = mysqli_fetch_row($result);
			if($row==0){
			echo "<script type='text/javascript'>alert('Wrong username or password');
                          window.location='prva.php';
                           </script>";
			}
			
			$_SESSION['ime'] = $_POST['username'];
	 
			echo '<h2>'. $_SESSION['ime'] . '</h2>';			
			
		}
		else{
			echo '<h2>'. $_SESSION['ime'] . '</h2>';	
			
		}
 ?>

   <div class="buttondiv">
	  <a href="login.html" class="button button-style1">Odjava</a>
	  </div>
	  </div>
 </div>
  </header>


  <section class="unutarnja cf">

		<div class="column column-3 left-menu">
		
		<div class="dobarButton column column-2"> <a href="login.php"> Životopis  </a> </div>
		<div class="dobarButton column column-2"> <a href="pacjenti.php"> Popis pacijenata  </a> </div>
		<div class="dobarButton column column-2"> <a href="unos.php"> Unos pacijenta  </a> </div>
		<div class="dobarButton column column-2"> <a href="forma.php"> Forma pdf  </a> </div>
		<div class="dobarButton column column-2"> <a href="grafovi.php"> Grafovi  </a> </div>
		<div class="dobarButton column column-2"> <a href="trazi.php"> Trazi doktora  </a> </div>
		<div class="dobarButton column column-2"> <a href="listaj.php"> Listaj pacijente  </a> </div>
		</div>
  
		<div class="sadrzaj column column-9">
		<a href="#osobnipodaci"><div class="buttonSidro"> Osobni podaci </div></a>
		<a href="#skolovanje"><div class="buttonSidro"> Podaci o školovanju </div></a>
		<a href="#radnoiskustvo"><div class="buttonSidro"> Radno iskustvo </div></a>
		<a href="#znanja"><div class="buttonSidro"> Znanja i vještine </div></a>
		
		
		<a onmouseover="document.getElementById('osobni').style.display = 'block';" onmouseout="document.getElementById('osobni').style.display = 'none';"><h3 class="zivotopisNaslov"> Osobni podaci </h3></a>
		<div id="osobni">
		<p class="zivotopisParagraph">  Ime: Branimir </br>
		Prezime: Škarica </br>
		Mjesto i datum rođenja: Split, 10.06.1992. </br>
		</div>
	
 </p>
		<a onmouseover="document.getElementById('skolovanje').style.display = 'block';" onmouseout="document.getElementById('skolovanje').style.display = 'none';"><h3 class="zivotopisNaslov"> Podaci o školovanju </h3></a>
		<div id="skolovanje">
		<p class="zivotopisParagraph">  Osnovna škola Josip Pupačić </br> Srednja škola Jure Kaštelan, Jezična gimnazija </br> Fakultet: Tehničko Veleučilište u Zagrebu		</p>
		</div>
		<a onmouseover="document.getElementById('iskustvo').style.display = 'block';" onmouseout="document.getElementById('iskustvo').style.display = 'none';"> <h3 class="zivotopisNaslov"> Radno iskustvo </h3></a>
		<div id="iskustvo">
		<p class="zivotopisParagraph"> Rad u turističkom uredu,prijava i odjava gostiju  </p>
		</div>
		<a onmouseover="document.getElementById('znanja').style.display = 'block';" onmouseout="document.getElementById('znanja').style.display = 'none';">	<h3 class="zivotopisNaslov"> Znanja i vještine</h3></a>
		<div id="znanja">
		<p class="zivotopisParagraph"> Odlično znanje engleskog jezika.Dobro vladanje uredskim aplikacijama i internetom.
Dobro poznavanje C,C++,Java programskog jezika i Android platforme.Vrlo dobro poznavanje html-a,css-a.Poznavanje osnova php-a i MySQL-a. </p>
</div>
		
				 
	
		</div>
  </section>









  <footer class="site-footer">
 
    <p>Copyright &copy; ZKD,2014</p>
	
  </footer>
</body>
</html>