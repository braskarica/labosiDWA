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
		<div class="dobarButton column column-2"> <a href="forma.php"> Forma pdf  </a> </div>
		<div class="dobarButton column column-2"> <a href="grafovi.php"> Grafovi  </a> </div>
			  <div class="dobarButton column column-2"> <a href="trazi.php"> Trazi doktora  </a> </div>
	
		</div>
  
		<div class="sadrzaj column column-9">

		
	<form action="ispis.php" class="formaUnosPacjenta" method="post">
            

          <label for="ime">Ime:</label></br>
          <input id="ime" type="text" name="name" /></br></br>
		  
          <label for="prezime">Prezime:</label></br>
          <input id="prezime" type="text" name="lastname" /></br></br>
		  
          <label for="spol">Spol:</label></br></br>
          <input id="spol" type="radio" name="gen" value="M"/>M
		  <input id="spol" type="radio" name="gen" value="Ž"/>Ž<br></br>

		  <label for="datum">Datum rođenja: </label>
          <p>Dan:&nbsp;&nbsp;&nbsp;
		     Mjesec:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
			 Godina: 
		  </p>
			     <select name="dan">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
				  <option value="4">4</option>
                  <option value="5">5</option>
				  <option value="6">6</option>
                  <option value="7">7</option>
				  <option value="8">8</option>
                  <option value="9">9</option>
				  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
				  <option value="13">13</option>
                  <option value="14">14</option>
				  <option value="15">15</option>
                  <option value="16">16</option>
				  <option value="17">17</option>
                  <option value="18">18</option>
				  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
				  <option value="22">22</option>
                  <option value="23">23</option>
				  <option value="24">24</option>
                  <option value="25">25</option>
				  <option value="26">26</option>
                  <option value="27">27</option>
				  <option value="28">28</option>
                  <option value="29">29</option>
				  <option value="30">30</option>
                  <option value="31">31</option>
                  </select>
				  
		  
			     <select name="mjesec">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
				  <option value="4">4</option>
                  <option value="5">5</option>
				  <option value="6">6</option>
                  <option value="7">7</option>
				  <option value="8">8</option>
                  <option value="9">9</option>
				  <option value="10">10</option>
                  <option value="11">11</option>
				  <option value="12">12</option>
                 
                  </select>  
				  
		 
			     <select name="godina">
                  <option value="1950">1950</option>
                  <option value="1951">1951</option>
				  <option value="1952">1952</option>
                  <option value="1953">1953</option>
				  <option value="1954">1954</option>
                  <option value="1955">1955</option>
				  <option value="1956">1956</option>
                  <option value="1957">1957</option>
				  <option value="1958">1958</option>
                  <option value="1959">1959</option>
				  <option value="1960">1960</option>
                  <option value="1961">1961</option>
				  <option value="1962">1962</option>
                  <option value="1963">1963</option>
                  <option value="1964">1964</option>
				  <option value="1965">1965</option>
                  <option value="1966">1966</option>
				  <option value="1967">1967</option>
                  <option value="1968">1968</option>
				  <option value="1969">1969</option>
                  <option value="1970">1970</option>
				  <option value="1971">1971</option>
                  <option value="1972">1972</option>
                  <option value="1973">1973</option>
				  <option value="1974">1974</option>
                  <option value="1975">1975</option>
				  <option value="1976">1976</option>
                  <option value="1977">1977</option>
				  <option value="1978">1978</option>
                  <option value="1979">1979</option>
				  <option value="1980">1980</option>
                  <option value="1981">1981</option>
                  <option value="1982">1982</option>
				  <option value="1983">1983</option>
                  <option value="1984">1984</option>
				  <option value="1985">1985</option>
                  <option value="1986">1986</option>
				  <option value="1987">1987</option>
                  <option value="1988">1988</option>
				  <option value="1989">1989</option>
                  <option value="1990">1990</option>
				  <option value="1991">1991</option>
                  <option value="1992">1992</option>
				  <option value="1993">1993</option>
				  <option value="1994">1994</option>
                  <option value="1995">1995</option>
				  <option value="1996">1996</option>
                  <option value="1997">1997</option>
				  <option value="1998">1998</option>
                  <option value="1999">1999</option>
				  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
				  <option value="2003">2003</option>
                  <option value="2004">2004</option>
				  <option value="2005">2005</option>
                  <option value="2006">2006</option>
				  <option value="2007">2007</option>
                  <option value="2008">2008</option>
				  <option value="2009">2009</option>
                  <option value="2010">2010</option>
				  <option value="2011">2011</option>
                  <option value="2012">2012</option>
				  <option value="2013">2013</option>
                  <option value="2014">2014</option>
                  </select></br></br>
		  
		  <label for="mjesto">Mjesto rođenja:</label></br>
          <input id="mjesto" type="text" name="mjesto" /></br></br>
		  
		  <label for="adresa">Adresa i mjesto stanovanja:</label></br>
          <input id="adresa" type="text" name="adresa" /></br></br>
		  
		  <label for="grupa">Krvna grupa (ako zna):</label></br></br>
		  <input id="grupa" type="radio" name="krv" value="A"/>A
          <input id="grupa" type="radio" name="krv" value="B"/>B
		  <input id="grupa" type="radio" name="krv" value="AB"/>AB
		  <input id="grupa" type="radio" name="krv" value="0"/>0</br>
		  <input id="grupa+" type="radio" name="krv+" value="+"/>+
		  <input id="grupa-" type="radio" name="krv+" value="-"/>-</br></br>
		  
		  <label for="tegobe">Ima li prijašnjih medicinskih tegoba (srčane tegobe, tlak, virusne bolesti (Hepatits, HIV)):</label></br></br>
          <input id="tegobe" type="radio" name="tegobe" value="Da"/>Da</br></br>
		  <input id="tegobe" type="radio" name="tegobe" value="Ne"/>Ne</br></br>
		  
		  <label for="kojetegobe">Ako je odgovor na prijašnje pitanje "Da" popuniti: Koje tegobe osoba ima</label></br>
          <textarea id="kojetegobe" name="description" rows="3" cols="50" class="InputTextArea"></textarea></br></br>
		  
		  <label for="alergija">Je li osoba alergična na lijekove:</label></br></br>
          <input id="alergija" type="radio" name="alergija" value="Da"/>Da</br></br>
		  <input id="alergija" type="radio" name="alergija" value="Ne"/>Ne</br></br>
		  <input id="alergija" type="radio" name="alergija" value="Ne zna"/>Ne zna</br></br>
		  
		  <label for="kojaalergija">Ako je odgovor na prijašnje pitanje "Da" popuniti: Na koje lijekove je osoba alergična</label></br>
          <textarea id="kojaalergija" name="description2" rows="3" cols="50" class="InputTextArea"></textarea></br></br>
		  
          <p><input type="submit" value="Posalji" class="InputButton" /></p>
		  
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