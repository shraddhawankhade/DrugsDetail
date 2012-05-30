<!--
	filename: ViewQuestionnaireAnswers.php
	author: Snehal,Shraddha
	date-created: 29 feb 2012
	date-updated-last: 5 March 2012
-->
<!DOCTYPE html>
<head>
<title>Questionnaire And Answers</title>
</head>
<br/>
<center><h3>Questionnaire And Answers</h3>

<h4>
<table width="50%" align="center">
<?php
session_start();	//start session.
$S_UserName=$_SESSION['UserName'];	//get session variable name.

$D_Date=date("Y/m/d");	//Get the system date into variable.

//Connet to database and fetch data.
include_once("Config.php");	//Include configuration file.
$O_Mysqli = new mysqli($S_MysqliHostname, $S_MysqliUser, $S_MysqliPassword, $S_MysqliDatabase);	//creates object.
$SelectQuery="SELECT * FROM Questionnaire WHERE UserName='{$S_UserName}'";		//Initialize select query.
$SelectQueryResult=$O_Mysqli->query($SelectQuery);	//Pass parameter to the function and get the select query result.
while($A_Row=$SelectQueryResult->fetch_array())	//retrieve data and stores into variable.
{
	$S_UserName=$A_Row['UserName'];	//Get Variable Name  Useranme into variable.
	$S_BodyFrame=$A_Row['BodyFrame'];	//Get Variable Name  BodyFrame into variable.
	$S_BodyWeight=$A_Row['BodyWeight'];		//Get Variable Name  BodyWeight into variable.
	$S_Eyes=$A_Row['Eyes'];		//Get Variable Name  Eyes into variable.
	$S_Nose=$A_Row['Nose'];		//Get Variable Name  Nose into variable.
	$S_Lips=$A_Row['Lips'];		//Get Variable Name  Lips into variable.
	$S_Cheeks=$A_Row['Cheeks'];		//Get Variable Name  Cheeks into variable.
	$S_Teeth=$A_Row['Teeth'];	//Get Variable Name  Teeth into variable.	
	$S_Skin=$A_Row['Skin'];		//Get Variable Name  Skin into variable.
	$S_Hair=$A_Row['Hair'];		//Get Variable Name  Hair into variable.
	$S_Nails=$A_Row['Nails'];	//Get Variable Name  Nails into variable.	
	$S_Neck=$A_Row['Neck'];		//Get Variable Name  Neck into variable.
	$S_Chest=$A_Row['Chest'];	//Get Variable Name  Chest into variable.	
	$S_Belly=$A_Row['Belly'];	//Get Variable Name  Belly into variable.	
	$S_Hips=$A_Row['Hips'];		//Get Variable Name  Hips into variable.
	$S_Joints=$A_Row['Joints'];		//Get Variable Name  Joints into variable.
	$S_Appetite=$A_Row['Appetite'];		//Get Variable Name  Appetite' into variable.
	$S_Thirst=$A_Row['Thirst'];		//Get Variable Name  Thirst into variable.
	$S_Digestion=$A_Row['Digestion'];		//Get Variable Name  Digestion into variable.
	$S_Elimination=$A_Row['Elimination'];	//Get Variable Name  Elimination into variable.	
	$S_PhysicalActivity=$A_Row['PhysicalActivity'];		//Get Variable Name  PhysicalActivity into variable.
	$S_MentalActivity=$A_Row['MentalActivity'];		//Get Variable Name  MentalActivity into variable.
	$S_Emotions=$A_Row['Emotions'];	//Get Variable Name  Emotions into variable.	
	$S_Faith=$A_Row['Faith'];	//Get Variable Name  Faith into variable.	
	$S_Intellect=$A_Row['Intellect'];		//Get Variable Name  Intellect into variable.
	$S_Memory=$A_Row['Memory'];	//Get Variable Name  Memory into variable.	
	$S_Dreams=$A_Row['Dreams'];		//Get Variable Name  Dreams into variable.
	$S_Sleep=$A_Row['Sleep'];		//Get Variable Name  Sleep into variable.
	$S_Speech=$A_Row['Speech'];		//Get Variable Name  Speech into variable.
	$S_Finances=$A_Row['Finances'];	//Get Variable Name  Finances into variable.	
}
echo "<tr><td>1. What is your Body Frame? </td><td>$S_BodyFrame</td></tr>";
echo "<tr><td>2. What is your Body Weight?</td><td>$S_BodyWeight</td></tr>";
echo "<tr><td>3. How your Eyes looks?</td><td>$S_Eyes</td></tr>";
echo "<tr><td>4. How you describe your Nose?</td><td>$S_Nose</td></tr>";
echo "<tr><td>5. How is your Lips? </td><td>$S_Lips</td></tr>";
echo "<tr><td>6. How is your Cheeks?</td><td>$S_Cheeks</td></tr>";
echo "<tr><td>7. How you describe your Teeth? </td><td>$S_Teeth</td></tr>";
echo "<tr><td>8. How your Skin looks? </td><td>$S_Skin</td></tr>";
echo "<tr><td>9. How you describe your Hair? </td><td>$S_Hair</td></tr>";
echo "<tr><td>10. How is the Structure of your Nails?</td><td>$S_Nails</td></tr>";
echo "<tr><td>11. How you describe your Neck?</td><td>$S_Neck</td></tr>";
echo "<tr><td>12. Choose option for Chest.</td><td>$S_Chest</td></tr>";
echo "<tr><td>13. What is the shape of your belly? </td><td>$S_Belly</td></tr>";
echo "<tr><td>14. How you describe your Hips?</td><td>$S_Hips</td></tr>";
echo "<tr><td>15. How you describe your Joints? </td><td>$S_Joints</td></tr>";
echo "<tr><td>16. What is the shape of your Appetite?</td><td>$S_Appetite</td></tr>";
echo "<tr><td>17. What is the time duration of Thirst?</td><td>$S_Thirst</td></tr>";
echo "<tr><td>18. How is your Digestion system?</td><td>$S_Digestion</td></tr>";
echo "<tr><td>19. Choose option for Elimination?</td><td>$S_Elimination</td></tr>";
echo "<tr><td>20. How you rate your Physical Activity?</td><td>$S_PhysicalActivity</td></tr>";
echo "<tr><td>21. How you rate your Mental Activity? </td><td>$S_MentalActivity</td></tr>";
echo "<tr><td>22. How Emotional you are?</td><td>$S_Emotions</td></tr>";
echo "<tr><td>23. How Faithful you are?</td><td>$S_Faith</td></tr>";
echo "<tr><td>24. What are your Intellectual capabilities?</td><td>$S_Intellect</td></tr>";
echo "<tr><td>25. What is the accessbility of your Memory?</td><td>$S_Memory</td></tr>";
echo "<tr><td>26. What kind of Dreams do you see?</td><td>$S_Dreams</td></tr>";
echo "<tr><td>27. How you describe your Sleep?</td><td>$S_Sleep</td></tr>";
echo "<tr><td>28. How could you Speak? </td><td>$S_Speech</td></tr>";
echo "<tr><td>29. Where you spend Money? </td><td>$S_Finances</td></tr>";

$O_Mysqli->close();	//database connection close.
?>
</table>
<br/>
<a href="/DrugsDetail/DownloadViewQuestionnaireAnswersPDF.php?UserName=<?php echo $S_UserName; ?> & Date=<?php echo $D_Date; ?>">Export to PDF</a>	<!Divert to DownloadViewQuestionnaireAnswersPDF.php page!><br/><br/>
<input type="button" value="Back" onClick="location.href='/DrugsDetail/WelcomeUser.php' ">		<!Divert to WelcomeUser.php page!>
</center>
</h4>
</html>