<?php
/**
*
* @package acp
* @version $Id: acp_database.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_database_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_database',
			'title'		=> 'ACP_DATABASE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'backup'	=> array('title' => 'ACP_BACKUP', 'auth' => 'acl_a_backup', 'cat' => array('ACP_CAT_DATABASE')),
				'restore'	=> array('title' => 'ACP_RESTORE', 'auth' => 'acl_a_backup', 'cat' => array('ACP_CAT_DATABASE')),
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