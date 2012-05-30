<!--
	filename: DownloadViewDrugsRequestFormPDF.php
	author: Shraddha
	date-created: 28 feb 2012
	date-updated-last: 5 March 2012
-->
<?php
include('fpdf17/fpdf1.php');	//Include FPDF file.

//creates class and its function.
class PDF extends FPDF	//creates class PDF and extend the predefined class FPDF in the fpdf1.php
{
	function Header()	//Call Page header function.
	{
		$this->Image('header.png',5,5,200);	//Display image having image name,left margin,top margin and image width.
	}
	function Footer()	//Call Page footer function.
	{
		$this->Image('footer.png',5,270,200);	//Display image having image name,left margin,top margin and image width.
	}
	function Table($Header,$Data)	//creates function Table and pass the parameter to function.
	{
		$this->Cell(90);	//call the cell function and pass the parameter width.
		$this->Cell(50,15,'Drugs Request');	//call the cell function and pass the parameter width,height,text,border.
		$this->Ln();	//call the Line function.
	
		$Width=array(15,17,15,15,15,22,15,13,15,15,10,10,13,14);	//Stores Column widths in array variable.
		for($ii=0;$ii<count($Header);$ii++)	//Display Header of the table.
			$this->Cell($Width[$ii],7,$Header[$ii],1,0,'C');	//call the cell function and pass the parameter width,height,text,border,next line,alignment.
		$this->Ln();	//call the Line function.
	
		//Display data of table.
		foreach ($Data as $EachResult)	//Display each row of table.
		{	
			$this->Cell(15,6,$EachResult["DateToday"],1,0,'C');	//call the cell function and pass the parameter width,height,DateToady,border.
			$this->Cell(17,6,$EachResult["DoctorsName"],1,0,'C');	//call the cell function and pass the parameter width,height,DoctorsName,border.
			$this->Cell(15,6,$EachResult["Address"],1,0,'C');	//call the cell function and pass the parameter width,height,Address,border.
			$this->Cell(15,6,$EachResult["Phone"],1,0,'C');	//call the cell function and pass the parameter width,height,Phone,border.
			$this->Cell(15,6,$EachResult["Fax"],1,0,'C');	//call the cell function and pass the parameter width,height,Fax,border.
			$this->Cell(22,6,$EachResult["Email"],1,0,'C');	//call the cell function and pass the parameter width,height,Email,border.
			$this->Cell(15,6,$EachResult["RxDate"],1,0,'C');	//call the cell function and pass the parameter width,height,RxDate,border.
			$this->Cell(13,6,$EachResult["RxNumber"],1,0,'C');	//call the cell function and pass the parameter width,height,RxNumber,border.
			$this->Cell(15,6,$EachResult["DrugName"],1,0,'C');	//call the cell function and pass the parameter width,height,DrugName,border.
			$this->Cell(15,6,$EachResult["DrugStrength"],1,0,'C');	//call the cell function and pass the parameter width,height,DrugStrength,border.
			$this->Cell(10,6,$EachResult["Dosage"],1,0,'C');	//call the cell function and pass the parameter width,height,Dosage,border.
			$this->Cell(10,6,$EachResult["Quantity"],1,0,'C');	//call the cell function and pass the parameter width,height,Quantity,border.
			$this->Cell(13,6,$EachResult["DaySupply"],1,0,'C');	//call the cell function and pass the parameter width,height,DaySupply,border.
			$this->Cell(14,6,$EachResult["AmountPaid"],1,0,'C');	//call the cell function and pass the parameter width,height,AmountPaid,border.
			$this->Ln();	//Call the line function.
		}
	}
}

$Pdf=new PDF();	//Intialize the object of PDF class.
$Header=array('DateToday','DoctorsName','Address','Phone','Fax','Email','RxDate','RxNumber','DrugName','DrugStrength','Dosage','Quantity','DaySupply','AmountPaid');	//Stores the column name into array variable.

//Get the data from URL.
$D_From=$_GET['From'];	//Take a date into variable and show records from this date.
$D_To=$_GET['To'];	//Take a date into variable and show records upto this date.
$S_DoctorsName=$_GET['DoctorsName'];	//get doctors name into variable.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM DrugsRequest WHERE DoctorsName='{$S_DoctorsName}' AND DateToday>='{$D_From}' AND DateToday<='{$D_To}'";	//Initialize Select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
$A_ResultData = array();	//declare variable as array.
for ($jj=0;$jj<$SelectQueryResult->num_rows;$jj++)	//fetch data from database.
{
	$A_Result = $SelectQueryResult->fetch_array();	//fetched data stores into variable.
	array_push($A_ResultData,$A_Result);	//Push one or more elements onto the end of array.
}

$Pdf->SetFont('Arial','',7);	//call the SetFont function and pass the parameter font family ,size.
$Pdf->SetMargins('3','35','1' );	//call the SetMargins function and pass the parameter left,top,right margin.
$Pdf->AddPage();	//call AddPage function.
$Pdf->Table($Header,$A_ResultData);	//call the Table function and pass the parameter column name and data retrieved from database.
$Pdf->Output("DrugsRequest.pdf");	//Call the Output function and pass the parameter filename.

$O_Mysqli->close();	//Close database connection.
?>