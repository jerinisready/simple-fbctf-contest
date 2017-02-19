<!doctype HTML>
<?php
include('header.php');
echo "<br><br><Br><center>";
if( strlen( strstr( $_SERVER['HTTP_USER_AGENT'],"ceklab_user_agent")) <= 0 ){ // if not ceklab_user_agent
     echo "USERAGENT : \"ceklab_user_agent\" not found<br>";
}
else{
     echo "Welcome, JK told me to give you \"bethewebmaster\""; 
}
echo "<br><br><br><br>";
include('footer.php');
?>