<?php
/**
*
* @version   $Id: afterburner2.php 8235 2013-03-12 20:19:27Z karol $less.php 5135 2013-11-11 17:37:41Z karol $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*
*/


global $template, $user, $phpbb_root_path;

// Let's declare some less variables
$lessVariables = array(
           'headerstyle'         =>  $template->_rootref['AFTERBURNER2_HEADERSTYLE'],
           'footerstyle'         =>  $template->_rootref['AFTERBURNER2_FOOTERSTYLE'],
           'linkcolor'           =>  $template->_rootref['AFTERBURNER2_LINKCOLOR'],
           'accentcolor'         =>  $template->_rootref['AFTERBURNER2_ACCENTCOLOR'],
	);

// Menu
$css_path=rokbb_compile_less('menu.less','menu.css', array('menustyle'=> $template->_rootref['AFTERBURNER2_MENUSTYLE'], 'menuHoverColor'=>$template->_rootref['AFTERBURNER2_LINKCOLOR'], 'menuDropBack'=>$template->_rootref['AFTERBURNER2_ACCENTCOLOR'])); 
echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";


// Other
echo "<link href=\"".$phpbb_root_path."styles/".$user->theme['theme_path']."/theme/css/grid-responsive.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";
$css_path=rokbb_compile_less('bootstrap.less','bootstrap.css'); 
echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";

// Main Styles
$css_path=rokbb_compile_less('global.less','master.css', $lessVariables); 
echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";

// Forum
$css_path=rokbb_compile_less('forum.less','forum.css', $lessVariables); 
echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";

// Layout Modes
if ($template->_rootref['AFTERBURNER2_LAYOUT_MODE'] == 'responsive') {
	$css_path=rokbb_compile_less('mediaqueries.less','mediaqueries.css'); 
	echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";
	$css_path=rokbb_compile_less('menu-responsive.less','menu-responsive.css', array('menustyle'=> $template->_rootref['AFTERBURNER2_MENUSTYLE'], 'menuHoverColor'=>$template->_rootref['AFTERBURNER2_LINKCOLOR'], 'menuDropBack'=>$template->_rootref['AFTERBURNER2_ACCENTCOLOR'])); 
	echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";
}
if ($template->_rootref['AFTERBURNER2_LAYOUT_MODE'] == '1200fixed') {
	$css_path=rokbb_compile_less('1200fixed.less','1200fixed.css'); 
	echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";
}
if ($template->_rootref['AFTERBURNER2_LAYOUT_MODE'] == '960fixed') {
	$css_path=rokbb_compile_less('960fixed.less','960fixed.css'); 
	echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";
}

// Rtl stuff
if ($template->_rootref['S_CONTENT_DIRECTION'] == 'rtl') {
	$css_path=rokbb_compile_less('rtl.less','rtl.css'); 
	echo "<link href=\"".$css_path."\" rel=\"stylesheet\" type=\"text/css\" media=\"screen, projection\" />\n";
}

?>