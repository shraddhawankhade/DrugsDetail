<!--
	filename: UserLoginDB.php
	author: Shraddha
	date-created: 23 feb 2012
	date-updated-last:5 March 2012 
-->

<!DOCTYPE html>
<head>
<title>Failure User Login</title>
</head>
<br/><br/>
<div align="center">	<!Set the text area center!>
<div style="width:300px; border: solid 1px #333333;" align="center">	<!Set width and border of text area and align text left!>
<br/><br/>
<h3>

<?php 
session_start();	//start session.

//Get data from interface.
$S_UserName=$_POST['UserName']; //Get the username into variable from user interface
$S_Password=$_POST['Password'];	//Get the Password into variable from user interface.

$_SESSION['UserName'] = $S_UserName;	//set session variable name to the username.

//Connet to database and fetch data.
include("Config.php");	//Include Configuration File.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);		//creates object.

//Check conditions.
if($S_UserName!="" && $S_Password!="")	//Check when username and Password is not empty.
{
	$SelectQuery="SELECT * FROM UserRegistration WHERE UserName='{$S_UserName}' AND Password='{$S_Password}' ";		//Initialize select query.
	$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
	while($A_Row=$SelectQueryResult->fetch_array())	//retrieve data and stores into variable.
	{
		$S_Status=$A_Row['Status']; 	//Take Status into variable.
	}
	if($S_Status=="Admin")	//Check when status is equal to admin.
	{ 
		header("location:WelcomeAdmin.php");	//Divert to WelcomeAdmin.php page.
	}
	else	//Check when status is user. 
	{	
		header("location:WelcomeUser.php");	//Divert to WelcomeUser.php page.
	}
}
else	//Check when username and Password is empty.
{
	header("location:UserLogin.html");	//Divert to UserLogin.html page.
}

$O_Mysqli->close();	//Database connection close.
?>

<br/><br/>
<Input type="button" Value="Back" onClick="location.href='/DrugsDetail/UserLogin.html'">	<!Divert to UserLogin.html!>
</h3>
<br/>
</div>
</div>
</html>