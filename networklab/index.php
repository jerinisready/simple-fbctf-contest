<!doctype html>
<?php
include('header.php');	
	?>
<div style="backgroud:transparent">
<br><br><BR>
	<div id=body_mini style="padding-left:10%;padding-right:50%;">
		<div style="padding-left:10%;padding-right:10%;padding-bottom:px;border-radius:20px;border:1px;border-style:solid;">
			<h2>LOGIN TO ADMIN PANEL</h2>
			<h5>
			<?php
 			echo  isset($_GET['done'])?"SUCCESSFULLY SENT EMAIL!<br>":"";
			echo  isset($_GET['dataerr'])?"INCORRECT FORMAT!<br>":"";
			echo  isset($_GET['err'])?"Sorry the request is not from <strong>ceklabs.co.nf</strong><br>":"";
			?>
			</h5>
			<form method=post action="http://ceklab.co.nf/labadminlogin.php">
			<input type=hidden name=email value='assistant@ceklabs.co.nf'>
			<input type=submit name=sentmail value="SEND PASSWORD TO ADMIN's EMAIL">
			
			<br>
			Username : <br><input type=text placeholder=username>
			<br>	
			Password : <br>
			<input type=password placeholder=secret_password value=upload image>
			&nbsp;
			<input type=button value=Login onclick='alert("Find result and submit to LETS DECRYPT!");return false';>
			<br><br><br>
		</div>
	</div>
<?php
include('footer.php');
?>