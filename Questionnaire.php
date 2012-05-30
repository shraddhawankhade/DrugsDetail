<!--
	filename: AcceptDrugsRequest.php
	author: Snehal,Shraddha
	date-created: 29 feb 2012
	date-updated-last:5 March 2012 
-->
<?php
$D_Date=date("Y/m/d");	//Get the system date into variable.
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Questionnaire Form</title>
</head>
<style type="text/css">
body{
font-family:Arial;
font-size:14px;
}
label{
font-weight:bold;
width:100px;
font-size:14px;
}
</style>

<body>
<br/><br/><br/>
<div align="center">
<div style="width:600px; border: solid 1px #333333;" align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:4px;"><center><b>Questionnaire Form</b></center></div>
<div style="margin:30px">

<form name="Questionnaire" action="QuestionnaireDB.php" method="post">
<input type="hidden" name="Date" value="<?php echo $D_Date; ?>"/>

<span class="FormQuestion" id="Question1">
<label>1. What is your Body Frame?</label><br/><br/>
<input type="radio" name="BodyFrame" value="Slim"/>Slim<br/>
<input type="radio" name="BodyFrame" value="Medium"/>Medium<br/>
<input type="radio" name="BodyFrame" value="Large"/>Large
</span>

<hr/>

<span class="FormQuestion" id="Question2">
<label>2. What is your Body Weight?</label><br/><br/>
<input type="radio" name="BodyWeight" value="Low"/>Low<br/>
<input type="radio" name="BodyWeight" value="Medium"/>Medium<br/>
<input type="radio" name="BodyWeight" value="Overweight"/>Overweight
</span>

<hr/>

<span class="FormQuestion" id="Question3">
<label>3. How your Eyes looks?</label><br/><br/>
<input type="radio" name="Eyes" value="Small,Active"/>Small,Active<br/>
<input type="radio" name="Eyes" value="Sharp,Sensitive"/>Sharp,Sensitive<br/>
<input type="radio" name="Eyes" value="Large,Beautiful"/>Large,Beautiful
</span>

<hr/>

<span class="FormQuestion" id="Question4">
<label>4. How you describe your Nose?</label><br/><br/>
<input type="radio" name="Nose" value="CrookedSharp"/>Crooked,Sharp<br/>
<input type="radio" name="Nose" value="LongPointed"/>Long,Pointed<br/>
<input type="radio" name="Nose" value="ShortRound"/>Short,Round
</span>

<hr/>

<span class="FormQuestion" id="Question5">
<label>5. How is your Lips?</label><br/><br/><br/>
<input type="radio" name="Lips" value="DryCracked"/>Dry,Cracked<br/>
<input type="radio" name="Lips" value="RedInflamed"/>Red,Inflamed<br/>
<input type="radio" name="Lips" value="SmoothOily"/>Smooth,Oily
</span>

<hr/>

<span class="FormQuestion" id="Question6">
<label>6. How is your Cheeks?</label><br/><br/>
<input type="radio" name="Cheeks" value="WrinkledSunken"/>Wrinkled,Sunken<br/>
<input type="radio" name="Cheeks" value="SmoothFlat"/>Smooth,Flat<br/>
<input type="radio" name="Cheeks" value="PlumpRounded"/>Large
</span>

<hr/>

<span class="FormQuestion" id="Question7">
<label>7. How you describe your Teeth?</label><br/><br/>
<input type="radio" name="Teeth" value="LargeThinGums"/>Slim<br/>
<input type="radio" name="Teeth" value="TenderGums"/>Tender gums<br/>
<input type="radio" name="Teeth" value="WhiteStrongGums"/>White, Strong gums
</span>

<hr/>

<span class="FormQuestion" id="Question8">
<label>8. How your Skin looks?</label><br/><br/>
<input type="radio" name="Skin" value="DryColdRough"/>Dry, Cold, Rough<br/>
<input type="radio" name="Skin" value="WarmRosyOily"/>Warm, Rosy, Oily<br/>
<input type="radio" name="Skin" value="CoolOilyThick"/>Cool, Oily, Thick
</span>

<hr/>

