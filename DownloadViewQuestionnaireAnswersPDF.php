<!--
	filename: DownloadViewDrugsRequestFormPDF.php
	author: Shraddha, Snehal
	date-created: 29 feb 2012
	date-updated-last: 5 March 2012
-->
<html>
<table>
<?php
include('fpdf17/fpdf1.php');	//Include FPDF file.

//creates class and its function.
class PDF extends FPDF	//creates class PDF and extend the predefined class FPDF in the fpdf1.php
{
	function Header()	//Call Page header function.
	{
		$this->Image('header.png',5,2,200);	//Display image having image name,left margin,top margin and image width.
	}
	function Footer()	//Call Page footer function.
	{
		$this->Image('footer.png',5,270,200);	//Display image having image name,left margin,top margin and image width.
	}
	function Table($Data)	//creates function Table and pass the parameter to function.
	{
		//Display data of table.
		foreach ($Data as $EachResult)	//Display each row of table.
		{	
			$this->Cell(60);	//call the cell function and pass the parameter width.
			$this->Cell(50,15,'Questionnaire and Answers');	//call the cell function and pass the parameter width,height,text.
			$this->Ln();	//call the Line function.
		
			$this->Cell(12,3,"1. What is your Body Frame?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["BodyFrame"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"2. What is your Body Weight?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["BodyWeight"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"3. How your Eyes looks?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Eyes"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"4. How you describe your Nose?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Nose"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"5. How is your Lips?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Lips"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"6. How is your Cheeks?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Cheeks"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"7. How you describe your Teeth? ",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Teeth"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"8. How your Skin looks? ",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Skin"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"9. How you describe your Hair?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Hair"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			
			$this->Cell(12,3,"10. How is the Structure of your Nails?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Nails"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"11. How you describe your Neck?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.	
			$this->Cell(15,4,$EachResult["Neck"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"12. Choose option for Chest.",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Chest"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"13. What is the shape of your belly?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Belly"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"14. How you describe your Hips?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Hips"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"15. How you describe your Joints?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Joints"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"16. What is the shape of your Appetite?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Appetite"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"17. What is the time duration of Thirst?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Thirst"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"18. How is your Digestion system?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Digestion"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"19. Choose option for Elimination?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Elimination"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"20. How you rate your Physical Activity?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["PhysicalActivity"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"21. How you rate your Mental Activity? ",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["MentalActivity"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"22. How Emotional you are?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Emotions"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"23. How Faithful you are?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Faith"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"24. What are your Intellectual capabilities?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Intellect"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"25. What is the accessbility of your Memory?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Memory"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"26. What kind of Dreams do you see?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Dreams"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"27. How you describe your Sleep?",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Sleep"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"28. How could you Speak? ",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Speech"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		
			$this->Cell(12,3,"29. Where you spend Money? ",0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
			$this->Cell(15,4,$EachResult["Finances"],0,1);	//call the cell function and pass the parameter width,height,text,border,next line.
		}
	}
}

$Pdf=new PDF();//Intialize the object of PDF class.

//Get the data from URL.
$S_UserName=$_GET['UserName'];	//Get UserName into variable.
$D_Date=$_GET['Date'];	//Get date into variable.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM Questionnaire WHERE UserName='{$S_UserName}' AND Date='{$D_Date}'";	//Initialize Select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
$A_ResultData = array();	//declare variable as array.
for ($ii=0;$ii<$SelectQueryResult->num_rows;$ii++)	//fetch data from database.
{
	$A_Result = $SelectQueryResult->fetch_array();	//fetched data stores into variable.
	array_push($A_ResultData,$A_Result);	//Push one or more elements onto the end of array.
}

$Pdf->SetFont('Arial','',7);	//call the SetFont function and pass the parameter font family ,size.
$Pdf->SetMargins('20','35','1' );	//call the SetMargins function and pass the parameter left,top,right margin.
$Pdf->AddPage();	//call AddPage function.
$Pdf->Table($A_ResultData);	//call the Table function and pass the parameter column name and data retrieved from database.
$Pdf->Output("QuestionnaireAnswers.pdf");	//Call the Output function and pass the parameter filename.

$O_Mysqli->close();	//close database connection.
?>
</html>