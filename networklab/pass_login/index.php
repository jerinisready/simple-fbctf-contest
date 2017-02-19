<!doctype html>
<?php
include('header.php');	
?>
<center>

<div id="challenge">
<h1>Someway I have to find...</h1>
<p>
Login it or Bypass!
</p>

<form action="index.php" method="post">
<input type="text" name="username" id="passwd" size="16" />
<input type="password" name="passwd" id="passwd" size="16" />
<input type="submit" name="submit" value="Enter" onclick="go(); return false;" />
</form>
</div>
	
	
	<script type="text/javascript">

function go() {
	var user = document.form.user.value;
	var pass = document.form.pass.value;
	if ( pass == "" ) { 
		alert("Invalid Password!"); 
	} else {
		location = user.toLowerCase() + "/" + pass.toLowerCase() + ".html";
	}
}

</script>
	
<br><br><br>	
	
	
	
	
	































<!-- SITE DEVELOPED BY jerinisready --->
	
	
	
	
	
	
	
	
<?php
include('footer.php');
?>