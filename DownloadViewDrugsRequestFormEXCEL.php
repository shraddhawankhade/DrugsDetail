<?php
//Get the data rom URL.
$S_DoctorsName=$_GET['DoctorsName'];	//Get DoctorsName into variable.
$D_From=$_GET['From'];	//Get a date into variable and show records from this date.
$D_To=$_GET['To'];	//Get a date into variable and show records upto this date.

chdir('phpxls');	//check directorise in phpxls folder.
include_once 'Writer.php';	//Include Spreadsheet Excel Writer file.

$workbook = new Spreadsheet_Excel_Writer();	//Creates object.
$worksheet =& $workbook->addWorksheet();	//Call addWorksheet method.
$format_bold =& $workbook->addFormat();		//Call addFormat method.
$format_bold->setBold();	//Call setBold method.

include_once("Config.php");	//Include Configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM DrugsRequest WHERE DoctorsName='{$S_DoctorsName}' AND DateToday>='{$D_From}' AND DateToday<='{$D_To}' ";		//Initialize select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get select query result.

$worksheet->write(0, 0, "DateToday", $format_bold);		//It writes column name DateToday to Excel file having bold format.
$worksheet->write(0, 1, "DoctorsName", $format_bold);	//It writes column name DoctorsName to Excel file having bold format.
$worksheet->write(0, 2, "Address", $format_bold);	//It writes column name Address to Excel file having bold format.
$worksheet->write(0, 3, "Phone", $format_bold);		//It writes column name Phone to Excel file having bold format.
$worksheet->write(0, 4, "Fax", $format_bold);		//It writes column name Fax to Excel file having bold format.
$worksheet->write(0, 5, "Email", $format_bold);		//It writes column name Email to Excel file having bold format.
$worksheet->write(0, 6, "RxDate", $format_bold);	//It writes column name RxDate to Excel file having bold format.
$worksheet->write(0, 7, "RxNumber", $format_bold);	//It writes column name RxNumber to Excel file having bold format.
$worksheet->write(0, 8, "DrugName", $format_bold);	//It writes column name DrugName to Excel file having bold format.
$worksheet->write(0, 9, "DrugStrength", $format_bold);	//It writes column name DrugStrength to Excel file having bold format.
$worksheet->write(0, 10, "Dosage", $format_bold);	//It writes column name Dosage to Excel file having bold format.
$worksheet->write(0, 11, "Quantity", $format_bold);		//It writes column name Quantity to Excel file having bold format.
$worksheet->write(0, 12, "DaySupply", $format_bold);	//It writes column name DaySupply to Excel file having bold format.
$worksheet->write(0, 13, "AmountPaid", $format_bold);	//It writes column name AmountPaid to Excel file having bold format.

$ii=1;	//Initialize variable.
while($A_Row=$SelectQueryResult->fetch_array())	
{
	$worksheet->write($ii,0,  "$A_Row[DateToday]");	//Write fetched DateToday to excel file.
	$worksheet->write($ii,1,  "$A_Row[DoctorsName]");	//Write fetched DoctorsName to excel file.
	$worksheet->write($ii,2,  "$A_Row[Address]");	//Write fetched Address to excel file.
	$worksheet->write($ii,3,  "$A_Row[Phone]");	//Write fetched Phone to excel file.
	$worksheet->write($ii,4,  "$A_Row[Fax]");	//Write fetched Fax to excel file.
	$worksheet->write($ii,5,  "$A_Row[Email]");	//Write fetched Email to excel file.
	$worksheet->write($ii,6,  "$A_Row[RxDate]");	//Write fetched RxDate to excel file.
	$worksheet->write($ii,7,  "$A_Row[RxNumber]");	//Write fetched RxNumber to excel file.
	$worksheet->write($ii,8,  "$A_Row[DrugName]");	//Write fetched DrugName to excel file.
	$worksheet->write($ii,9,  "$A_Row[DrugStrength]");	//Write fetched DrugStrength to excel file.
	$worksheet->write($ii,10,  "$A_Row[Dosage]");	//Write fetched Dosage to excel file.
	$worksheet->write($ii,11,  "$A_Row[Quantity]");	//Write fetched Quantity to excel file.
	$worksheet->write($ii,12,  "$A_Row[DaySupply]");	//Write fetched DaySupply to excel file.
	$worksheet->write($ii,13,  "$A_Row[AmountPaid]");	//Write fetched AmountPaid to excel file.
	$ii++;
}

$workbook->send('DrugRequestForm.xls');	//Sends to client browser.
$workbook->close();	//Close the workbook

$O_Mysqli->close();	//Close the database connection.
?>