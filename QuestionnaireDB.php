<!--
	filename: QuestionnaireDB.php
	author: Snehal,Shraddha
	date-created: 29 feb 2012
	date-updated-last: 5 March 2012
-->

<!DOCTYPE html>
<head>
<title>Questionnaire</title>
</head>

<br/><br/>
<div align="center">	<!Set the text area center!>
<div style="width:300px; border: solid 1px #333333;" align="center">	<!Set width and border of text area and align text left!>
<br/><br/>
<h3>

<?php
session_start();	//start session.
$S_UserName=$_SESSION['UserName'];	//get session variable name.

//get data from interface.
$D_Date=$_POST['Date'];	//get System date from hidden object.
$S_BodyFrame=$_POST['BodyFrame'];	//get variable name BodyFrame into variable.	
$S_BodyWeight=$_POST['BodyWeight'];		//get variable name BodyWeight into variable.
$S_Eyes=$_POST['Eyes'];	//get variable name Eyes into variable.
$S_Nose=$_POST['Nose'];	//get  variable name Nose into variable.
$S_Lips=$_POST['Lips'];	//get variable name Lips  into variable.
$S_Cheeks=$_POST['Cheeks'];	//get variable name Cheeks into  variable.
$S_Teeth=$_POST['Teeth'];	//get variable name Teeth into  variable.
$S_Skin=$_POST['Skin'];	//get variable name Skin into  variable.
$S_Hair=$_POST['Hair'];	//get variable name Hair into variable.
$S_Nails=$_POST['Nails'];	//get variable name Nails into variable.
$S_Neck=$_POST['Neck'];	//get variable name Neck into variable.
$S_Chest=$_POST['Chest'];	//get variable name Chest into variable.
$S_Belly=$_POST['Belly'];	//get variable name Belly into variable.
$S_Hips=$_POST['Hips'];	//get variable name Hips into variable.
$S_Joints=$_POST['Joints'];	//get variable name Joints into  variable.
$S_Appetite=$_POST['Appetite'];	//get variable name Appetite into  variable.
$S_Thirst=$_POST['Thirst'];	//get variable name Thirst into variable.
$S_Digestion=$_POST['Digestion'];	//get variable name Digestion  into  variable.
$S_Elimination=$_POST['Elimination'];	//get variable name Elimination into variable.
$S_PhysicalActivity=$_POST['PhysicalActivity'];	//get variable name PhysicalActivity into  variable.
$S_MentalActivity=$_POST['MentalActivity'];	//get variable name MentalActivity into variable.
$S_Emotions=$_POST['Emotions'];	//get variable name Emotions into variable.
$S_Faith=$_POST['Faith'];	//get variable name Faith into variable.
$S_Intellect=$_POST['Intellect'];	//get variable name Intellect into variable.	
$S_Memory=$_POST['Memory'];	//get variable name Memory into variable.
$S_Dreams=$_POST['Dreams'];	//get variable name Dreams into variable.
$S_Sleep=$_POST['Sleep'];	//get variable name Sleep into variable.
$S_Speech=$_POST['Speech'];	//get variable name Speech into variable.
$S_Finances=$_POST['Finances'];	//get variable name Finances into variable.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM Questionnaire WHERE UserName='{$S_UserName}' AND Date='{$D_Date}'";
$SelectQueryResult=$O_Mysqli->query($SelectQuery);
while($A_Row=$SelectQueryResult->fetch_array())
{
	$S_RegisteredUserName=$A_Row['UserName'];
	$S_RegisteredDate=$A_Row['Date'];
}

if($S_RegisteredUserName!=$S_UserName && $S_RegisteredDate!=$D_Date)
{
	$InsertQuery="INSERT INTO Questionnaire 
	(Date,UserName,BodyFrame,BodyWeight,Eyes,Nose,Lips,Cheeks,Teeth,Skin,Hair,Nails,Neck,Chest,Belly,Hips,Joints,Appetite,Thirst,Digestion,Elimination,PhysicalActivity,MentalActivity,Emotions,Faith,Intellect,Memory,Dreams,Sleep,Speech,Finances) 
	VALUES('{$D_Date}','{$S_UserName}','{$S_BodyFrame}','{$S_BodyWeight}','{$S_Eyes}','{$S_Nose}','{$S_Lips}','{$S_Cheeks}','{$S_Teeth}','{$S_Skin}','{$S_Hair}','{$S_Nails}','{$S_Neck}','{$S_Chest}','{$S_Belly}','{$S_Hips}','{$S_Joints}','{$S_Appetite}','{$S_Thirst}','{$S_Digestion}','{$S_Elimination}','{$S_PhysicalActivity}','{$S_MentalActivity}','{$S_Emotions}','{$S_Faith}','{$S_Intellect}','{$S_Memory}','{$S_Dreams}','{$S_Sleep}','{$S_Speech}','{$S_Finances}')";		//Initialize Insert query.
	$InsertQueryResult=$O_Mysqli->query($InsertQuery);	//Pass parameter to the function and get the insert query result.
   
		if(isset($InsertQueryResult))		//Check when variable is set.
		{
			echo "Data submitted Succesfully...";
?>
			<br/><br/><a href="/DrugsDetail/ViewQuestionnaireAnswers.php?UserName=<?php echo $S_UserName; ?>">View Questionnaire Answers</a>&nbsp;
<?php
		}	
		else	//Check when variable is not set.
		{
			echo"Data submission Failed...";
		}
}
else
{
	echo "$S_UserName can't submit Questionnaire on same day...";
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