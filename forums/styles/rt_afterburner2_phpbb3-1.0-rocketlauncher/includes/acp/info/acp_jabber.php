<?php
/**
*
* @package acp
* @version $Id: acp_jabber.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_jabber_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_jabber',
			'title'		=> 'ACP_JABBER_SETTINGS',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'settings'		=> array('title' => 'ACP_JABBER_SETTINGS', 'auth' => 'acl_a_jabber', 'cat' => array('ACP_CLIENT_COMMUNICATION')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
?>