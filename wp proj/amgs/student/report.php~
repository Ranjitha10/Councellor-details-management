<?php
	
	session_start();
	/*if(!isset($_SESSION['USN']))
{
	header("Location: stulogin.php");	
}	*/
	require('Library/fpdf/MultiCellBlt2.php');

	$con = mysqli_connect("localhost","root","","amgs");
	
	
	
	$usn=$_SESSION['USN'];
	//echo $usn;
//$usn=$_POST["USN"];
	$whichinternal="internal1";
	//$whichinternal=$_POST["whichinternal"];

	
	
	
	$pdf = new PDF();
	
$pdf->AddPage();

		$pdf->SetLeftMargin(15);
		$pdf->SetRightMargin(20);
	
	
	
		
		$res = mysqli_query($con,"Select name from student where USN like '$usn'");
		$a = mysqli_fetch_array($res);
		$name = $a[0];
		
				
		$subct=6;
		//$sub[0]="12IS62";
		$sub=array();
		$i=0;
		$coresubcount=4;
		$res=mysqli_query($con,"select * from subject");
		while($row=mysqli_fetch_array($res))
		{
			if($coresubcount!=0)
			{
				$sub[$i++]=$row["course_code"];
			$coresubcount--;
			}
			
		}
		$res2=mysqli_query($con,"select * from electivec where USN='$usn'")
				or die(mysqli_error());
		$row2=mysqli_fetch_array($res2);

		$sub[$i++]=$row2["course_code"];

		$res2=mysqli_query($con,"select * from electived where USN='$usn'")
				or die(mysqli_error());
		$row2=mysqli_fetch_array($res2);

		$sub[$i++]=$row2["course_code"];


		$subname=array();
		$maxclasses=array();
		$a=array();

		for($i=0; $i < $subct; $i++)
		{
			$newsub=$sub[$i];
			
			$res = mysqli_query($con,"Select * from subject where course_code='$newsub'")
					or die(mysqli_error()); 
			$a = mysqli_fetch_array($res);
			$subname[$i] = $a["subjectname"];
			$maxclasses[$i]=$a[$whichinternal];
			 
		}

		
		$dep="Information Science and Engineering";

		
		$pdf->Image('Library/fpdf/logo.png',40,8.00125,0,18);
				$pdf->SetXY(30,10.00125);
				$pdf->SetFont('Arial','B',8);
				$pdf->Cell(0,0,'RASHTREEYA SIKSHANA SAMITHI TRUST',0,0,'C');
				$pdf->Ln(5);
				$pdf->SetFont('Arial','B',16);
				$pdf->SetX(30);
				$pdf->Cell(0,0,'R. V. COLLEGE OF ENGINEERING',0,0,'C');
				$pdf->Ln(5);
				$pdf->SetFont('Arial','I',7);
				$pdf->SetX(30);
				$pdf->Cell(0,0,'(Autonomous Institute affiliated to Visvesvaraya Technological University, Belgaum)',0,0,'C');
				$pdf->Ln(3);
				$pdf->SetFont('Arial','IU',7);
				$pdf->SetX(30);
				$pdf->Cell(0,0,'Approved by All India Council for Technical Education, New Delhi.',0,0,'C');
				
				
				$pdf->Ln(5);
				$pdf->SetLineWidth(.4);
				$pdf->Line(10,$pdf->GetY(),200,$pdf->GetY());
				$pdf->Ln(1);
				$pdf->SetLineWidth(0);
				$pdf->Line(10,$pdf->GetY(),200,$pdf->GetY());
				$pdf->Ln(4);
				$pdf->SetFont('Arial','',12);
				$pdf->Cell(0,0,'Department of '.$dep,0,0,'C');
				$pdf->Ln(7);
				$pdf->SetX(11);
				$pdf->SetFont('Arial','',10);
				$pdf->Cell(0, 0, "Ref No: RVCE /  2014  - 2015   ", 0, 0, '');
				$pdf->SetFont('Arial','B',10);
				//to be changed
				$date=date("Y-m-d");
				$pdf->Cell(0, 0, 'Date: '.$date.' ', 0, 0, 'R');
				$pdf->Ln(7);
				$pdf->SetFont('Arial','BU',13);
				$pdf->Cell(0, 0, "PROGRESS REPORT", 0, 0, 'C');
				$pdf->Ln(7);
				$pdf->SetFont('Arial','',10);
		
				$pdf->Cell(0,0,'To,');
				$pdf->Ln(5);
				$name="parent/guardian name";
				$pdf->Cell(0,0,'Parent / Guardian of '.$name.' ');
				$pdf->Ln(5);
				$pdf->Cell(0,0,'Dear Sir / Madam, ');
				$pdf->Ln(3);
				
				$dispsem=6;
				$pdf->Multicell(0, 5 , 'I am herewith furnishing the progress report of your ward Mr./Ms. '.$name.' bearing Roll No: '.$usn.' of '.$dispsem.' Semester for the Second internal assessmenet examination as under. You are here by requested to go through the report and give us your feeback.');
				$pdf->Ln(4);
		
				$pdf->SetFont('Arial','B',12);
				$mon="June";
				$year="2015";
				$pdf->Cell(0,0,'Internal Assessment Examination: '.$mon.' '.$year.' ',0,0,'C');
				$pdf->Ln(3);
		
				
		
				$x = $pdf->GetX();
				$y = $pdf->GetY();
		
				$pdf->Cell(8,6," ",'TLR',2);
				$pdf->Cell(8,6,"Sl.",'LR',2);
				$pdf->Cell(8,6,"No",'LR',2);
				$pdf->Cell(8,6," ",'BLR',2);
		
				$pdf->setXY($x+8,$y);
				$pdf->Cell(60,24,"Subject Name",'TBR',2,'C');
		
				$pdf->setXY($x+68,$y);
				$pdf->Cell(33,10,"Test Marks",'TBR',2,'C');
		
				$pdf->setXY($x+68,$y+10);
				$pdf->Cell(14,7,"Max",'TR',2,'C');
				$pdf->setXY($x+68,$y+17);
				$pdf->Cell(14,7,"Marks",'BR',2,'C');
		
				$pdf->setXY($x+68+14,$y+10);
				$pdf->Cell(19,7,"Marks",'TR',2,'C');
				$pdf->setXY($x+68+14,$y+17);
				$pdf->Cell(19,7,"Obtained",'BR',2,'C');
		
				$pdf->setXY($x+101,$y);
				$pdf->Cell(33,10,"Quiz Marks",'TBR',2,'C');
		
				$pdf->setXY($x+101,$y+10);
				$pdf->Cell(14,7,"Max",'TR',2,'C');
				$pdf->setXY($x+101,$y+17);
				$pdf->Cell(14,7,"Marks",'BR',2,'C');
		
				$pdf->setXY($x+101+14,$y+10);
				$pdf->Cell(19,7,"Marks",'TR',2,'C');
				$pdf->setXY($x+101+14,$y+17);
				$pdf->Cell(19,7,"Obtained",'BR',2,'C');
		
				$pdf->setXY($x+134,$y);
				$pdf->Cell(41,10,"Attendance",'TBR',2,'C');
		
				$pdf->setXY($x+134,$y+10);
				$pdf->Cell(20,7,"Classes",'TR',2,'C');
				$pdf->setXY($x+134,$y+17);
				$pdf->Cell(20,7,"Held",'BR',2,'C');
		
				$pdf->setXY($x+134+20,$y+10);
				$pdf->Cell(21,7,"Classes",'TR',2,'C');
				$pdf->setXY($x+134+20,$y+17);
				$pdf->Cell(21,7,"Attended",'BR',2,'C');
		
				$ct = 2;
		
				
		
				$pdf->SetFont('Arial','',10);
				$x = 15;
				$y += 24;
		
				
		
		
				for($i=0;$i<$subct;$i++)
				{
					
					$text = $subname[$i]." - ".$sub[$i];
					$text_size = strlen($text);
					$x = 15;
					
					$newsubname=$subname[$i];
					
					
					
					if($whichinternal=="internal1")
						$attendance=mysqli_query($con,"select * from att1 where USN='$usn'")
									or die(mysqli_error());
					else $attendance=mysqli_query($con,"select * from att2 where USN='$usn'")
									or die(mysqli_error());
					$att=mysqli_fetch_array($attendance);
					
					if($i<4)
					{
						$testmarks=mysqli_query($con,"select * from $whichinternal where USN='$usn'")
								or die(mysqli_error());
						$marks=mysqli_fetch_array($testmarks);
						$subjectname=trim($subname[$i]);
						$theoryquiz=$marks[$subjectname];
						$theoryquiz=explode("+",$theoryquiz);
					}
					else 
					{
							$testmarks=mysqli_query($con,"select * from $whichinternal where USN='$usn'")
								or die(mysqli_error());
						$marks=mysqli_fetch_array($testmarks);
						if($i==4) $subjectname=trim("electivec");
						else $subjectname=trim("electived");
						$theoryquiz=$marks[$subjectname];
						$theoryquiz=explode("+",$theoryquiz);
					}
		
					if($text_size < 35)
					{
						$pdf->setXY($x,$y);
						$pdf->Cell(8,6,$i+1,'TLRB',2,'C');
		
						$pdf->setXY($x+8,$y);
						$pdf->MultiCell(60,6,$text,'TLRB',2);
		
						$pdf->setXY($x+68,$y);
						$pdf->Cell(14,6,50,'TLRB',2,'C');
						$pdf->setXY($x+68+14,$y);
						
						
						$pdf->Cell(19,6,$theoryquiz[0],'TLRB',2,'C');
		
						$pdf->setXY($x+101,$y);
						$pdf->Cell(14,6,15,'TLRB',2,'C');
						$pdf->setXY($x+101+14,$y);
						
						$pdf->Cell(19,6,$theoryquiz[1],'TLRB',2,'C');
		
						$pdf->setXY($x+134,$y);
						$pdf->Cell(20,6,$maxclasses[$i],'TLRB',2,'C');
						$pdf->setXY($x+134+20,$y);
						if($i<4)
						$pdf->Cell(21,6,$att[$newsubname],'TLRB',2,'C');
						else if($i==4) $pdf->Cell(21,6,$att["electivec"],'TLRB',2,'C');
						else $pdf->Cell(21,6,$att["electived"],'TLRB',2,'C');
						$x = 15;
						$y += 6;
					}
		
					else
					{
						$pdf->setXY($x,$y);
						$pdf->Cell(8,12,$i+1,'TLRB',2,'C');
		
						$pdf->setXY($x+8,$y);
						$pdf->MultiCell(60,6,$text,'TLRB',2);
		
						$pdf->setXY($x+68,$y);
						$pdf->Cell(14,12,50,'TLRB',2,'C');
						$pdf->setXY($x+68+14,$y);
						$pdf->Cell(19,12,$theoryquiz[0],'TLRB',2,'C');
		
						$pdf->setXY($x+101,$y);
						$pdf->Cell(14,12,15,'TLRB',2,'C');
						$pdf->setXY($x+101+14,$y);
						$pdf->Cell(19,12,$theoryquiz[1],'TLRB',2,'C');
		
						$pdf->setXY($x+134,$y);
						$pdf->Cell(20,12,$maxclasses[$i],'TLRB',2,'C');
						$pdf->setXY($x+134+20,$y);
						if($i<4)
						$pdf->Cell(21,12,$att[$newsubname],'TLRB',2,'C');
						else if($i==4) $pdf->Cell(21,12,$att["electivec"],'TLRB',2,'C');
						else $pdf->Cell(21,12,$att["electived"],'TLRB',2,'C');
						$x = 15;
						$y += 12;
					}
		
				}
		
				$y += 5;
		
				$pdf->setXY($x,$y);
				$pdf->SetFont('Arial','B',10);
				$pdf->Cell(0, 0, "Note:", 0, 0, 'L');
				$pdf->Ln(4);
				$pdf->SetFont('Arial','',10);
				$test1 = array();
				$test1['bullet'] = chr(149);
				$test1['margin'] = ' ';
				$test1['indent'] = 3;
				$test1['spacer'] = 0;
				$test1['text'] = array();
				$note1 = 'If your ward has secured less than 50% marks and less than 85% attendance, we request you to meet the Head of the Department/Counselor.' ;
				$note2 = 'The student has to put-up 85% of attendance and CIE marks greater than 40% in all courses, failing which he/she will not be allowed to take up the Semester End Examination.';
				$note3 = 'You are requested to monitor your wards performance regularly and advise suitably.';
				$test1['text'][0] = $note1;
				$test1['text'][1] = $note2;
				$test1['text'][2] = $note3;
				$pdf->MultiCellBltArray(175, 4, $test1);
		
				$pdf->Ln(6);
		
				$pdf->SetFont('Arial','',11);
				$pdf->Cell(0, 0, "Counselor", 0, 0, 'L');
				$pdf->Cell(0, 0, "Head of the Department", 0, 0, 'R');
				$pdf->Ln(5);
				$pdf->SetFont('Arial','',9);
				for($i=0;$i<38;$i++) $pdf->Write(0,"- ");
				$pdf->Write(0,"Cut here and retrun");
				for($i=0;$i<38;$i++) $pdf->Write(0,"- ");
				$pdf->Ln(5);
				$pdf->SetFont('Arial','BU',13);
				$pdf->Cell(0, 0, "ACKNOWLEDGEMENT", 0, 0, 'C');
				$pdf->Ln(7);
				$pdf->SetFont('Arial','',10);
				$pdf->Cell(0,0,'Remarks of the Parent / Guardian: ');
				$pdf->Ln(7);
				$pdf->Line(15,$pdf->GetY(),190,$pdf->GetY());
				$pdf->Ln(7);
				$pdf->Line(15,$pdf->GetY(),190,$pdf->GetY());
				$pdf->Ln(7);
				$pdf->Cell(0,0,'Signature of the Parent / Guardian',0,0,'L');
		
	

	$pdf->Output();
	$filename="reportnew.pdf";
	header('Content-disposition: attachment; filename='.$filename.' ');
	header("Content-type: application/pdf");
	
	readfile($filename);
		unlink($filename);
	
	mysqli_close($con);
?> 