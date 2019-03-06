<?php
function preset_style($value, $key = '',$preset_style_options = '')
{
  $preset_style_options .= '<option value="style1"' . (($value == "style1") ? ' selected="selected"' : '') . '>Style1</option>
  <option value="style2"' . (($value == "style2") ? ' selected="selected"' : '') . '>Style2</option>
  <option value="style3"' . (($value == "style3") ? ' selected="selected"' : '') . '>Style3</option>
  <option value="custom"' . (($value == "custom") ? ' selected="selected"' : '') . '>Custom</option>
  ';
  return $preset_style_options;
}

function style($value, $key = '',$style_options = '')
{
  $style_options .= '<option value="dark"' . (($value == "dark") ? ' selected="selected"' : '') . '>Dark</option>
  <option value="grey"' . (($value == "grey") ? ' selected="selected"' : '') . '>Grey</option>
  <option value="light"' . (($value == "light") ? ' selected="selected"' : '') . '>Light</option>
  ';
  return $style_options;
}

function afterburner2_layout_mode($value, $key = '',$afterburner2_layout_mode_options = '')
{
  $afterburner2_layout_mode_options .= '<option value="responsive"' . (($value == "responsive") ? ' selected="selected"' : '') . '>Responsive</option>
  <option value="1200fixed"' . (($value == "1200fixed") ? ' selected="selected"' : '') . '>1200px Fixed</option>
  <option value="960fixed"' . (($value == "960fixed") ? ' selected="selected"' : '') . '>960px Fixed</option>
  ';
  return $afterburner2_layout_mode_options;
}

function afterburner2_menuposition($value, $key = '',$afterburner2_mposition_options = '')
{
  $afterburner2_mposition_options .= '<option value="right"' . (($value == "right") ? ' selected="selected"' : '') . '>Right</option>
  <option value="left"' . (($value == "left") ? ' selected="selected"' : '') . '>Left</option>
  <option value="full"' . (($value == "full") ? ' selected="selected"' : '') . '>Full width</option>
  ';
  return $afterburner2_mposition_options;
}

function afterburner2_additional_links_position($value, $key = '',$afterburner2_additional_links_position_options = '')
{
  $afterburner2_additional_links_position_options .= '<option value="before"' . (($value == "before") ? ' selected="selected"' : '') . '>Before</option>
  <option value="after"' . (($value == "after") ? ' selected="selected"' : '') . '>After</option>
  ';
  return $afterburner2_additional_links_position_options;
}

function afterburner2_font($value, $key = '', $font_options='')
{
  global $config, $phpbb_adm_path;
  if (($config['enable_webfonts']) == true) {	
    $filename = $phpbb_adm_path."rokbb/libraries/gantry/fonts.php";
    if (file_exists($filename)) {
      include($filename);
    } else {
      $font_options .= '
      <option value="afterburner2"' . (($value == "afterburner2") ? ' selected="selected"' : '') . '>Update RokBB to Newest Release</option>
      ';
    }
    return $font_options;
  }
  else {
   $font_options .= '
      <option value="helvetica"' . (($value == "helvetica") ? ' selected="selected"' : '') . '>Helvetica</option>
   <option value="helveticaneue"' . (($value == "helveticaneue") ? ' selected="selected"' : '') . '>Helvetica Neue</option>
   <option value="geneva"' . (($value == "geneva") ? ' selected="selected"' : '') . '>Geneva</option>
   <option value="georgia"' . (($value == "georgia") ? ' selected="selected"' : '') . '>Georgia</option>
   <option value="lucida"' . (($value == "lucida") ? ' selected="selected"' : '') . '>Lucida</option>
   <option value="optima"' . (($value == "optima") ? ' selected="selected"' : '') . '>Optima</option>
   <option value="palatino"' . (($value == "palatino") ? ' selected="selected"' : '') . '>Palatino</option>
   <option value="trebuchet"' . (($value == "trebuchet") ? ' selected="selected"' : '') . '>Trebuchet</option>
   <option value="tahom"' . (($value == "tahom") ? ' selected="selected"' : '') . '>Tahoma</option>
   ';
   return $font_options;
 }
}

function afterburner2_search_position($value, $key = '',$afterburner2_search_position_options = '')
{
  $afterburner2_search_position_options .= '
  <option value="sidebar"' . (($value == "sidebar") ? ' selected="selected"' : '') . '>Sidebar</option>
  <option value="top"' . (($value == "top") ? ' selected="selected"' : '') . '>Top</option>
  <option value="none"' . (($value == "none") ? ' selected="selected"' : '') . '>None</option>
  ';
  return $afterburner2_search_position_options;
}
function afterburner2_login_position($value, $key = '',$afterburner2_login_position_options = '')
{
  $afterburner2_login_position_options .= '
  <option value="sidebar"' . (($value == "sidebar") ? ' selected="selected"' : '') . '>Sidebar</option>
  <option value="body"' . (($value == "body") ? ' selected="selected"' : '') . '>Body</option>
  <option value="none"' . (($value == "none") ? ' selected="selected"' : '') . '>None</option>
  ';
  return $afterburner2_login_position_options;
}

