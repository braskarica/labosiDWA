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
		<div class="dobarButton column column-2"> <a href="trazi.php"> Trazi doktora  </a> </div>
		</div>
  
		<div class="sadrzaj column column-9">
		
		  <form action="pdf.php" class="formaUnosPacjenta" method="post">
            

          <label for="ime">Ime:</label></br>
          <input id="ime" type="text" name="name" /></br></br>
		  
          <label for="prezime">Prezime:</label></br>
          <input id="prezime" type="text" name="lastname" /></br></br>
		  
		  
		  <label for="grupa">Krvna grupa:</label></br></br>
		  <input id="grupa" type="radio" name="krv" value="A"/>A
          <input id="grupa" type="radio" name="krv" value="B"/>B
		  <input id="grupa" type="radio" name="krv" value="AB"/>AB
		  <input id="grupa" type="radio" name="krv" value="0"/>0</br>
		  <input id="grupa+" type="radio" name="krv+" value="+"/>+
		  <input id="grupa-" type="radio" name="krv+" value="-"/>-</br></br>
		  
		  
          <p><input type="submit" value="Pošalji" class="InputButton" /></p>
		  
        </form>  
	
				
				
		</div>
  </section>









  <footer class="site-footer">
 
    <p>Copyright &copy; ZKD,2014</p>
	
  </footer>
   <script>
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>
</body>
</html>