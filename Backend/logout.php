<?php

/*
 * This file is generated by S. Das.
 * Do not copy it without permission.
 */
//Contact at: tapan84silchar[at]gmail.com
include '../config/config.php';
session_start();
unset($_SESSION['admin_user_nm']);
unset($_SESSION['admin_name']);
unset($_SESSION['role']);
//header("Location: ".constant("HOST11")."/Backend/login.php");
header("Location: ".constant("HOST11")."/login.php");
?>