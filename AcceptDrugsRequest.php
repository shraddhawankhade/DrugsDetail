//
<html>
<head>
<title>View Drugs Request</title>
</head>
<h3>

<body>
<br/><br/>
<center>Drugs Request</center>
<br/><br/>
<table width="45%" align="center" border="1px">
<tr>
<th>Doctors Name</th>
<th>Date</th>
<th>Drug Name</th>
</tr>

<?php
//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM DrugsRequest";	//Initialize Select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
while($A_Row=$SelectQueryResult->fetch_object())	//retrieve data and stores into variable.
{
	$A_DrugsRequestInfo[]=$A_Row;		//Stores retrieved data into array.
}

//Display doctors name, date and drug name to interface.
for($ii=0;$ii<count($A_DrugsRequestInfo);$ii++)	//Fetch data stored into array.
{
	$S_DoctorsName[$ii]=$A_DrugsRequestInfo[$ii]->DoctorsName;	//Get the Doctors Name into variable.
	$S_DateToday[$ii]=$A_DrugsRequestInfo[$ii]->DateToday;	//Get the Date today into variable.
	$S_DrugName[$ii]=$A_DrugsRequestInfo[$ii]->DrugName;	//Get the Drug Name into variable.
?>
	<tr align="center"><td><a href="/DrugsDetail/ViewDrugsRequestFormDate.php?DoctorsName=<?php echo $S_DoctorsName[$ii];?>"><?php echo $S_DoctorsName[$ii] ?></a></td>	<!-- Data send through URL -->
	<td><?php echo $S_DateToday[$ii] ?></td>
	<td><?php echo $S_DrugName[$ii] ?></td></tr>
<?php
}

$O_Mysqli->close();	//Database connection close.
?>

</table>
<br/><br/>
<center><Input type="button" Value="Back" onClick="location.href='/DrugsDetail/WelcomeAdmin.php'"></center>	<!Divert to WelcomeAdmin.php page!>
</body>
</h3>
</html>