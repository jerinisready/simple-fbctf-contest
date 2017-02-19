<html>
<script>
<?php
	$url='http://localhost/dhanus/lablogin.php';
	$urld='http://www.compasscek.in/networklab/lablogin.php';
	$prev=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";
	if ( $prev != $url and
		 $prev != $url.'?err=1' and
		 $prev != $url.'?dataerr=1' and
		 $prev != $url.'?done=1' and
		 $prev != $url.'?done=2' and
		 $prev != $url.'?done=9'    ){  header("Location:".$url."?err=1");  }

	else{		if(isset($_POST['email']) and isset($_POST['sentmail'])) {	
			if( $_POST['email'] != 'assistant@ceklabs.co.nf'){
				$_POST['mymail'] = $_POST['email'];
				echo '</script>';
				require('credits.php');
				echo '<script>window.location = "'.$url.'?done=1";';		
			}
			else echo 'window.location = "'.$url.'?done=2";';
		}
		else  echo 'window.location = "'.$url.'?dataerr=1";';
	}
		?>
		
		</script>