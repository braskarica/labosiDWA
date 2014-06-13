<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Zdravko Dren</title>

  <!-- Učitavanje stilskih datoteka -->
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="grid.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
  <link rel="stylesheet" href="stil.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</head>
<body>

  <header class="site-header">
<div class="row">
     
	  <img class= "logoMali" src="images/logo.png" alt="">
      
      <div class="logged column-3">
	  	  <p class="loggedime">
 Dobrodošli  <?php
	session_start();
 if (!isset($_SESSION['ime'])){
	header('Location: prva.php');
	
 }
 else
  echo '<h2>' . $_SESSION["ime"] .'</h2>'; ?> <br>

</p>

<div class="buttondiv">
	  <a href="prva.php" class="button button-style1">Odjava</a>
	  </div>
	  </div>
 </div>
  </header>


  <section class="unutarnja cf">
    <div class="column column-3 left-menu">
		
	 <div class="dobarButton column column-2"> <a href="login.php"> Životopis  </a> </div>
	  <div class="dobarButton column column-2"> <a href="pacjenti.php"> Popis pacjenata  </a> </div>
	  <div class="dobarButton column column-2"> <a href="unos.php"> Unos pacijenta </a> </div>
	  <div class="dobarButton column column-2"> <a href="forma.php"> Forma pdf  </a> </div>
	   <div class="dobarButton column column-2"> <a href="grafovi.php"> Grafovi  </a> </div>
	   			<div class="dobarButton column column-2"> <a href="trazi.php"> Trazi doktora </a> </div>	
				<div class="dobarButton column column-2"> <a href="listaj.php"> Listaj pacijente  </a> </div>

	  
	  
			
	
		</div>
     
    </div>

    <div class="sadrzaj column column-9">
         

            <?php 
			  
			   $ime = strtoupper($_GET['firstname']);
			  $prezime=strtoupper($_GET['lastname']);
			  
			 $url = 'http://stajp.vtszg.hr/~spredanic/DWA2/lab5/podaci.php';
			 $filedata = file_get_contents($url);
			 $arrson = json_decode($filedata,true);
			 
			$nesto = 0;
			for($i=0;$i<count($arrson);$i++)
			{
				$array = $arrson[$i];
				$firstname = $array['ime'];
				$lastname = $array['prezime'];
				if($firstname == $ime || $lastname == $prezime){
					$nesto = 1;
					echo $firstname . ' ';
					echo $lastname . '<br/>';			
					}
			}
			if($nesto == 0){
			echo 'nista nije pronadeno :( ';
			}
			
			
			?>
		 
		  
			   
		
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  
</body>
</html>