<span class="FormQuestion" id="Question9">
<label>9. How you describe your Hair?</label><br/><br/>
<input type="radio" name="Hair" value="DryBrittleScarce"/>Dry, Brittle, Scarce<br/>
<input type="radio" name="Hair" value="StraightOilyBald"/>Straight, Oily, Bald<br/>
<input type="radio" name="Hair" value="ThickCurlyOily"/>Thick, Curly, Oily
</span>

<hr/>

<span class="FormQuestion" id="Question10">
<label>10. How is the Structure of your Nails?</label><br/><br/>
<input type="radio" name="Nails" value="RoughDryBrittle"/>Rough, Dry, Brittle<br/>
<input type="radio" name="Nails" value="SharpFlexiblePink"/>Sharp, Flexible, Pink<br/>
<input type="radio" name="Nails" value="ThickOilySmooth"/>Thick, Oily, Smooth
</span>

<hr/>

<span class="FormQuestion" id="Question11">
<label>11. How you describe your Neck?</label><br/><br/>
<input type="radio" name="Neck" value="LongThin"/>Long, thin<br/>
<input type="radio" name="Neck" value="Medium"/>Medium<br/>
<input type="radio" name="Neck" value="LargeFolded"/>Large, folded
</span>

<hr/>

<span class="FormQuestion" id="Question12">
<label>12. Choose option for Chest.</label><br/><br/>
<input type="radio" name="Chest" value="FlatSunken"/>Flat, sunken<br/>
<input type="radio" name="Chest" value="Medium"/>Medium<br/>
<input type="radio" name="Chest" value="Expanded"/>Expanded
</span>

<hr/>

<span class="FormQuestion" id="Question13">
<label>13. What is the shape of your belly?</label><br/><br/>
<input type="radio" name="Belly" value="FlatSunken"/>Flat, sunken<br/>
<input type="radio" name="Belly" value="Medium"/>Medium<br/>
<input type="radio" name="Belly" value="PotBelly"/>Pot belly
</span>

<hr/>

<span class="FormQuestion" id="Question14">
<label>14. How you describe your Hips?</label><br/><br/>
<input type="radio" name="Hips" value="Slender"/>Slender<br/>
<input type="radio" name="Hips" value="Medium"/>Medium<br/>
<input type="radio" name="Hips" value="Heavy"/>Heavy
</span>

<hr/>

<span class="FormQuestion" id="Question15">
<label>15. How you describe your Joints?</label><br/><br/>
<input type="radio" name="Joints" value="ColdCracking"/>Cold, Cracking<br/>
<input type="radio" name="Joints" value="Medium"/>Medium<br/>
<input type="radio" name="Joints" value="LargeLubricated"/>Large, Lubricated
</span>

<hr/>

<span class="FormQuestion" id="Question16">
<label>16. What is the shape of your Appetite?</label><br/><br/>
<input type="radio" name="Appetite" value="IrregularScant"/>Irregular, scant <br/>
<input type="radio" name="Appetite" value="StrongUnbearable"/>Strong, unbearable<br/>
<input type="radio" name="Appetite" value="SlowSteady"/>Slow, steady
</span>

<hr/>

<span class="FormQuestion" id="Question17">
<label>17. What is the time duration of Thirst?</label><br/><br/>
<input type="radio" name="Thirst" value="Irregular"/>Irregular<br/>
<input type="radio" name="Thirst" value="Surplus"/>Surplus<br/>
<input type="radio" name="Thirst" value="Little"/>Little
</span>

<hr/>

<span class="FormQuestion" id="Question18">
<label>18. How is your Digestion system?</label><br/><br/>
<input type="radio" name="Digestion" value="IrregularBloating"/>Irregular, bloating<br/>
<input type="radio" name="Digestion" value="QuickBurning"/>Quick, burning<br/>
<input type="radio" name="Digestion" value="Prolonged"/>Prolonged
</span>

<hr/>

<span class="FormQuestion" id="Question19">
<label>19. Choose option for Elimination?</label><br/><br/>
<input type="radio" name="Elimination" value="Constipation"/>Constipation<br/>
<input type="radio" name="Elimination" value="LooseStools"/>Loose stools<br/>
<input type="radio" name="Elimination" value="ThickSluggish"/>Thick, sluggish
</span>

<hr/>

