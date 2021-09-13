<?php
// -----------------------------------------------------------------------
// START : Checking the session in Action
// -----------------------------------------------------------------------
session_start();
$session = session_id();
print_r($session);
echo "</br>";


// We may directly save the session KEY & VALUE pair like given Below.
$_SESSION['user_id'] ="Session User Id 001";
$_SESSION['name'] ="Shamiratan G Sah";

print_r($_SESSION);
echo "</br>";


// to change a session variable, just overwrite it
$_SESSION['user_id'] ="Session User Id 002";
$_SESSION["name"] = "Yellow";


echo "This is Updated Session ID : ".$_SESSION['user_id'];
echo "</br>";
echo "This is Updated Session Name : ".$_SESSION['name'];


// remove all session variables
session_unset();

// destroy the session
session_destroy();


// -----------------------------------------------------------------------
// END : Checking the session in Action
// -----------------------------------------------------------------------

?>