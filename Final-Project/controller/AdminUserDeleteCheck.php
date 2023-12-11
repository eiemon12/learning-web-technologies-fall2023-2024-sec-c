<?php
require_once("../model/userModel.php");
$id = $_GET['id'];
deleteUser($id);
header("location: ../view/AdminDeleteUser.php");
?><html>

</html>