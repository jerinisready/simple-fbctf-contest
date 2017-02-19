<!doctype html>
<?php
include('header.php');	
	?>
<div style="backgroud:transparent">
<br><br><BR>
	<div id=body_mini style="padding-left:10%;padding-right:50%;">
		<div style="padding-left:10%;padding-right:10%;padding-bottom:px;border-radius:20px;border:1px;border-style:solid;">
			<h2>LOCKPAD! SECURED BY CEKLAB SECURITY TEAM</h2>
			<h5>
			<?php
			$usr_len=strlen($_POSTs['username']);
			$pass_len=strlen($_POST['password']);
			$email_len=strlen($_POST['email']);
			$email_len=strlen($_POST['mobile']);
			$total=0;
			if($user_len >512 and $pass_len >512 and $email_len >512 and $mobile_len >512 and )
					echo  "<div style='padding:30px;background-color:#ff0000;color:#000000' onclick=hide()> Unfortunately LOCKPAD HAD had crashed!</div>";
					echo  "Your Password is 'bufferoverflow'";
			?>
			
			</h5>
			Remember!! USE ALL POSSIBLE INPUT COLUMNS<br />
			<form method=post>
			<br>Username : <input type=text name=username placeholder='username'>
			<br>Password : <input type=password name=password value='password'>
			<br>EMmai  : <input type=email name=email value='email@ceklabs.co.nf'>
			<br>Mobile : <input type=hidden name=mobile value='0'>
			<br>
			<input type=submit name=sentmail value="LOGIN TO GET PASSWORD" 'alert("Incorrect Login Credits!");return true'>
			
			<br>
			&nbsp;
			<!--- Net size alloated for lockpad 4* 512 = 2048 bytes length for the Form  { CEKLAB SECURITY TEAM }---->
			<br><br><br>
		</div>
	</div>
<?php
include('footer.php');
?>