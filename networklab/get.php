<?php
if(isset($_GET['page']) and $_GET['page']=='Guest'){
	echo '<div style="margin: 50px auto; width: 300px; padding: 20px; border: thin solid #333; background-color: #bfbfbf; text-align: center;">Welcome Guest to our very basic site</div>';
}
if(isset($_GET['page']) and $_GET['page']=='Admin'){
 echo '
<div style="margin: 50px auto; width: 300px; padding: 20px; border: thin solid #333; background-color: #bfbfbf; text-align: center;">Well done looks like you found the password<br/> getrequest <br/><br/></div>';	
}
?>