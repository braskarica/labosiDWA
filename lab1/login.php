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

$user='brane';
					 $pass='123';
                     $ime = $_POST['username'];
					 $lozinka = $_POST['password'];
					 if($ime==$user && $lozinka==$pass){
                     echo $ime;
					 } else {


					 echo "<script type='text/javascript'>alert('Wrong username or password');
                          window.location='login.html';
                           </script>";
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