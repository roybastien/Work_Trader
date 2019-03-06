<?php
/**
 *
 * @package   acp
 * @version   $Id: acp_rokbb.php 3558 2012-09-13 09:23:35Z karol $
 * @copyright (c) 2007 phpBB Group
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @package module_install
 */


class acp_rokbb_info
{
	function module()
	{
		global $phpbb_root_path;
		$output = array(
			'filename'     => 'acp_rokbb',
			'title'        => 'RokBB',
			'version'      => '5.0.0',
			'modes'        => array(
				'global_conf'        => array(
					'title' => 'Global configuration',
					'auth'  => 'acl_a_group',
					'cat'   => array('RocketTheme Styles')
				)
			),
		);

		$info_files  = array();
		$styles_path = $phpbb_root_path . DIRECTORY_SEPARATOR . 'styles';
		$dh          = opendir($styles_path);
		while (false !== ($filename = readdir($dh))) {
			$style_path = $styles_path . DIRECTORY_SEPARATOR . $filename;
			$info_path  = $style_path . DIRECTORY_SEPARATOR . 'rokbb_info.json';
			if ($filename !== '.' && $filename !== '..' && is_dir($style_path) && is_file($info_path)) {
				$info_files[] = $info_path;
			}
		}
		foreach ($info_files as $info_file) {
			$template_infos     = json_decode(file_get_contents($info_file), true);
			foreach($template_infos as $template_key => $template_info){
				$output['modes'][$template_key] = $template_info;
			}
		}
		return $output;
	}

	function install()
	{
	}

	function uninstall()
	{
	}

}

?>