<!-- NOTE: Server refer to the backend WHILE user refers to fontend i.e viewer -->
<!-- TOPIC: PHP Superglobal -->
<!-- Types of superglobal
$_SERVER
$_REQUEST-----$_POST, $_GET
$_FILES
$_SESSION
$_COOKIE
-->
<?php
// FIRST SERVER
// echo $_SERVER['PHP_SELF']. '<br>'; 
// echo $_SERVER['HTTP_HOST']. '<br>';
// echo $_SERVER['SCRIPT_NAME'];

?>
<form action="<?PHP echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" placeholder="Enter your name"><br><br>
    <input type="submit" value="Register Now">
</form>