<?php
session_start();
unset($_SESSION['id']);
header("Location:reg_login.php");