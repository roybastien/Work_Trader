<?php
/**
*
* @package acp
* @version $Id: acp_groups.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_groups_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_groups',
			'title'		=> 'ACP_GROUPS_MANAGEMENT',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'manage'		=> array('title' => 'ACP_GROUPS_MANAGE', 'auth' => 'acl_a_group', 'cat' => array('ACP_GROUPS')),
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