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
		</div>
  
		<div class="sadrzaj column column-9">
		
		<?php     
			// read the post data 
			$data = array('100','200','300','400','500','350','270'); 
			$x_fld = array('A+','A-','B+','B-','AB+','AB-','0+','0-'); 
			$max = 0; 
			for ($i=0;$i<7;$i++){ 
			  if ($data[$i] > $max)$max=$data[$i];  // find the largest data 
			} 
			$im = imagecreate(320,255); // width , height px 

			$white = imagecolorallocate($im,255,255,255); // allocate some color from RGB components remeber Physics 
			$black = imagecolorallocate($im,0,0,0);   // 
			$red = imagecolorallocate($im,255,0,0);   // 
			$green = imagecolorallocate($im,0,255,0); // 
			$blue = imagecolorallocate($im,0,0,255);  // 
			// 
			// create background box 
			//imagerectangle($im, 1, 1, 319, 239, $black); 
			//draw X, Y Co-Ordinate 
			imageline($im, 10, 5, 10, 230, $blue ); 
			imageline($im, 10, 230, 300, 230, $blue ); 
			//Print X, Y 
			imagestring($im,3,15,5,"Pacijenti",$black); 
			imagestring($im,3,280,240,"Krv",$black); 
			imagestring($im,5,100,50,"Simple Graph",$red); 
			imagestring($im,5,125,75,"by Brane",$green); 

			// what next draw the bars 
			$x = 15;    // bar x1 position 
			$y = 230;    // bar $y1 position 
			$x_width = 20;  // width of bars 
			$y_ht = 0; // height of bars, will be calculated later 
			// get into some meat now, cheese for vegetarians; 
			for ($i=0;$i<7;$i++){ 
			  $y_ht = ($data[$i]/$max)* 100;    // no validation so check if $max = 0 later; 
			  imagerectangle($im,$x,$y,$x+$x_width,($y-$y_ht),$red); 
			  imagestring( $im,2,$x-1,$y+1,$x_fld[$i],$black); 
			  imagestring( $im,2,$x-1,$y+10,$data[$i],$black); 
			  $x += ($x_width+20);   // 20 is diff between two bars; 
			  
			} 
			imagejpeg( $im, "graph.jpeg", 90); 
			imagedestroy($im); 
			echo "<img src='graph.jpeg'><p></p>"; 
			
			
			
			//////////////////////////
			// PIE CHART ////////////
			/////////////////////////
			
			$data=array(31,14,37); //fill this array with your data - 
		?> 
				
	</div>
</section>


<footer class="site-footer">
 
    <p>Copyright &copy; ZKD,2014</p>
	
</footer>
</body>
</html>