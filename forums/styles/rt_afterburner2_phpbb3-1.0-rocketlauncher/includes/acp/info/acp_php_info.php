<?php
/**
*
* @package acp
* @version $Id: acp_php_info.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_php_info_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_php_info',
			'title'		=> 'ACP_PHP_INFO',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'info'		=> array('title' => 'ACP_PHP_INFO', 'auth' => 'acl_a_phpinfo', 'cat' => array('ACP_GENERAL_TASKS')),
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