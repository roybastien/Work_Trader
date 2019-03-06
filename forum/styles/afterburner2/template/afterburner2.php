<?php
/**
*
* @version   $Id: afterburner2.php 8235 2013-03-12 20:19:27Z karol $afterburner2.php 5135 2013-11-11 17:37:41Z karol $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*
*/

// Don't allow direct access
if (!defined('IN_PHPBB')) exit;

global $config, $template, $phpbb_root_path;
require($phpbb_root_path."styles/afterburner2/default_values.php");
extract($default_values);

$template->assign_vars(array(
// RokBB3 variables
    'SHOW_AFTERBURNER2USER'		=> (isset($config['show_afterburner2user']) ? $config['show_afterburner2user'] : $show_afterburner2user),
    'AFTERBURNER2_MENUPOSITION'	=>  (isset($config['afterburner2_menuposition']) ? $config['afterburner2_menuposition'] : $afterburner2_menuposition),
    'AFTERBURNER2_LOGO_LINK'	=>  (isset($config['afterburner2_logo_link']) ? $config['afterburner2_logo_link'] : $afterburner2_logo_link),
    'ENABLE_AFTERBURNER2_LOGO'	=>          (isset($config['enable_afterburner2_logo']) ? $config['enable_afterburner2_logo'] : $enable_afterburner2_logo),
    'AFTERBURNER2_FIXED_HEADER_ENABLED'    =>          (isset($config['afterburner2_fixed_header_enabled']) ? $config['afterburner2_fixed_header_enabled'] : $afterburner2_fixed_header_enabled),
    'SHOW_AFTERBURNER2_COLORSWITCHER'=> (isset($config['show_afterburner2_colorswitcher']) ? $config['show_afterburner2_colorswitcher'] : $show_afterburner2_colorswitcher),
    'SHOW_AFTERBURNER2_DATE'		=> (isset($config['show_afterburner2_date']) ? $config['show_afterburner2_date'] : $show_afterburner2_date),
    'SHOW_AFTERBURNER2_TOTOP_SCROLLER' => (isset($config['show_afterburner2_totop_scroller']) ? $config['show_afterburner2_totop_scroller'] : $show_afterburner2_totop_scroller),
    'SHOW_AFTERBURNER2_RESET' => (isset($config['show_afterburner2_reset']) ? $config['show_afterburner2_reset'] : $show_afterburner2_reset),
    'SHOW_AFTERBURNER2_PATHWAY'		=> (isset($config['show_afterburner2_pathway']) ? $config['show_afterburner2_pathway'] : $show_afterburner2_pathway),
    'SHOW_AFTERBURNER2_FONT'		=> (isset($config['show_afterburner2_font']) ? $config['show_afterburner2_font'] : $show_afterburner2_font),
    'SHOW_AFTERBURNER2_COPYRIGHT'	=> (isset($config['show_afterburner2_copyright']) ? $config['show_afterburner2_copyright'] : $show_afterburner2_copyright),
    'ENABLE_AFTERBURNER2_FONTSPANS'   => (isset($config['enable_afterburner2_fontspans']) ? $config['enable_afterburner2_fontspans'] : $enable_afterburner2_fontspans),   
    'ENABLE_AFTERBURNER2_SIDE_MODULES' => (isset($config['enable_afterburner2_side_modules']) ? $config['enable_afterburner2_side_modules'] : $enable_afterburner2_side_modules),
    'ENABLE_AFTERBURNER2_MAINBOTTOM_MODULES' => (isset($config['enable_afterburner2_mainbottom_modules']) ? $config['enable_afterburner2_mainbottom_modules'] : $enable_afterburner2_mainbottom_modules),
    'ENABLE_AFTERBURNER2_TOP_MODULES' => (isset($config['enable_afterburner2_top_modules']) ? $config['enable_afterburner2_top_modules'] : $enable_afterburner2_top_modules),
    'ENABLE_AFTERBURNER2_HEADER_MODULES' => (isset($config['enable_afterburner2_header_modules']) ? $config['enable_afterburner2_header_modules'] : $enable_afterburner2_header_modules),
    'ENABLE_AFTERBURNER2_FULLWIDTH_MODULES' => (isset($config['enable_afterburner2_fullwidth_modules']) ? $config['enable_afterburner2_fullwidth_modules'] : $enable_afterburner2_fullwidth_modules),
    'ENABLE_AFTERBURNER2_MAINTOP_MODULES' => (isset($config['enable_afterburner2_maintop_modules']) ? $config['enable_afterburner2_maintop_modules'] : $enable_afterburner2_maintop_modules),
    'ENABLE_AFTERBURNER2_UTILITY_MODULES' => (isset($config['enable_afterburner2_utility_modules']) ? $config['enable_afterburner2_utility_modules'] : $enable_afterburner2_utility_modules),
    'ENABLE_AFTERBURNER2_FEATURE_MODULES' => (isset($config['enable_afterburner2_feature_modules']) ? $config['enable_afterburner2_feature_modules'] : $enable_afterburner2_feature_modules),
    'ENABLE_AFTERBURNER2_FOOTER_MODULES' => (isset($config['enable_afterburner2_footer_modules']) ? $config['enable_afterburner2_footer_modules'] : $enable_afterburner2_footer_modules),
    'ENABLE_AFTERBURNER2_BOTTOM_MODULES' => (isset($config['enable_afterburner2_bottom_modules']) ? $config['enable_afterburner2_bottom_modules'] : $enable_afterburner2_bottom_modules),
    'ENABLE_AFTERBURNER2_SHOWCASE_MODULES' => (isset($config['enable_afterburner2_showcase_modules']) ? $config['enable_afterburner2_showcase_modules'] : $enable_afterburner2_showcase_modules),
    'ENABLE_AFTERBURNER2_EXPANDEDTOP_MODULES' => (isset($config['enable_afterburner2_expandedtop_modules']) ? $config['enable_afterburner2_expandedtop_modules'] : $enable_afterburner2_expandedtop_modules),
    'ENABLE_AFTERBURNER2_EXPANDEDBOTTOM_MODULES' => (isset($config['enable_afterburner2_expandedbottom_modules']) ? $config['enable_afterburner2_expandedbottom_modules'] : $enable_afterburner2_expandedbottom_modules),
    'ENABLE_AFTERBURNER2_EXTENSION_MODULES' => (isset($config['enable_afterburner2_extension_modules']) ? $config['enable_afterburner2_extension_modules'] : $enable_afterburner2_extension_modules),
    'ENABLE_AFTERBURNER2_TOP_PANEL' => (isset($config['enable_afterburner2_top_panel']) ? $config['enable_afterburner2_top_panel'] : $enable_afterburner2_top_panel),  
    'AFTERBURNER2_POSTS_CONTAINER_SIZE'  =>  (isset($config['afterburner2_posts_container_size']) ? $config['afterburner2_posts_container_size'] : $afterburner2_posts_container_size),
    'ENABLE_WEBFONTS' => (isset($config['enable_webfonts']) ? $config['enable_webfonts'] : $enable_webfonts),
    'LOAD_TRANSITION' => (isset($config['load_transition']) ? $config['load_transition'] : $load_transition),
    'AFTERBURNER2_LAYOUT_MODE'    =>  (isset($config['afterburner2_layout_mode']) ? $config['afterburner2_layout_mode'] : $afterburner2_layout_mode),
    'AFTERBURNER2_LOGIN_POSITION'  =>  (isset($config['afterburner2_login_position']) ? $config['afterburner2_login_position'] : $afterburner2_login_position),


           //Tabs 
    'AFTERBURNER2_TABS'		        => (isset($config['afterburner2_tabs']) ? $config['afterburner2_tabs'] : $afterburner2_tabs),
    'AFTERBURNER2_TABS_AUTOPLAY'		=>  (isset($config['afterburner2_tabs_autoplay']) ? $config['afterburner2_tabs_autoplay'] : $afterburner2_tabs_autoplay),
    'AFTERBURNER2_TABS_DELAY'		        =>  (isset($config['afterburner2_tabs_delay']) ? $config['afterburner2_tabs_delay'] : $afterburner2_tabs_delay),
    'AFTERBURNER2_TABS_ANIMATION'	        =>  (isset($config['afterburner2_tabs_animation']) ? $config['afterburner2_tabs_animation'] : $afterburner2_tabs_animation),
    'AFTERBURNER2_TABS_POSITION'  =>  (isset($config['afterburner2_tabs_position']) ? $config['afterburner2_tabs_position'] : $afterburner2_tabs_position),
          // End Tabs

          //Headlines
    'AFTERBURNER2_HEADLINES' => (isset($config['afterburner2_headlines']) ? $config['afterburner2_headlines'] : $afterburner2_headlines),
    'AFTERBURNER2_HEADLINES_LABEL_TEXT' => (isset($config['afterburner2_headlines_label_text']) ? $config['afterburner2_headlines_label_text'] : $afterburner2_headlines_label_text),
    'AFTERBURNER2_HEADLINES_NAVIGATION' => (isset($config['afterburner2_headlines_navigation']) ? $config['afterburner2_headlines_navigation'] : $afterburner2_headlines_navigation),
    'AFTERBURNER2_HEADLINES_AUTOPLAY' => (isset($config['afterburner2_headlines_autoplay']) ? $config['afterburner2_headlines_autoplay'] : $afterburner2_headlines_autoplay),
    'AFTERBURNER2_HEADLINES_AUTOPLAY_DELAY' =>(isset($config['afterburner2_headlines_autoplay_delay']) ? $config['afterburner2_headlines_autoplay_delay'] : $afterburner2_headlines_autoplay_delay),
    'AFTERBURNER2_HEADLINES_ANIMATION' => (isset($config['afterburner2_headlines_animation']) ? $config['afterburner2_headlines_animation'] : $afterburner2_headlines_animation),
        // End Headlines

    'AFTERBURNER2_ONLINE_LIST_STYLE'             =>  (isset($config['afterburner2_online_list_style']) ? $config['afterburner2_online_list_style'] : $afterburner2_online_list_style),
    'AFTERBURNER2_BIRTHDAY_LIST_STYLE'           =>  (isset($config['afterburner2_birthday_list_style']) ? $config['afterburner2_birthday_list_style'] : $afterburner2_birthday_list_style),
    'AFTERBURNER2_FORUM_PERMISSIONS_STYLE'       =>  (isset($config['afterburner2_forum_permissions_style']) ? $config['afterburner2_forum_permissions_style'] : $afterburner2_forum_permissions_style),
    'AFTERBURNER2_STATISTICS_STYLE'              =>  (isset($config['afterburner2_statistics_style']) ? $config['afterburner2_statistics_style'] : $afterburner2_statistics_style),
    'AFTERBURNER2_MAIN_MENU_STYLE'               =>  (isset($config['afterburner2_main_menu_style']) ? $config['afterburner2_main_menu_style'] : $afterburner2_main_menu_style),
    'AFTERBURNER2_USER_MENU_STYLE'               =>  (isset($config['afterburner2_user_menu_style']) ? $config['afterburner2_user_menu_style'] : $afterburner2_user_menu_style),
    'AFTERBURNER2_LOGIN_STYLE'                   =>  (isset($config['afterburner2_login_style']) ? $config['afterburner2_login_style'] : $afterburner2_login_style),
    'AFTERBURNER2_SEARCH_STYLE'                  =>  (isset($config['afterburner2_search_style']) ? $config['afterburner2_search_style'] : $afterburner2_search_style),
    'AFTERBURNER2_NEWPOSTS_STYLE'                =>  (isset($config['afterburner2_newposts_style']) ? $config['afterburner2_newposts_style'] : $afterburner2_newposts_style),
    'AFTERBURNER2_UNANSWEREDPOSTS_STYLE'         =>  (isset($config['afterburner2_unansweredposts_style']) ? $config['afterburner2_unansweredposts_style'] : $afterburner2_unansweredposts_style),
    'AFTERBURNER2_CATEGORY_STYLE'         =>  (isset($config['afterburner2_category_style']) ? $config['afterburner2_category_style'] : $afterburner2_category_style),
    'AFTERBURNER2_TOPICS_STYLE'         =>  (isset($config['afterburner2_topics_style']) ? $config['afterburner2_topics_style'] : $afterburner2_topics_style),
    'AFTERBURNER2_POST_STYLE'         =>  (isset($config['afterburner2_post_style']) ? $config['afterburner2_post_style'] : $afterburner2_post_style),
    'AFTERBURNER2_COLORSWITCHER_STYLE'         =>  (isset($config['afterburner2_colorswitcher_style']) ? $config['afterburner2_colorswitcher_style'] : $afterburner2_colorswitcher_style),
    'AFTERBURNER2_COLORSWITCHER_POSITION'         =>  (isset($config['afterburner2_colorswitcher_position']) ? $config['afterburner2_colorswitcher_position'] : $afterburner2_colorswitcher_position),
    'AFTERBURNER2_SEARCH_POSITION'         =>  (isset($config['afterburner2_search_position']) ? $config['afterburner2_search_position'] : $afterburner2_search_position),

    'AFTERBURNER2_FONTFACE'                      =>  (isset($config['afterburner2_font_family']) ? $config['afterburner2_font_family'] : $afterburner2_font_family),
    'AFTERBURNER2_FONTSIZE'                      =>  (isset($config['afterburner2_fontsize']) ? $config['afterburner2_fontsize'] : $afterburner2_fontsize),
    'ENABLE_AFTERBURNER2_FORUM_NAME'             =>  (isset($config['enable_afterburner2_forum_name']) ? $config['enable_afterburner2_forum_name'] : $enable_afterburner2_forum_name),

            //Follow menu   
    'RSS_URL'	=>  (isset($config['rss_url']) ? $config['rss_url'] : $rss_url),
    'TWITTER_URL'	=>  (isset($config['twitter_url']) ? $config['twitter_url'] : $twitter_url),
    'FB_URL'	=>  (isset($config['fb_url']) ? $config['fb_url'] : $fb_url),
    'GOOGLE_URL'	=> (isset($config['google_url']) ? $config['google_url'] : $google_url),
    'AFTERBURNER2_SOCIAL'       =>  (isset($config['afterburner2_social']) ? $config['afterburner2_social'] : $afterburner2_social),

            //Contact Module
    'AFTERBURNER2_CONTACT'  =>   (isset($config['afterburner2_contact']) ? $config['afterburner2_contact'] : $afterburner2_contact),
    'AFTERBURNER2_CONTACT_LABEL'    =>  (isset($config['afterburner2_contact_label']) ? $config['afterburner2_contact_label'] : $afterburner2_contact_label),
    'AFTERBURNER2_CONTACT_PHONE1'   =>  (isset($config['afterburner2_contact_phone1']) ? $config['afterburner2_contact_phone1'] : $afterburner2_contact_phone1),
    'AFTERBURNER2_CONTACT_PHONE2'   =>  (isset($config['afterburner2_contact_phone2']) ? $config['afterburner2_contact_phone2'] : $afterburner2_contact_phone2),
    'AFTERBURNER2_CONTACT_ADDRESS1' =>  (isset($config['afterburner2_contact_address1']) ? $config['afterburner2_contact_address1'] : $afterburner2_contact_address1),
    'AFTERBURNER2_CONTACT_ADDRESS2' =>  (isset($config['afterburner2_contact_address2']) ? $config['afterburner2_contact_address2'] : $afterburner2_contact_address2),
    'AFTERBURNER2_CONTACT_EMAIL'    =>  (isset($config['afterburner2_contact_email']) ? $config['afterburner2_contact_email'] : $afterburner2_contact_email),

            //Menu code    
    'AFTERBURNER2'	=>  (isset($config['afterburner2_bmenu']) ? $config['afterburner2_bmenu'] : $afterburner2_bmenu),
    'AFTERBURNER2_LINK1_HREF'	=>  (isset($config['afterburner2_link1_href']) ? $config['afterburner2_link1_href'] : $afterburner2_link1_href),
    'AFTERBURNER2_LINK1_DESC'	=>  (isset($config['afterburner2_link1_desc']) ? $config['afterburner2_link1_desc'] : $afterburner2_link1_desc),
    'AFTERBURNER2_LINK2_HREF'	=>  (isset($config['afterburner2_link2_href']) ? $config['afterburner2_link2_href'] : $afterburner2_link2_href),
    'AFTERBURNER2_LINK2_DESC'	=>  (isset($config['afterburner2_link2_desc']) ? $config['afterburner2_link2_desc'] : $afterburner2_link2_desc),
    'AFTERBURNER2_LINK3_HREF'	=>  (isset($config['afterburner2_link3_href']) ? $config['afterburner2_link3_href'] : $afterburner2_link3_href),
    'AFTERBURNER2_LINK3_DESC'	=>  (isset($config['afterburner2_link3_desc']) ? $config['afterburner2_link3_desc'] : $afterburner2_link3_desc),
    'AFTERBURNER2_LINK4_HREF'	=>  (isset($config['afterburner2_link4_href']) ? $config['afterburner2_link4_href'] : $afterburner2_link4_href),
    'AFTERBURNER2_LINK4_DESC'	=>  (isset($config['afterburner2_link4_desc']) ? $config['afterburner2_link4_desc'] : $afterburner2_link4_desc),
    'AFTERBURNER2_LINK5_HREF'	=>  (isset($config['afterburner2_link5_href']) ? $config['afterburner2_link5_href'] : $afterburner2_link5_href),
    'AFTERBURNER2_LINK5_DESC'	=>  (isset($config['afterburner2_link5_desc']) ? $config['afterburner2_link5_desc'] : $afterburner2_link5_desc),
    'AFTERBURNER2_LINK6_HREF'	=>  (isset($config['afterburner2_link6_href']) ? $config['afterburner2_link6_href'] : $afterburner2_link6_href),
    'AFTERBURNER2_LINK6_DESC'	=>  (isset($config['afterburner2_link6_desc']) ? $config['afterburner2_link6_desc'] : $afterburner2_link6_desc),
    'AFTERBURNER2_LINK7_HREF'	=>  (isset($config['afterburner2_link7_href']) ? $config['afterburner2_link7_href'] : $afterburner2_link7_href),
    'AFTERBURNER2_LINK7_DESC'	=>  (isset($config['afterburner2_link7_desc']) ? $config['afterburner2_link7_desc'] : $afterburner2_link7_desc),
    'AFTERBURNER2_LINK8_HREF'	=>  (isset($config['afterburner2_link8_href']) ? $config['afterburner2_link8_href'] : $afterburner2_link8_href),
    'AFTERBURNER2_LINK8_DESC'	=>  (isset($config['afterburner2_link8_desc']) ? $config['afterburner2_link8_desc'] : $afterburner2_link8_desc),

                //Menu code    
    'AFTERBURNER2_ADDITIONAL_LINKS_POSITION' =>  (isset($config['afterburner2_additional_links_position']) ? $config['afterburner2_additional_links_position'] : $afterburner2_additional_links_position),
    'AFTERBURNER2_ADDITIONAL_LINK1_HREF'  =>  (isset($config['afterburner2_additional_link1_href']) ? $config['afterburner2_additional_link1_href'] : $afterburner2_additional_link1_href),
    'AFTERBURNER2_ADDITIONAL_LINK1_DESC'  =>  (isset($config['afterburner2_additional_link1_desc']) ? $config['afterburner2_additional_link1_desc'] : $afterburner2_additional_link1_desc),
    'AFTERBURNER2_ADDITIONAL_LINK2_HREF'  =>  (isset($config['afterburner2_additional_link2_href']) ? $config['afterburner2_additional_link2_href'] : $afterburner2_additional_link2_href),
    'AFTERBURNER2_ADDITIONAL_LINK2_DESC'  =>  (isset($config['afterburner2_additional_link2_desc']) ? $config['afterburner2_additional_link2_desc'] : $afterburner2_additional_link2_desc),
    'AFTERBURNER2_ADDITIONAL_LINK3_HREF'  =>  (isset($config['afterburner2_additional_link3_href']) ? $config['afterburner2_additional_link3_href'] : $afterburner2_additional_link3_href),
    'AFTERBURNER2_ADDITIONAL_LINK3_DESC'  =>  (isset($config['afterburner2_additional_link3_desc']) ? $config['afterburner2_additional_link3_desc'] : $afterburner2_additional_link3_desc),
    'AFTERBURNER2_ADDITIONAL_LINK4_HREF'  =>  (isset($config['afterburner2_additional_link4_href']) ? $config['afterburner2_additional_link4_href'] : $afterburner2_additional_link4_href),
    'AFTERBURNER2_ADDITIONAL_LINK4_DESC'  =>  (isset($config['afterburner2_additional_link4_desc']) ? $config['afterburner2_additional_link4_desc'] : $afterburner2_additional_link4_desc),

                //Custom Backgrounds
    'AFTERBURNER2_SHOWCASE_CUSTOMSHOWCASE' =>  (isset($config['afterburner2_showcase_customshowcase']) ? $config['afterburner2_showcase_customshowcase'] : $afterburner2_showcase_customshowcase),
    'AFTERBURNER2_UTILITY_CUSTOMFEATURE' =>  (isset($config['afterburner2_utility_customfeature']) ? $config['afterburner2_utility_customfeature'] : $afterburner2_utility_customfeature),
    'AFTERBURNER2_FOOTER_CUSTOMFEATURE' =>  (isset($config['afterburner2_footer_customfeature']) ? $config['afterburner2_footer_customfeature'] : $afterburner2_footer_customfeature),
                //Unanswered
    'AFTERBURNER2_UNANSWERED_TOPICS'    =>  (isset($config['afterburner2_unanswered_topics']) ? $config['afterburner2_unanswered_topics'] : $afterburner2_unanswered_topics),
    'AFTERBURNER2_UNANSWERED_PERCOLUMN'    =>  (isset($config['afterburner2_unanswered_percolumn']) ? $config['afterburner2_unanswered_percolumn'] : $afterburner2_unanswered_percolumn), 
                //New
    'AFTERBURNER2_NEW_TOPICS'    =>  (isset($config['afterburner2_new_topics']) ? $config['afterburner2_new_topics'] : $afterburner2_new_topics),
    'AFTERBURNER2_NEW_PERCOLUMN'    =>  (isset($config['afterburner2_new_percolumn']) ? $config['afterburner2_new_percolumn'] : $afterburner2_new_percolumn), 
    ));

function getIconClass($modsfx){
    $class = ""; 
    $parts = explode(" ", $modsfx); 
    foreach($parts as $part){
        if(strpos($part, "icon-")!==false){
            $class = " ".$part;
        }
    } 
    return $class;
}

?>
