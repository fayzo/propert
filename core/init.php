<?php 
session_start();

include('database/db.php');
include('class/Users.php');
include('class/Home.php');
include('class/House.php');
include('class/Notification.php');


define('BASE_URL','http://localhost/twitter_ex/');
define('BASE_URL_LINK', BASE_URL.'assets/');
define('HOME', BASE_URL.'index.php');
define('LOGIN', BASE_URL.'includes/login.php');
define('LOGOUT', BASE_URL.'includes/logout.php');
define('ADMIN', BASE_URL.'admin.php');
define('SETTING', BASE_URL.'settings.php');
define('PROFILE', BASE_URL.'profile.php');
define('PROFILE_EDIT', BASE_URL.'profile_edit.php');
define('VIEW_MESSAGE', BASE_URL.'message.php');
define('WATCH_LIST', BASE_URL.'watchlist.php');
define('PROPERTY_REQUEST', BASE_URL.'property_request.php');


// DEFAULT IMAGE USERS 
define( 'NO_PROFILE_IMAGE', 'image/users_profile_cover/empty-profile.png');
define( 'NO_PROFILE_IMAGE_URL', 'assets/image/user_default_image/defaultprofileimage.png');
define( 'NO_COVER_IMAGE_URL', 'assets/image/user_default_image/defaultCoverImage.png');








/*
===========================================
         Notice
===========================================
# You are free to run the software as you wish
# You are free to help yourself study the source code and change to do what you wish
# You are free to help your neighbor copy and distribute the software
# You are free to help community create and distribute modified version as you wish

We promote Open Source Software by educating developers (Beginners)
use PHP Version 5.6.1 > 7.3.20  
===========================================
         For more information contact
=========================================== 
Kigali - Rwanda
Tel : (250)787384312 / (250)787384312
E-mail : shemafaysal@gmail.com

*/
?>