// Check for existing records and populate default values if needed
global $phpbb_root_path, $template, $config;
require($phpbb_root_path.'styles/afterburner2/default_values.php');
foreach ($default_values as $paramName => $paramValue) {
  if (!array_key_exists($paramName, $cfg_array)) {
    $cfg_array[$paramName] = $paramValue;
  }
}


// Afterburner2 configuration fields
if ($mode == 'afterburner2')
{
  $display_vars = array(
   'vars'	=> array(
     'legend1'			    => 'L_STYLESETTINGS',		
     'preset_style'       => array('lang' => 'PRESET_STYLE','validate' => 'string',  'type' => 'select', 'function' => 'preset_style', 'params' => array('{CONFIG_VALUE}'), 'explain' => false),

    'afterburner2_headerstyle' => array('lang' => 'Header Style',  'validate' => 'string', 'type' => 'select', 'function' => 'style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true), 
    'afterburner2_footerstyle' => array('lang' => 'Footer Style',  'validate' => 'string', 'type' => 'select', 'function' => 'style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true), 
    'afterburner2_menustyle' => array('lang' => 'Menu Style',  'validate' => 'string', 'type' => 'select', 'function' => 'style', 'params' => array('{CONFIG_VALUE}'), 'explain' => true), 
    'afterburner2_linkcolor' => array('lang' => 'Link Color','validate' => 'string', 'type' => 'text:7:255', 'explain' => true),
    'afterburner2_accentcolor' => array('lang' => 'Accent Color','validate' => 'string', 'type' => 'text:7:255', 'explain' => true),

     'enable_webfonts'		    => array('lang' => 'ENABLE_WEBFONTS','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'afterburner2_font_family'		    => array('lang' => 'FONTFACE',		'validate' => 'string',	'type' => 'select', 'function' => 'afterburner2_font', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),

     'legend2'			=> 'L_FEATURES',
     'afterburner2_posts_container_size'                 => array('lang' => 'POSTS_CONTAINER_SIZE',     'validate' => 'string', 'type' => 'text:10:255', 'explain' => true),
     'afterburner2_layout_mode'           => array('lang' => 'LAYOUT_MODE',  'validate' => 'string', 'type' => 'select', 'function' => 'afterburner2_layout_mode', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
     'afterburner2_menuposition'           => array('lang' => 'LAYOUT',  'validate' => 'string', 'type' => 'select', 'function' => 'afterburner2_menuposition', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
     'show_afterburner2user'			=> array('lang' => 'SHOW_USER_MENU','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'enable_afterburner2_logo'			=> array('lang' => 'ENABLE_LOGO','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'enable_afterburner2_forum_name'              => array('lang' => 'ENABLE_FORUM_NAME','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'show_afterburner2_date'			=> array('lang' => 'SHOW_DATE',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'show_afterburner2_totop_scroller'		=> array('lang' => 'SHOW_TOTOP_SCROLLER',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'show_afterburner2_reset'			=> array('lang' => 'SHOW_RESET',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'show_afterburner2_pathway'			=> array('lang' => 'SHOW_PATHWAY',	'validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'show_afterburner2_font'			=> array('lang' => 'SHOW_FONT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'show_afterburner2_copyright'		=> array('lang' => 'SHOW_COPYRIGHT','validate' => 'bool',	'type' => 'radio:yes_no', 	'explain' => true),
     'sitename'       => array('lang' => 'SITE_NAME',       'validate' => 'string', 'type' => 'text:40:255', 'explain' => false),
     'site_desc'        => array('lang' => 'SITE_DESC',       'validate' => 'string', 'type' => 'text:40:255', 'explain' => false),
     'afterburner2_logo_link'			=> array('lang' => 'LOGO_LINK',	'validate' => 'string',	'type' => 'text:20:255', 'explain' => true),
     'load_search'        => array('lang' => 'SHOW_SEARCH','validate' => 'bool',  'type' => 'radio:yes_no',   'explain' => true),
     'afterburner2_search_position' => array('lang' => 'SEARCH_POSITION', 'validate' => 'string', 'type' => 'select', 'function' => 'afterburner2_search_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
     'afterburner2_login_position' => array('lang' => 'LOGIN_POSITION', 'validate' => 'string', 'type' => 'select', 'function' => 'afterburner2_login_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
     'show_afterburner2_colorswitcher'   => array('lang' => 'SHOW_COLORSWITCHER','validate' => 'bool', 'type' => 'radio:yes_no',   'explain' => true),

     'legend3'             => 'L_MODULESPOSITIONS',
     'enable_afterburner2_top_modules'          => array('lang' => 'ENABLE_TOP_MODULES','validate' => 'bool', 'type' => 'radio:yes_no',   'explain' => true),
     'enable_afterburner2_header_modules'          => array('lang' => 'ENABLE_HEADER_MODULES','validate' => 'bool', 'type' => 'radio:yes_no',   'explain' => true),           
     'enable_afterburner2_side_modules'    => array('lang' => 'ENABLE_SIDE_MODULES','validate' => 'bool',  'type' => 'radio:yes_no',   'explain' => true),
     'enable_afterburner2_bottom_modules'  => array('lang' => 'ENABLE_BOTTOM_MODULES','validate' => 'bool',  'type' => 'radio:yes_no',   'explain' => true),
     'enable_afterburner2_footer_modules'  => array('lang' => 'ENABLE_FOOTER_MODULES','validate' => 'bool',  'type' => 'radio:yes_no',   'explain' => true),


     'legend4'             => 'L_MODULEVARIATIONS',
    // Who Is Online Module
     'afterburner2_online_list_style'             => array('lang' => 'ONLINE_LIST_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false,),
    // Birthday List Module
     'afterburner2_birthday_list_style'           => array('lang' => 'BIRTHDAY_LIST_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // Forum Permissions Module
     'afterburner2_forum_permissions_style'       => array('lang' => 'FORUM_PERMISSIONS_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // Statisitics Module
     'afterburner2_statistics_style'              => array('lang' => 'STATISTICS_STYLE', 'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // Main Menu Module
     'afterburner2_main_menu_style'               => array('lang' => 'MAIN_MENU_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // User Menu Module
     'afterburner2_user_menu_style'               => array('lang' => 'USER_MENU_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // Login Module
     'afterburner2_login_style'                   => array('lang' => 'LOGIN_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // Search Module
     'afterburner2_search_style'                  => array('lang' => 'SEARCH_STYLE', 'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),
    // Color Switcher
     'afterburner2_colorswitcher_style'         => array('lang' => 'COLORSWITCHER_STYLE',  'validate' => 'string', 'type' => 'text:10:255', 'explain' => false),

   //Modules
     'legend5'             => 'L_MODULESETTINGS',
     'afterburner2_new_topics'  => array('lang' => 'NEW_TOPICS', 'validate' => 'string', 'type' => 'text:10:255', 'explain' => true),
     'afterburner2_new_percolumn' => array('lang' => 'NEW_PERCOLUMN', 'validate' => 'string', 'type' => 'text:10:255', 'explain' => true),

    // Social
     'legend8'       => 'L_SOCIALICONS',
     'afterburner2_social'      => array('lang' => 'SHOW_SOCIAL','validate' => 'bool',  'type' => 'radio:yes_no',   'explain' => false),
     'fb_url'      => array('lang' => 'FB_URL',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'twitter_url'     => array('lang' => 'TWITTER_URL', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'google_url'     => array('lang' => 'GOOGLE_URL', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'rss_url'     => array('lang' => 'RSS_URL', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),

    // Contact Module
     'legend9'       => 'L_CONTACTMOD',
     'afterburner2_contact'  =>   array('lang' => 'SHOW_CONTACT','validate' => 'bool',  'type' => 'radio:yes_no',   'explain' => false),
     'afterburner2_contact_label'  => array('lang' => 'CONTACT_LABEL',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_contact_phone1' => array('lang' => 'CONTACT_PHONE1',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_contact_phone2' => array('lang' => 'CONTACT_PHONE2',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_contact_address1' => array('lang' => 'CONTACT_ADDRESS1',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_contact_address2' => array('lang' => 'CONTACT_ADDRESS2',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_contact_email'  => array('lang' => 'CONTACT_EMAIL',  'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),

     'legend10'       => 'L_MENU',
     'afterburner2_additional_links_position'   => array('lang' => 'MAIN_MENU_LINKS_POSITION','validate' => 'string',  'type' => 'select', 'function' => 'afterburner2_additional_links_position', 'params' => array('{CONFIG_VALUE}'), 'explain' => true),
     'afterburner2_additional_link1_desc'      => array('lang' => 'MAIN_MENU_LINK1_DESC', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link1_href'      => array('lang' => 'MAIN_MENU_LINK1_HREF', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link2_desc'      => array('lang' => 'MAIN_MENU_LINK2_DESC', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link2_href'      => array('lang' => 'MAIN_MENU_LINK2_HREF', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link3_desc'      => array('lang' => 'MAIN_MENU_LINK3_DESC', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link3_href'      => array('lang' => 'MAIN_MENU_LINK3_HREF', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link4_desc'      => array('lang' => 'MAIN_MENU_LINK4_DESC', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),
     'afterburner2_additional_link4_href'      => array('lang' => 'MAIN_MENU_LINK4_HREF', 'validate' => 'string', 'type' => 'text:20:255', 'explain' => true),

     )
);
}

?>