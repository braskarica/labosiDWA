  <?php 
			  require("../fpdf/fpdf.php"); 
			  
			  $pdf=new FPDF();
			  $pdf->AddPage();
			  $pdf->SetFont('Arial','B',16);
			  $pdf->cell(70,10," Ime ",1);
              $pdf->cell(70,10," Prezime ",1);
              $pdf->cell(50,10," Krv ",1,1);
			  
			 
                         
			             if(isset($_POST['krv'])){
						 
						 $krv=$_POST['krv'];
						 }
						 else{
						 $krv='';
						 
						 }
						  
			            
						  if(isset($_POST['krv+'])){
						  
						  $krv2=$_POST['krv+'];
						  }else {
						  $krv2='';
						  }
						  $krvna=$krv. $krv2;
			 
			    
 			  $con=mysqli_connect("localhost","root","123","zdk");
                        // provjera konekcije
                    if (mysqli_connect_errno())
                      {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                         }
						 
						 
					    mysqli_query($con,"SET NAMES 'utf8'");
					    mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					/* povlače se podaci iz baze */
					    $result = mysqli_query($con,"SELECT * FROM unos");
                     /* ime odredišta koje je kliknuto se traži u bazi i ispisuje se određeni sadržaj */
					  while($row = mysqli_fetch_array($result))
					    { 
						
						 if(($_POST['name']== $row['ime'])||($_POST['lastname']== $row['prezime'])||($krvna == $row['krvnagrupa']) ){
						 
						  $pdf->Cell(70,10, $row['ime'],1);
                          $pdf->Cell(70,10, $row['prezime'],1);						  
						  $pdf->Cell(50,10, $row['krvnagrupa'],1,1);
						 }
					 
					    } 

					  
					mysqli_close($con);
			  
		
			
			  
				

				
				
  
				$pdf->Output();
			          
						
			/* 	header("Content-Type: application/pdf");

			 header('Content-Disposition:attachment; filename="pdf.pdf"'); */
			
						
			?>