<!doctype html>
<?php
include('header.php');	
	?>
<?php
	function encr($text){
		$i=0;
		$add=1;
		while($i < strlen($text) ){
			$text[$i] = chr( ord($text[$i]) + $add);
			$add++;
			$i++;
		}
	//	echo "OUT : ".$text."<br>"; 
		return $text;
	}
?>
<div style="backgroud:transparent">
<br><br><BR>
	<div id=body_mini style="padding-left:10%;padding-right:50%;">
		<div style="padding-left:10%;padding-right:10%;padding-bottom:px;border-radius:20px;border:1px;border-style:solid;">
			<h2>Simple Encrypt</h2>
			<h5>
			<?php
 			echo  (isset($_POST['text'] ) and ($_POST['text'] != "") )? "Encrypted Text : \"".encr($_POST['text'])."\"</br>":"";
			?>
			</h5>
			<form method=post>
			Sir had got an encryption algorithm,  The encryption system is publically available and can be accessed with this form:<br/>
			Please enter a string to have it encrypted.
			<input type=text name=text placeholder="Enter Text to decrypt"  >
			<input type=submit name=submit value="Encrypt">
			<br>
			Find result and submit to LETS DECRYPT!
		<br><br>
		</div>
	</div>
<?php
include('footer.php');
?>