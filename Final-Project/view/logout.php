<?php

session_start();
unset($_SESSION['user']);
unset($_SESSION['admin']);
unset($_SESSION['host']);
header('location: ../view/login.php');

?>
<html>

</html>