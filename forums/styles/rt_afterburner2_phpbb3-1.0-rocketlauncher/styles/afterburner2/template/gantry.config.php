<?php
/**
 * @version   $Id: gantry.config.php 9817 2013-04-29 15:27:12Z arifin $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

$gantry_presets = array(
    'presets' => array(
        'preset1' => array(
            'name' => 'Preset1',
            'headerstyle' => 'dark',
            'footerstyle' => 'dark',
            'menustyle' => 'light',
            'linkcolor' => '#ED6F6D',
            'accentcolor' => '#ED6F6D',
            'font-family' => 's:helvetica'
        ),    
        'preset2' => array(
            'name' => 'Preset2',
            'headerstyle' => 'grey',
            'footerstyle' => 'grey',
            'menustyle' => 'grey',
            'linkcolor' => '#ED6F6D',
            'accentcolor' => '#ED6F6D',
            'font-family' => 's:helvetica'
        ),
        'preset3' => array(
            'name' => 'Preset3',
            'headerstyle' => 'light',
            'footerstyle' => 'light',
            'menustyle' => 'dark',
            'linkcolor' => '#ED6F6D',
            'accentcolor' => '#ED6F6D',
            'font-family' => 's:helvetica'
        )
    )
);

 for ($i = 1; ; $i++) {
    if ($i > 3) {
        break;
    }
    $styles_list_beginning = "stylesList.set('style".$i."', [";
    $styles_list_beginning = str_replace(" ", "", $styles_list_beginning);
    echo $styles_list_beginning; 
    foreach ($gantry_presets['presets']['preset'.$i] as $key => $value) {
 
    echo "'".$value."', ";
    }
    $styles_list_ending = "]);";
    $styles_list_ending = str_replace(" ", "", $styles_list_ending);
    echo $styles_list_ending; 
}
?>
