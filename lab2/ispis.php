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
	 ?> <br>

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
	  <div class="dobarButton column column-2"> <a href="unos.php"> Unos pacijenta </a> </div>	
	</div>
     
    </div>

    <div class="sadrzaj column column-9">
         

            <?php 
			  
			  $ime = $_POST['name'];
			  $prezime=$_POST['lastname'];
			  
			  $dan=$_POST['dan'];
			  $mjesec=$_POST['mjesec'];
			  $godina=$_POST['godina'];
			  $datum=$dan . '.' . $mjesec .'.'. $godina; 
			  $mjesto=$_POST['mjesto'];
			  $adresa=$_POST['adresa'];
			  $kojetegobe=$_POST['description'];
			  $kojealergije=$_POST['description2'];
 
			  if(isset($ime, $prezime, $_POST['gen'], $dan, $mjesec, $godina, $mjesto, $adresa, $_POST['krv'],$_POST['tegobe'],$_POST['alergija'])) { 
			  
					   echo '</br>' .'Pacijent:  '.$ime .' '.$prezime .
							 '</br>' .'Spol:  ' .$_POST['gen'] .
							 '</br>' .'Rođen:  '.$dan.'. '. $mjesec . $godina .'.  u ' .$mjesto .'u' .
							 '</br>' .'Adresa:  '.$adresa .				
							 '</br>' .'Krvna grupa:  '.$_POST['krv']; 

					if(isset($krv2)){	
			            echo $krv2 ;
			        }
			
			
			           echo 	 '</br>' .'Ima li tegoba:  ' .$_POST['tegobe'];
					             
								 
						if(isset($kojetegobe)){	
						
						echo	 '</br>' .'Tegobe:  ' .$_POST['description']; 
						
						}
						
					    echo      '</br>' .'Jeli osoba alergična na ljekove:  ' .$_POST['alergija'] ;           
                                 
						if(isset($kojealergije)){ 
						
						echo	 '</br>' .'Alergija na:  ' .$_POST['description2'];	
						
						}	

						
						  $spol=$_POST['gen'];
						  $krv=$_POST['krv'];
			             
						  
			              $tegobe=$_POST['tegobe'];
						  $alergija= $_POST['alergija'];
						  
						  if(isset($_POST['krv+'])){
						  $krv2=$_POST['krv+'];
						  }else {
						  $krv2=' ';
						  }
						  $krvna=$krv . $krv2;

						  
                    $con=mysqli_connect("localhost","root","123","zdk");
                        // provjera konekcije
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
              
                       mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
           
                       

            $query = "INSERT INTO unos(ime, prezime,spol,datumrodenja,mjesto,adresa,krvnagrupa,tegobe,kojetegobe,alergija,kojealergije) VALUES ('$ime', '$prezime', '$spol', '$datum', '$mjesto', '$adresa', '$krvna', '$tegobe', '$kojetegobe', '$alergija', '$kojealergije')";

            $result = mysqli_query($con, $query);

            mysqli_close($con);




						
			  }                    
			  
			   else {
				 echo "<script type='text/javascript'>alert('Molimo popunite sve podatke');
							  window.location='unos.php';
							   </script>";
				 
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