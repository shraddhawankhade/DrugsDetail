<!--
	filename: ViewQuestionnaireDetails.php
	author: Snehal,Shraddha
	date-created: 29 feb 2012
	date-updated-last:5 March 2012 
-->

<!DOCTYPE html>
<head>
<title>Questionnaire</title>
</head>

<br/><br/>
<center><h3> View Questionnaire Details</h3></center>
<br/><br/>

<table width="60%" align="center" border="1px">
<tr>
<th>User Name</th>
<th>Date</th>
<th>Answers</th>
</tr>

<?php
//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM Questionnaire";		//Initialize select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
while($A_Row=$SelectQueryResult->fetch_array())	//retrieve data and stores into variable.
{
	echo '<tr><td align="center">'.$A_Row['UserName'].'</td>';
	echo '<td align="center">'.$A_Row['Date'].'</td>';
	echo '<td align="center">';
	echo '<a href="/DrugsDetail/ViewAnswers.php?UserName='.$A_Row['UserName'].' & Date='.$A_Row['Date'].'">click here to see</a></td></tr>';
}

$O_Mysqli->close();	//database connection close.
?>

</table>
<br/><br/> 
<center>
<input type="button" value="Back" onClick="location.href='/DrugsDetail/WelcomeAdmin.php' ">		<!Divert to WelcomeAdmin.php page!>
</center>
<br/>

</html>	