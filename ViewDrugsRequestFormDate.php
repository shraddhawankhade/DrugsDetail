<!--
	filename: ViewDrugsRequestForm.php
	author: Snehal,Shraddha
	date-created: 23 feb 2012
	date-updated-last: 5 March 2012
-->

<?php
	$S_DoctorsName=$_GET['DoctorsName'];	//Get a doctors name into variable passed through URL.
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Drugs Request</title>

<!--Display datepicker to interface -->
<link href="jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="jquery.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script>
	$(function() 
	{
		var  pickerOpts = {dateFormat: $.datepicker.ATOM};
		$( "#datepicker1" ).datepicker(pickerOpts);
	});
	$(function() 
	{
		var  pickerOpts = {dateFormat: $.datepicker.ATOM};
		$( "#datepicker2" ).datepicker(pickerOpts);
	});
</script>

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
<div style="width:500px; border: solid 1px #333333;" align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:4px;"><center><b>Select Dates</b></center></div>
<div style="margin:20px">

<form name="ViewDrugsRequestForm" action="ViewDrugsRequestForm.php" method="post">
<label>From</label>
<input type="text" id="datepicker1" name="From"/>
<label>to</label>
<input type="text" id="datepicker2" name="To"/><br/><br/>
<input type="hidden"  name="DoctorsName" value="<?php echo $S_DoctorsName;?>"/>
<center>
<center><Input type="button" Value="Back" onClick="location.href='/DrugsDetail/AcceptDrugsRequest.php'">
<input type="submit" value=" Submit "/></center>
</form>

</div>
</div>
<br/><br/>
</div>
</body>
</html>