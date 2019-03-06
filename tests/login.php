<?php
define('IN_PHPBB', true);
$phpbb_root_path = '../forums/';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

if($user->data['is_registered'])
{
    echo 'Welcome ' . $user->data['username'];
}
else
{
    echo 'Not Registered';
}

?>

<h1>Session Testing</h1>