<!doctype HTML><br /><br />
<?php	
session_start();
echo "<center><br /><br />";


//if( $_COOKIE['username'] == 'amVyaW5JU3JlYWR5'){
	$arr=array(	
	"')) OR 1=1 OR (('",
	"')) OR true OR (('",
	"')) OR 1 OR (('",
	"')) or 1=1 or (('",
	"')) or true or (('",
	"')) or 1 or (('",
	"')) OR (( 1=1 '",
	"')) OR (( true '",
	"')) OR ((1 '",
	"')) or (( 1=1 '",
	"')) or (( true '",
	"')) or ((1'"	);

	if(isset($_POST['password'])){
		if(!in_array($_POST['password'], $arr)){
			echo "<script>alert( \"SQL QUERY ERROR : ( SELECT * FROM `tbl_login` ( 
			WHERE  `login_username` = '".$_COOKIE['username']."' AND `login_pass` = 
			MD5(	SHA1(	'".$_POST['password']."' ))))\");</script>";
			echo "point 1";
		}
		else if(!isset($_COOKIE['username'])){
			echo "<br />Some times time run too fast!";
		}	
		else if($_SERVER['HTTP_REFERER']!=='letsdecrypt.tk'){
			echo "<br />You are not Referred from 'letsdecrypt.tk' ";
		}
		else if($_COOKIE['username']!=='amVyaW5JU3JlYWR5'){
			echo "<br />Username! EXPAIRED ";
		}	
		else if ( $_SERVER['HTTP_USER_AGENT'] != "ceklab_user_agent" ){
			echo "<br />Sorry We cannot go ahead without CEKLAB BROWSER";
		}
		else if ( $_SERVER['HTTP_USER_AGENT'] == "ceklab_user_agent"){
			echo "<br />YOUR PASSWORD IS :'nowyoutriedisSQLINJECTION'";
		}
		else{
			// PASSWORD NOT FOUND!
			echo "<br />TOO MANY RESULTS OR TOO MUCH RESULTS! LOGIN FAILED!";
		}
	
	}
	else{
	?>
	<form method=post >
		Password : <input type='password' placeholder='password' name='password'>
		<input type='submit' value='Login'>
	</form>

	<?php
	}
//}
//else header('Location : multisecured.php');

