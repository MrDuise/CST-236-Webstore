<?php
//Michael Duisenberg
//10-15-20
//This page links to the log out button and ends all session variables, then returns the user to the login in page


session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header("Location: /Presentation/Views/Login/userLogin.php");
die;
