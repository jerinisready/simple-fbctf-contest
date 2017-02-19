<!doctype HTML>
<?php
echo "<center>";
echo "<center><br /><br /><br /><br />";
// $_POST['text']=value				// CASE 1

setcookie('username', 'jerinISready', time() + (40), "/"); // 86400 = 1 day


if(isset($_POST['username']) and 'amVyaW5JU3JlYWR5' == $_POST['username']){
	$_SESSION['username']='amVyaW5JU3JlYWR5';
	echo "<script> window.location='enterpass.php'; </script>";
	
}
?>


<!------ COOKIES EXISTS ONLY FOR 30 SECONDS FOR WHOLE LOGIN------->
<form method=post>
Username : <input type='text' placeholder='decrypted username' name='username'>
  <input type='submit' value='Next' onclick>
</form>


<script  language='JavaScript'>
//	void(document.cookie='username=jerinISready');
//	void(document.cookie='password=jillisdead');

   var date = new Date();
   date.setTime(date.getTime()+(30*1000));
   document.cookie = "username=jerinISready; expires="+date.toGMTString()+"; path=/";
   document.cookie = "password=getthelogic; expires="+date.toGMTString()+"; path=/";
   
</script>





   <!------ GET READY FOR TIME ATTACK --------->

<!---CHALLENGING YOU!! MY ENCRYPTED USERNAME IS "jerinISready"!	------->