<span class="FormQuestion" id="Question20">
<label>20. How you rate your Physical Activity?</label><br/><br/>
<input type="radio" name="PhysicalActivity" value="Hyperactive"/>Hyperactive<br/>
<input type="radio" name="PhysicalActivity" value="Moderate"/>Moderate<br/>
<input type="radio" name="PhysicalActivity" value="Slow"/>Slow
</span>

<hr/>

<span class="FormQuestion" id="Question21">
<label>21. How you rate your Mental Activity?</label><br/><br/>
<input type="radio" name="MentalActivity" value="Hyperactive"/>Hyperactive<br/>
<input type="radio" name="MentalActivity" value="Moderate"/>Moderate<br/>
<input type="radio" name="MentalActivity" value="Slow"/>Slow
</span>

<hr/>

<span class="FormQuestion" id="Question22">
<label>22. How Emotional you are?</label><br/><br/>
<input type="radio" name="Emotions" value="AnxietyFear"/>Anxiety, fear<br/>
<input type="radio" name="Emotions" value="AngerJealousy"/>Anger, jealousy<br/>
<input type="radio" name="Emotions" value="CalmPossessive"/>Calm, possessive
</span>

<hr/>

<span class="FormQuestion" id="Question23">
<label>23. How Faithful you are?</label><br/><br/>
<input type="radio" name="Faith" value="Variable"/>Variable<br/>
<input type="radio" name="Faith" value="Extremist"/>Extremist<br/>
<input type="radio" name="Faith" value="Consistent"/>Consistent
</span>

<hr/>

<span class="FormQuestion" id="Question24">
<label>24. What are your Intellectual capabilities?</label><br/><br/>
<input type="radio" name="Intellect" value="QuickIncorrect"/>Quick, incorrect<br/>
<input type="radio" name="Intellect" value="AccurateSharp"/>Accurate, sharp<br/>
<input type="radio" name="Intellect" value="SlowAndSteady"/>Slow and steady
</span>

<hr/>

<span class="FormQuestion" id="Question25">
<label>25. What is the accessbility of your Memory?</label><br/><br/>
<input type="radio" name="Memory" value="PoorRemote"/>Poor remote<br/>
<input type="radio" name="Memory" value="Distinct"/>Distinct<br/>
<input type="radio" name="Memory" value="SlowAndSustained"/>Slow and sustained
</span>

<hr/>

<span class="FormQuestion" id="Question26">
<label>26. What kind of Dreams do you see?</label><br/><br/>
<input type="radio" name="Dreams" value="Fearful "/>Fearful<br/>
<input type="radio" name="Dreams" value="Violent"/>Violent<br/>
<input type="radio" name="Dreams" value="Romantic"/>Romantic
</span>

<hr/>

<span class="FormQuestion" id="Question27">
<label>27. How you describe your Sleep?</label><br/><br/>
<input type="radio" name="Sleep" value="ScantyBroken "/>Scanty, broken<br/>
<input type="radio" name="Sleep" value="LittleSound"/>Little, sound<br/>
<input type="radio" name="Sleep" value="ProlongedDeep"/>Prolonged, deep
</span>

<hr/>

<span class="FormQuestion" id="Question28">
<label>28. How could you Speech?</label><br/><br/>
<input type="radio" name="Speech" value="RapidUnclear"/>Rapid, unclear<br/>
<input type="radio" name="Speech" value="SharpPenetrating"/>Sharp, penetrating<br/>
<input type="radio" name="Speech" value="SlowMonotonous"/>Slow, monotonous
</span>

<hr/>

<span class="FormQuestion" id="Question29">
<label>29. Where you spend Money?</label><br/><br/>
<input type="radio" name="Finances" value="SpendsOnTrifles"/>Spends on trifles<br/>
<input type="radio" name="Finances" value="SpendsOnLuxuries"/>Spends on luxuries<br/>
<input type="radio" name="Finances" value="SavesMoney"/>Saves money
</span>

<br /><br />
<center>
<input type="button" value=" Back " onClick="location.href='/DrugsDetail/WelcomeUser.php' ">		<!Divert to WelcomeUser.php page!>
<input type="submit" value=" Submit "/><br />
</center>
</form>

</div>
</div>
<br/><br/>
</div>
</body>
</html>