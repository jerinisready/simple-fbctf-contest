 <?php
 isset($_COOKIE['is_admin'])?$_COOKIE['is_admin']):setcookie('is_admin',false, time() + (86400 * 30), "/");
 ?>
 
<html>
<body>
<center>
<div style="border-radius:10px;padding:12px"
<?php
if(!isset($_COOKIE['is_admin'])) {
   echo" <h1> HELLO ADMIN, Your CODE is : 'sample cookie use'</h1>";
}
else 
   echo" <h1> HELLO GUEST! FIND ADMIN PANEL TO GET CODE!</h1>";
?>

</body>
</html>