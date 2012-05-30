<!--
	filename: ViewDrugsRequestForm.php
	author: Snehal,Shraddha
	date-created: 23 feb 2012
	date-updated-last:5 March 2012 
-->

<html>
<head>
<title>View Drugs Request</title>
</head>

<br/><br/>
<h3>
<center>Drugs Request</center>
<br/><br/>
<body>
<table width="90%" align="center" border="1px">
<tr>
<th>Date Today</th>
<th>Doctors Name</th>
<th>Address</th>
<th>Phone</th>
<th>Fax</th>
<th>Email</th>
<th>Rx Date</th>
<th>Rx Number</th>
<th>Drug Name</th>
<th>Drug Strength</th>
<th>Dosage</th>
<th>Quantity</th>
<th>Day Supply</th>
<th>Amount Paid</th>
</tr>

<?php
$D_From=$_POST['From'];	//Get  a date into variable and show records from this date.
$D_To=$_POST['To'];	//Get  a date into variable and show records upto this date.
$S_RequestedDoctorsName=$_POST['DoctorsName'];	//Get doctors name into variable.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM DrugsRequest WHERE DoctorsName='{$S_RequestedDoctorsName}' AND DateToday>='{$D_From}' AND DateToday<='{$D_To}'";	//Initialize Select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.	
while($A_Row=$SelectQueryResult->fetch_array())	//retrieve data and stores into variable.
{
	echo "<tr align=center>";
	echo "<td>".$A_Row['DateToday'] . "</td> "; 
	echo "<td>".$A_Row['DoctorsName'] . "</td>";
	echo "<td>".$A_Row['Address'] . "</td> "; 
	echo "<td>".$A_Row['Phone'] . "</td> "; 
	echo "<td>".$A_Row['Fax'] . "</td> "; 
	echo "<td>".$A_Row['Email'] . "</td> "; 
	echo "<td>".$A_Row['RxDate'] . "</td> "; 
	echo "<td>".$A_Row['RxNumber'] . "</td> "; 
	echo "<td>".$A_Row['DrugName'] . "</td> "; 
	echo "<td>".$A_Row['DrugStrength'] . "</td> "; 
	echo "<td>".$A_Row['Dosage'] . "</td> "; 
	echo "<td>".$A_Row['Quantity'] . "</td> "; 
	echo "<td>".$A_Row['DaySupply'] . "</td> "; 
	echo "<td>".$A_Row['AmountPaid'] . "</td></tr>"; 
}

$O_Mysqli->close();	//Database connection close.
?>

</table>
<br/><br/>
<center>
<a href="/DrugsDetail/DownloadViewDrugsRequestFormEXCEL.php?DoctorsName=<?php echo $S_RequestedDoctorsName; ?> & From=<?php echo $D_From; ?> & To=<?php echo $D_To; ?>">Export to excel Spreadsheet</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!Divert to DownloadViewDrugsRequestFormEXCEL.php page!>
<a href="/DrugsDetail/DownloadViewDrugsRequestFormPDF.php?DoctorsName=<?php echo $S_RequestedDoctorsName; ?> & From=<?php echo $D_From; ?> & To=<?php echo $D_To; ?>">Export to PDF</a><!Divert to DownloadViewDrugsRequestFormPDF.php page!>
<br/><br/>
<Input type="button" Value="Back" onClick="location.href='/DrugsDetail/WelcomeAdmin.php'">	<!Divert to WelcomeAdmin.php page!>
</center>
</body>
</h3>
</html>