<?php
global $config, $template, $user;

if (
    !isset($config['afterburner2_headerstyle']) ||
    !isset($config['afterburner2_footerstyle']) ||
    !isset($config['afterburner2_menustyle']) ||
    !isset($config['afterburner2_linkcolor']) ||
    !isset($config['afterburner2_accentcolor']) ||
    !isset($config['afterburner2_font_family'])
    ) {
  $template->assign_vars(array(               
    'AFTERBURNER2_HEADERSTYLE' => 'dark',
    'AFTERBURNER2_FOOTERSTYLE' => 'dark',
    'AFTERBURNER2_MENUSTYLE' => 'light',
    'AFTERBURNER2_LINKCOLOR' => '#ED6F6D',
    'AFTERBURNER2_ACCENTCOLOR' => '#ED6F6D',
    'AFTERBURNER2_FONT_FAMILY' => 'helvetica'
    ));
}
else {
  $template->assign_vars(array(               
    'AFTERBURNER2_HEADERSTYLE' => "{$config['afterburner2_headerstyle']}",
    'AFTERBURNER2_FOOTERSTYLE' => "{$config['afterburner2_footerstyle']}",
    'AFTERBURNER2_MENUSTYLE' => "{$config['afterburner2_menustyle']}",
    'AFTERBURNER2_LINKCOLOR' => "{$config['afterburner2_linkcolor']}",
    'AFTERBURNER2_ACCENTCOLOR' => "{$config['afterburner2_accentcolor']}",
    'AFTERBURNER2_FONT_FAMILY' => "{$config['afterburner2_font_family']}",
    ));
} 

$easy_theme = (isset($_GET['ntheme']) ? $_GET['ntheme'] : null);
$current_theme = $user->theme['theme_path'];
$color_variation = '';

if(!isset($_COOKIE[$current_theme."-tstyle"]) && isset($config['afterburner2_style'])) {
    $color_variation = $config['afterburner2_style'];
}
if(!empty($easy_theme)) {
    ob_start();
    setcookie($current_theme."-tstyle", $easy_theme, time()+31536000); /* Expires in a year */
    header("Location: ". $_SERVER['PHP_SELF']);
    exit;
    ob_end_flush();
}
if(isset($_COOKIE[$current_theme."-tstyle"])) {
    $color_variation = $_COOKIE[$current_theme."-tstyle"];
}

switch (isset($_COOKIE[$current_theme."-tstyle"]) ? $_COOKIE[$current_theme."-tstyle"] : null) {
  case 'style1':
  $color_variation = "style1";
  $template->assign_vars(array(                  
    'AFTERBURNER2_HEADERSTYLE' => 'dark',
    'AFTERBURNER2_FOOTERSTYLE' => 'dark',
    'AFTERBURNER2_MENUSTYLE' => 'light',
    'AFTERBURNER2_LINKCOLOR' => '#ED6F6D',
    'AFTERBURNER2_ACCENTCOLOR' => '#ED6F6D',
    'AFTERBURNER2_FONT_FAMILY' => 'helvetica'
    ));
  break;  
  case 'style2':
  $color_variation = "style2";
  $template->assign_vars(array(               
    'AFTERBURNER2_HEADERSTYLE' => 'grey',
    'AFTERBURNER2_FOOTERSTYLE' => 'grey',
    'AFTERBURNER2_MENUSTYLE' => 'grey',
    'AFTERBURNER2_LINKCOLOR' => '#ED6F6D',
    'AFTERBURNER2_ACCENTCOLOR' => '#ED6F6D',
    'AFTERBURNER2_FONT_FAMILY' => 'helvetica'

    ));
  break;
  case 'style3':
  $color_variation = "style3";
  $template->assign_vars(array(               
    'AFTERBURNER2_HEADERSTYLE' => 'light',
    'AFTERBURNER2_FOOTERSTYLE' => 'light',
    'AFTERBURNER2_MENUSTYLE' => 'dark',
    'AFTERBURNER2_LINKCOLOR' => '#ED6F6D',
    'AFTERBURNER2_ACCENTCOLOR' => '#ED6F6D',
    'AFTERBURNER2_FONT_FAMILY' => 'helvetica'
    ));
  break;
}

$template->assign_vars(array(
    'CURRENT_STYLE' =>  $color_variation,
    )
);
$delete_cookies = (isset($_GET['delete_cookies']) ? $_GET['delete_cookies'] : null);
if($delete_cookies == 'true') {
    ob_start();
    setcookie($current_theme."-tstyle", "", time()-31536000);
    header("Location: ". $_SERVER['PHP_SELF']);
    exit;
    ob_end_flush();

}
?>