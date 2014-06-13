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
  <script type="text/javascript">
	  //<![CDATA[ 
	$(window).load(function(){
	var $rows = $('#table tr');
	$('#search').keyup(function () {
		var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

		$rows.show().filter(function () {
			var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
			return !~text.indexOf(val);
		}).hide();
	});
	});//]]>  
</script>
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
			echo "<script type='text/javascript'>alert('You must be logged in');
								  window.location='prva.php';
								   </script>";
		
		}
		else{
			echo '<h2>' . $_SESSION["ime"] .'</h2>';
		}
?>

 <br>

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
		  <div class="dobarButton column column-2"> <a href="pacjenti.php"> Popis pacijenata  </a> </div>
		  <div class="dobarButton column column-2"> <a href="unos.php"> Unos pacijenta  </a> </div>
		  <div class="dobarButton column column-2"> <a href="forma.php"> Forma pdf  </a> </div>
	    <div class="dobarButton column column-2"> <a href="grafovi.php"> Grafovi  </a> </div>
		  <div class="dobarButton column column-2"> <a href="trazi.php"> Trazi doktora  </a> </div>
		  <div class="dobarButton column column-2"> <a href="listaj.php"> Listaj pacijente  </a> </div>

		</div>
  
		<div class="sadrzaj column column-9">
		
			<div class="formaTrazi column column-6">
							<label for="name">Traži:</label>
							<input type="text" id="search" placeholder="Search..." />
			</div>
		

		        <table id="table" border="3" width="100%">
			    
					<tr>
					 <?php  
                    $con=mysqli_connect("localhost","root","123","zdk");
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to database: " . mysqli_connect_error();
                         }
					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					    $result = mysqli_query($con,"SELECT * FROM pacijenti");
					  while($row = mysqli_fetch_array($result))
					    { 
					   echo 
					        '<tr>'.
							'<td>'. $row['ime'] .'</td>'.
							'<td>'.$row['prezime'].'</td>'.		   
					        '<td>'.$row['spol'].'</td>'.
							'<td>'.$row['datumrodenja'] .'</td>'.
							'<td>'.$row['mobitel'] .'</td>'.
							'<td>'. $row['adresa'] .'</td>'.
							'<td>'. $row['mjesto'] .'</td>'.
							'</tr>';
					    } 
					mysqli_close($con);
			         ?>
			      </tr> 
				</table>			
		</div>
  </section>




  <footer class="site-footer">
 
    <p>Copyright &copy; ZKD,2014</p>
	
  </footer>
</body>
</html>