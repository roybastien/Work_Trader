<?php

define('IN_PHPBB', true);
$phpbb_root_path = './forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

// check for logout request
$cp = $_GET['cp'];

if ($cp == "logout") { //
$user->session_kill();
$user->session_begin();
    header('Location: http://uofu-cs4540-11.westus.cloudapp.azure.com/Projects/Work_Trader/', true, 301);
    exit();
}
?>
