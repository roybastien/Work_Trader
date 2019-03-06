<?php
/**
*
* @package mcp
* @version $Id: mcp_notes.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class mcp_notes_info
{
	function module()
	{
		return array(
			'filename'	=> 'mcp_notes',
			'title'		=> 'MCP_NOTES',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'front'				=> array('title' => 'MCP_NOTES_FRONT', 'auth' => '', 'cat' => array('MCP_NOTES')),
				'user_notes'		=> array('title' => 'MCP_NOTES_USER', 'auth' => '', 'cat' => array('MCP_NOTES')),
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