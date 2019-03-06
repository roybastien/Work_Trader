<?php
/**
*
* @package ucp
* @version $Id: ucp_zebra.php 3434 2012-09-10 20:58:49Z btowles $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class ucp_zebra_info
{
	function module()
	{
		return array(
			'filename'	=> 'ucp_zebra',
			'title'		=> 'UCP_ZEBRA',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'friends'		=> array('title' => 'UCP_ZEBRA_FRIENDS', 'auth' => '', 'cat' => array('UCP_ZEBRA')),
				'foes'			=> array('title' => 'UCP_ZEBRA_FOES', 'auth' => '', 'cat' => array('UCP_ZEBRA')),
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