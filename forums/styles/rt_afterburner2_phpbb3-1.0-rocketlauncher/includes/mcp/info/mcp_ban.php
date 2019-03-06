<?php
/**
*
* @package mcp
* @version $Id: mcp_ban.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class mcp_ban_info
{
	function module()
	{
		return array(
			'filename'	=> 'mcp_ban',
			'title'		=> 'MCP_BAN',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'user'		=> array('title' => 'MCP_BAN_USERNAMES', 'auth' => 'acl_m_ban', 'cat' => array('MCP_BAN')),
				'ip'		=> array('title' => 'MCP_BAN_IPS', 'auth' => 'acl_m_ban', 'cat' => array('MCP_BAN')),
				'email'		=> array('title' => 'MCP_BAN_EMAILS', 'auth' => 'acl_m_ban', 'cat' => array('MCP_BAN')),
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