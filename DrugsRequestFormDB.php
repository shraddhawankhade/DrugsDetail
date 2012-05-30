<!--
	filename: DrugsRequestFormDB.php
	author: Shraddha
	date-created: 23 feb 2012
	date-updated-last:5 March 2012 
-->

<!DOCTYPE html>
<head>
<title>Requesting  for drugs</title>
</head>

<br/><br/>
<div align="center">	<!Set the text area center!>
<div style="width:300px; border: solid 1px #333333;" align="center">	<!Set width and border of text area and align text left!>
<br/><br/>
<h3>

<?php
//get data from interface.
$D_DateToday=$_POST['DateToday'];	//Get  a Date Today from Interface.
$S_DoctorsName=$_POST['DoctorsName'];		//Get  a Doctors Name from Interface.
$S_Address=$_POST['Address'];		//Get  a Address from Interface.
$I_Phone=$_POST['Phone'];		//Get  a Phone from Interface.	
$I_Fax=$_POST['Fax'];		//Get  a Fax from Interface.
$S_Email=$_POST['Email'];	//Get  a Email from Interface.
$D_RxDate=$_POST['RxDate'];	//Get  a RxDate from Interface.
$I_RxNumber=$_POST['RxNumber'];	//Get  a RxNumber from Interface.
$S_DrugName=$_POST['DrugName'];	//Get  a Drug Name from Interface.
$S_DrugStrength=$_POST['DrugStrength'];	//Get  a Drug Strength from Interface.
$I_Dosage=$_POST['Dosage'];	//Get  a Dosage from Interface.
$I_Quantity=$_POST['Quantity'];	//Get  a Quantity from Interface.
$S_DaySupply=$_POST['DaySupply'];	//Get  a Day Supply from Interface.
$I_AmountPaid=$_POST['AmountPaid'];	//Get  a Amount Paid from Interface.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$InsertQuery="INSERT INTO DrugsRequest (DateToday,DoctorsName,Address,Phone,Fax,Email,RxDate,RxNumber,DrugName,DrugStrength,Dosage,Quantity,DaySupply,AmountPaid) 
VALUES('{$D_DateToday}','{$S_DoctorsName}','{$S_Address}','{$I_Phone}','{$I_Fax}','{$S_Email}','{$D_RxDate}','{$I_RxNumber}','{$S_DrugName}','{$S_DrugStrength}','{$I_Dosage}','{$I_Quantity}','{$S_DaySupply}','{$I_AmountPaid}')";		//Initialize Insert query.
$InsertQueryResult=$O_Mysqli->query($InsertQuery);	//Pass parameter to the function and get the insert query result.
if(isset($InsertQueryResult))		//Check when variable is set.
{
	echo "Request form submit Successfully...";
}
else	//Check when variable is not set.
{
	echo"Request Failed...";
}

$O_Mysqli->close();	//Database connection close.
?>
<br/><br/> 
<input type="button" value="Back" onClick="location.href='/DrugsDetail/WelcomeUser.php' ">		<!Divert to WelcomeUser.php page!>
</h3>
<br/>
</div>
</div>
</html>