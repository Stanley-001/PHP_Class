<?php
session_start();

if(isset($_POST['submit'])){
    echo $_POST['email'];
};


?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Name: <input type="text" name="name" placeholder="Enter Your Name"><br><br>
Email: <input type="email" name="email" placeholder="Enter Your Name"><br><br>
<input type="submit" name="submit" value="Register">
</input>
</form>