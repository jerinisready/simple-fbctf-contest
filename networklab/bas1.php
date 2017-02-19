<!doctype html>
<?php
include('header.php');	
	?>
<center>
<?php 	// JAVASCRIPT CHALLENGE   ?>
	<div id="challenge">
<h1>This won't take long...</h1>
<p>
Find the right password and use it on the challenge page!
</p>
<script type="text/javascript">
var numletter="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

function submitentry(){
	verification = document.getElementById("passwd").value;
		
	password = numletter.substring(11,12);
	password = password + numletter.substring(18,19);
	password = password + numletter.substring(23,24);
	password = password + numletter.substring(16,17);
	password = password + numletter.substring(24,25);
	password = password + numletter.substring(1,4);
	
	if(verification == password){
		alert("Well done, you've got it!");
	} else {
		alert("Nahh, thats wrong!");
	}
}
</script>

<form action="index.php" method="post">
<input type="password" name="passwd" id="passwd" size="16" />
<input type="submit" name="submit" value="Enter" onclick="submitentry(); return false;" />
</form>
</div>
	
<br><BR><BR>	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php
include('footer.php');
?>