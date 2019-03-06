<?php
/**
 * @version   $Id: fonts.php 8236 2013-03-12 20:20:44Z karol $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

$fonts_path  =  $phpbb_adm_path."rokbb/libraries/gantry/google-fonts.json";
$optionsOutput     = json_decode(file_get_contents($fonts_path), true);
$items = $optionsOutput['items'];
$i = 0;
foreach ($items as $item) {
$i++;
$str = $item['family'];
$font_options .= '<option value="'.$str.'"'. (($value == $str) ? ' selected="selected"' : '') .'>'.$str.'</option>';
  }