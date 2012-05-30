<!DOCTYPE html>
<head>
<title>Registration</title>
</head>

<br/><br/>
<div align="center">	<!Set the text area center!>
<div style="width:300px; border: solid 1px #333333;" align="center">	<!Set width and border of text area and align text left!>
<br/><br/>
<h3>

<?php
//Get data from interface.
$S_UserName=$_POST['UserName'];	//Get  a UserName from Interface.
$S_FirstName=$_POST['FirstName'];	//Get  a FirstName from Interface.
$S_LastName=$_POST['LastName'];		//Get  a LastName from Interface.	
$S_Gender=$_POST['Gender'];	//Get  a Gender from Interface.
$S_Password=$_POST['Password'];	//Get  a Password from Interface.	
$S_Status=$_POST['Status'];	//Get  a Status from Interface.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM UserRegistration WHERE UserName='{$S_UserName}'";		//Initialize select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
while($A_Row=$SelectQueryResult->fetch_array())	//retrieve data and stores into variable.
{
	$S_RegisteredUserName=$A_Row['UserName'];	//Get  Useranme into variable.
}
if($S_RegisteredUserName!=$S_UserName)	//check when user name from database is not equal to username from interface.
{
	$InsertQuery="INSERT INTO UserRegistration (UserName,FirstName, LastName, Gender,Password,Status) VALUES('{$S_UserName}','{$S_FirstName}','{$S_LastName}','{$S_Gender}','{$S_Password}','{$S_Status}')";		//Initialize Insert query.
	$InsertQueryResult=$O_Mysqli->query($InsertQuery);	//Pass parameter to the function and get the insert query result.
	if(isset($InsertQueryResult))		//Check when variable is set.
	{
		echo "Registration Succesful...";
	}	
	else	//Check when variable is not set.
	{
		echo"Registration Failed...";
	}
}
else	//check when user name from database is equal to username from interface.
{
	echo "User Name Already exist...Try Again!";
}

$O_Mysqli->close();	//Database connection close.
?>
<br/><br/> 
<input type="button" value="Log In" onClick="location.href='/DrugsDetail/UserLogin.html' ">		<!Divert to UserLogin.html page!>
</h3>
<br/>
</div>
</div>
</html>