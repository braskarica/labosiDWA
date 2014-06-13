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
	<div class="dobarButton column column-2"> <a href="listaj.php"> Listaj pacijente </a> </div>	

		</div>
     
    </div>

    <div class="sadrzaj column column-9">
         

<?php


                  $con=mysqli_connect("localhost","root","123","zdk");
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }


					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
				
					 $json = array();
					    $result = mysqli_query($con,"SELECT * FROM unos");
                    

					  while($row = mysqli_fetch_array($result))
					   { 
								$bus = array(
								'ime' => $row['ime'],
								'prezime' => $row['prezime'],
								'spol' => $row['spol']
							                );
							array_push($json, $bus);
						}

						$jsonstring = json_encode($json);
					

					  $arrson = json_decode($jsonstring,true);
                       echo '<div id="json">			
							 </div>	 ';

					  mysqli_close($con);

                  ?>
			<button id="prethodni" type="button" onclick="myFunction2()">Prethodni</button>
		    <button id="slijedeci" type="button" onclick="myFunction()">Slijedeći</button>
		 
		  
			   
	  
     </div>

  </section>

 

  <footer class="site-footer">
  
	<hr>
    <p>Copyright &copy; ZKD, 2014</p>
  </footer>
  <script>
			 var js_var = <?php echo json_encode($arrson);?>;
			var len=Object.keys(js_var);
			var k=len.length;
			 var curr = 0;
			 
						function myFunction(){
							curr++;
					   document.getElementById("json").innerHTML= 'Pacijent: '+ js_var[curr].ime + ' ' + js_var[curr].prezime +'<br> Spol: ' + js_var[curr].spol;

                       }
                          
						function myFunction2(){
						curr--;	
						    document.getElementById("json").innerHTML= 'Pacijent: '+ js_var[curr].ime + ' ' + js_var[curr].prezime +'<br> Spol: ' + js_var[curr].spol;	
                       }
            </script>
  
</body>
</html>
