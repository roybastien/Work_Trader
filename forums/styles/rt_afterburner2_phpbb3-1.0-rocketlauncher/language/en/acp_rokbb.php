<?php
/** 
* rokbb [English]
* @package language
* @version $Id: acp_rokbb.php 3588 2012-09-14 18:52:52Z karol $
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*/		
/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
	
}
						
// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
		'TITLE'	=> 'Global Configuration',
		'TITLE_EXPLAIN'	=> 'Here you can set various options for your RocketTheme Phpbb3 style.',
		'ALLOW_JMENU'	=> 'Show Joomla menu',
		'ALLOW_JMENU_EXPLAIN'	=> 'Show Joomla menu instead of phpbb3 menu at the top of the page.',
		'JOOMLA_MENU_PATH' => 'Joomla menu path',
		'JOOMLA_MENU_PATH_EXPLAIN' => 'Relative path to directory of your Joomla installation.Remember about ending slash.',
		'ALLOW_JMENU'	=> 'Show Joomla menu',
		'JMENU_GUEST_NAME' => 'Guest Menu Filename',
		'JMENU_REG_NAME' => 'Registered Menu Filename',
		'JMENU_HEADER_NAME' => 'Headers Filename',
		'OTHER_CONFIGURATION'	=> 'Global configuration',
		'JOOMLA_CONFIGURATION'	=> 'Joomla configuration',	
		'ROKBOX_CONFIGURATION' => 'RokBox configuration',
		'ROKBOX'		=> 'Enable RokBox',
		'ROKBOX_EXPLAIN'	=> 'Enable or disable RokBox support in phpBB3.',
		'ROKBOX_THEME'		=> 'Preset Themes',
		'ROKBOX_THEME_EXPLAIN'	=> 'Choose from Presets Themes or type your own custom theme name.Preset themes are: <strong>dark</strong>, <strong>light</strong> and <strong>mynxx</strong>',
		'AVATAR_POSITION'	=> 'Avatar position',
		'AVATAR_POSITION_EXPLAIN' => 'Set avatar and user profile position.',
		'STYLE_CONFIGURATION' => 'Style Configuration',

		'LESS_CONFIGURATION'		=> 'Less Compiler',
		'LESS_COMPRESSION'		=> 'CSS Compression',
		'LESS_COMPRESSION_EXPLAIN'		=> 'Enable or disable whitespace compression for the resulting css file.',
		'LESS_DEBUG'	=> 'Debug Header',
		'LESS_DEBUG_EXPLAIN'	=> 'Show info about the less compile in the header of the resulting CSS file.',


	));	

global $phpbb_root_path, $mode;
if ($mode !== "global_conf") {
include($phpbb_root_path."styles".DIRECTORY_SEPARATOR.$mode.DIRECTORY_SEPARATOR."language/en".DIRECTORY_SEPARATOR."common.php");
}


?>