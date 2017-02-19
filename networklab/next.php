<?php
// 	/var/www/html/networklab/somefolder/
session_start();
$f=true;
$history=isset($_SESSION['history'])?$_SESSION['history']:"";

if(isset($_GET['page'])){
	$p=	$_GET['page'];
	if($p=='shell'){
		$path = (isset($path) and $path[0]!='')?$path:array();
		if(isset($_GET['bash'])){
			$bash=htmlentities($_GET['bash']);
			$history= $history."<br/>".$bash;
			$_SESSION['history']=$history;
			echo $_SESSION['history'];
			$path = __exec($bash);
			
		}
		echo "<form id=shell><input type=hidden name=page value=shell>";
		
		echo "NetForce@CEKLAB ".path($path)." $ "."";?><input type=text autofocus=true style="border:none;" name=bash placeholder="BASH" onkeyup="javascript:document.getElementById('shell').submit">
	
	<?php
	}	// $=shell


	if($p=='help'){
		?>
		<br /><br /><br /><hr /><hr /><br /><br />
			WE SUPPORT HACKING!!! (BUT SECRETELY!!)
			<br/><br/>
			NetFORCE GROUP of HACKERS CEK!!!					
		<br /><br /><br /><hr /><hr />
		<!---
		FOR THOSE WHO ARE NEW TO LINUX.
		ALL USER PASSWORDS ARE STORED IN LINUX AT A LOCATION : `/etc/passwd`
		USUALLY THIS AREA IS READ RESTRICTED with read permission only to root, 
		BUT WE HAVE UNLOCKED IT FOR YOU!

		One more thing Here is a shell script for you : next.php?p=shell&bash={command}
		---->
	<?php
	}	
}	// $_GET isset

?>

<br /><br /><br /><br /><br /><br /><br /><hr /><hr /><br /><br /><center>
<h2> THIS PAGE IS HACKED </h2>
<p> TEAM NetFORCE</p>
<br /><br /><hr /><hr />


<?php

function __exec($bash){
	switch($bash){
		
		case 'cd'	:	$path="NetForce@CEKLAB $ ";
						$history='';
						break;
		case 'cd..'	:
		case 'cd ..':	
		default 	: 	$arr=explode(" ",$bash);
						if($arr[0]=='cd'){
							
							if($arr[1]=='/etc/passwd' or $arr[1]='../../../../etc/passwd'){
									include('passwd.php');
							}
							else{
								$_arr=explode("/",$arr[1]);
								
							}
						}
				}
	}
	function path($path){
		$i=0;
		while($path[$i]){
		echo "/".$path[$i];
	}
}


