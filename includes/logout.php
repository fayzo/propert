<?php
include "../core/init.php";

$users->forgotUsernameCountsTodelete('users',
array('forgotUsernameCounts' => 'forgotUsernameCounts +1', ),$_SESSION['keycreate']);
$db->query("UPDATE users SET chat = 'off' WHERE user_id= $_SESSION[key] ");

unset($_SESSION['key']);
unset($_SESSION['profile_img']);
unset($_SESSION['approval']);
unset($_SESSION['chat']);
unset($_SESSION['register_as']);
unset($_SESSION['admin']);
session_unset();
session_destroy();
header ('location: '.LOGIN.'');


?>