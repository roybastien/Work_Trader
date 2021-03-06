<?php
/**
*
* @package acp
* @version $Id: acp_prune.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_prune_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_prune',
			'title'		=> 'ACP_PRUNING',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'forums'	=> array('title' => 'ACP_PRUNE_FORUMS', 'auth' => 'acl_a_prune', 'cat' => array('ACP_MANAGE_FORUMS')),
				'users'		=> array('title' => 'ACP_PRUNE_USERS', 'auth' => 'acl_a_userdel', 'cat' => array('ACP_USER_SECURITY')),
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