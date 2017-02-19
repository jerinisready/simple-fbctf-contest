<?php 
if(isset($_GET['getemail'])) {
		$_POST['mymail'] = $_GET['getemail'];
}

if(isset($_POST['email'])) {
	if( $_POST['email'] !== 'assistant@ceklabs.co.nf'){
			$_POST['mymail'] = $_POST['email'];
			require('credits2.php');
	}
}

