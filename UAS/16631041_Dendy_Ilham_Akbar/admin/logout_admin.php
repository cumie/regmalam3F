<?php
session_start();
unset($_SESSION);
session_destroy();
header("Location:../admin/login_admin.php");
?> 