<?php
/**
 *
* @version   $Id: rokbb.php 5936 2012-12-14 08:24:00Z karol $
* @author    RocketTheme http://www.rockettheme.com
* @copyright Copyright (C) 2007 - ${copyright_year} RocketTheme, LLC
* @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 */

// Don't allow direct access
if (!defined('IN_PHPBB')) exit;

global $config, $template, $phpbb_root_path;

$file_path = '';
function rok_isIe($version = false)
{

	$agent = $_SERVER['HTTP_USER_AGENT'];

	$found = strpos($agent, 'MSIE ');
	if ($found) {
		if ($version) {
			$ieversion = substr(substr($agent, $found + 5), 0, 1);
			if ($ieversion == $version) return true; else return false;
		} else {
			return true;
		}

	} else {
		return false;
	}
	if (stristr($agent, 'msie' . $ieversion)) return true;
	return false;
}

if (rok_isIe(6)) {
	$template->assign_vars(array(
	                            'IE_VERSION'    => "6",
	                       ));
}
if (rok_isIe(7)) {
	$template->assign_vars(array(
	                            'IE_VERSION'    => "7",
	                       ));
}
if (rok_isIe(8)) {
	$template->assign_vars(array(
	                            'IE_VERSION'    => "8",
	                       ));
}
if (rok_isIe(9)) {
	$template->assign_vars(array(
	                            'IE_VERSION'    => "9",
	                       ));
}
if (rok_isIe(10)) {
	$template->assign_vars(array(
	                            'IE_VERSION'    => "10",
	                       ));
}


global $db, $config, $template, $SID, $_SID, $user, $auth, $phpEx, $phpbb_root_path;

$joomla = get_include_contents($phpbb_root_path . "{$config['jmenu_path']}" . "{$config['jmenu_guest_name']}");
function get_include_contents($filename)
{
	if (is_file($filename)) {
		ob_start();
		include $filename;
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
	return false;
}

$joomla_reg = get_include_contents($phpbb_root_path . "{$config['jmenu_path']}" . "{$config['jmenu_reg_name']}");
function get_include_registered_contents($filename)
{
	if (is_file($filename)) {
		ob_start();
		include $filename;
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
	return false;
}

$joomla_header = get_include_contents($phpbb_root_path . "{$config['jmenu_path']}" . "{$config['jmenu_header_name']}");
function get_include_header_contents($filename)
{
	if (is_file($filename)) {
		ob_start();
		include $filename;
		$contents = ob_get_contents();
		ob_end_clean();
		return $contents;
	}
	return false;
}


// Menu Navigation
// Get current short script name, "i" and "mode" URL parameter to determine detailed menu location
$menu_script_name = str_replace('.' . $phpEx, '', $user->page['page_name']);
$menu_url_i       = '';
$menu_url_mode    = '';
if (isset($_GET["i"])) $menu_url_i = ($_GET['i']);
if (isset($_GET["mode"])) $menu_url_mode = ($_GET['mode']);

// Set class for style state (blank single space needed)
$style_class_name = ' class="active"';

// Assign null defaults for menu styles
$style_U_INDEX        = '';
$style_U_MCP          = '';
$style_U_PROFILE      = '';
$style_U_PRIVATEMSGS  = '';
$style_U_FAQ          = '';
$style_U_MEMBERLIST   = '';
$style_U_REGISTER     = '';
$style_U_LOGIN_LOGOUT = '';

// Determine menu location for style state

switch ($menu_script_name) {
	case "index":
		$style_U_INDEX = $style_class_name;
		break;
	case "mcp":
		$style_U_MCP = $style_class_name;
		break;
	case "ucp":
		switch ($menu_url_i) {
			default:
				$style_U_PROFILE = $style_class_name;
				break;
			case "pm":
				$style_U_PRIVATEMSGS = $style_class_name;
				break;
		}
		switch ($menu_url_mode) {
			case "register":
				$style_U_REGISTER = $style_class_name;
				break;
			case "login":
				$style_U_LOGIN_LOGOUT = $style_class_name;
				break;
		}
		break;
	case "faq":
		$style_U_FAQ = $style_class_name;
		break;
	case "memberlist":
		$style_U_MEMBERLIST = $style_class_name;
		break;
}

$template->assign_vars(array(
                            // Assign menu style state
                            'U_INDEX_STYLE'        => ($style_U_INDEX),
                            'U_MCP_STYLE'          => ($style_U_MCP),
                            'U_PROFILE_STYLE'      => ($style_U_PROFILE),
                            'U_PRIVATEMSGS_STYLE'  => ($style_U_PRIVATEMSGS),
                            'U_FAQ_STYLE'          => ($style_U_FAQ),
                            'U_MEMBERLIST_STYLE'   => ($style_U_MEMBERLIST),
                            'U_REGISTER_STYLE'     => ($style_U_REGISTER),
                            'U_LOGIN_LOGOUT_STYLE' => ($style_U_LOGIN_LOGOUT),
                            'U_SEARCH_ID'          => (isset($_GET['search_id']) ? $_GET['search_id'] : null)
                       ));
// End Menu Navigation

function get_avatar($user)
{
	global $phpbb_root_path, $phpEx;

	$user_avatar = '';
	if ($user->data['user_avatar']) {
		$avatar_size = 60;

		if (!function_exists('get_user_avatar')) {
			include($phpbb_root_path . 'includes/functions_display.' . $phpEx);
		}

		if ($user->data['user_avatar_width'] < $avatar_size && $user->data['user_avatar_height'] < $avatar_size) {
			$width  = $user->data['user_avatar_width'];
			$height = $user->data['user_avatar_height'];
		} else {
			$width  = $avatar_size;
			$height = $avatar_size;
		}

		$user_avatar = get_user_avatar($user->data['user_avatar'], $user->data['user_avatar_type'], $width, $height, $user->data['username']);
	}

	return $user_avatar;
}

$template->assign_vars(array(
                            // Avatar position
                            'AVATAR_POSITION'         => "{$config['avatar_position']}",
                            'T_JOOMLA_MENU'           => $joomla,
                            'T_JOOMLA_MENU_REG'       => $joomla_reg,
                            'T_JOOMLA_MENU_HEADER'    => $joomla_header,
                            'S_ALLOW_JMENU'           => ($config['allow_jmenu']) ? true : false,
                       ));
global $user;
$template->assign_vars(array(
                            'USER_AVATAR' => get_avatar($user),
                       ));


// RokBox Implementation                                   	
$template->assign_vars(array(
                            'ROKBOX'                  => ($config['rokbox']) ? true : false,
                            'ROKBOX_THEME'            => "{$config['rokbox_theme']}"
                       ));

if (!isset($config['rokbox'])) {
	$template->assign_vars(array(
	                            'ROKBOX'        => true
	                       ));
}


class GantryBrowser
{
	var $_ua;

	var $name;
	var $version;
	var $shortversion;
	var $platform;
	var $engine;
	var $_checks = array();

	function GantryBrowser()
	{
		$this->_ua = $_SERVER['HTTP_USER_AGENT'];
		$this->_checkPlatform();
		$this->_checkBrowser();
		$this->_checkEngine();


		// add short version
		if ($this->version != 'unknown') $this->shortversion = substr($this->version, 0, strpos($this->version, '.')); else $this->shortversion = 'unknown';

		$this->_createChecks();
	}

	function _checkPlatform()
	{
		if (preg_match("/iPhone/", $this->_ua) || preg_match("/iPod/", $this->_ua)) {
			$this->platform = "iphone";
		} elseif (preg_match("/iPad/", $this->_ua)) {
			$this->platform = "ipad";
		} elseif (preg_match("/Android/", $this->_ua)) {
			$this->platform = "android";
		} elseif (preg_match("/Mobile/i", $this->_ua)) {
			$this->platform = "mobile";
		} elseif (preg_match("/win/i", $this->_ua)) {
			$this->platform = "win";
		} elseif (preg_match("/mac/i", $this->_ua)) {
			$this->platform = "mac";
		} elseif (preg_match("/linux/i", $this->_ua)) {
			$this->platform = "linux";
		} else {
			$this->platform = "unknown";
		}

		return $this->platform;
	}

	function _checkEngine()
	{
		switch ($this->name) {
			case 'ie':
				$this->engine = 'trident';
				break;
			case 'firefox':
				$this->engine = 'gecko';
				break;
			case 'android':
			case 'ipad':
			case 'iphone':
			case 'chrome':
			case 'safari':
				$this->engine = 'webkit';
				break;
			case 'opera':
				$this->engine = 'presto';
				break;
			default:
				$this->engine = 'unknown';
				break;
		}
	}

	function _checkBrowser()
	{
		// IE
		if (preg_match('/msie/i', $this->_ua) && !preg_match('/opera/i', $this->_ua)) {
			$result        = explode(' ', stristr(str_replace(';', ' ', $this->_ua), 'msie'));
			$this->name    = 'ie';
			$this->version = $result[1];
		} // Firefox
		elseif (preg_match('/Firefox/', $this->_ua)) {
			$result        = explode('/', stristr($this->_ua, 'Firefox'));
			$version       = explode(' ', $result[1]);
			$this->name    = 'firefox';
			$this->version = $version[0];
		} // Chrome
		elseif (preg_match('/Chrome/', $this->_ua)) {
			$result        = explode('/', stristr($this->_ua, 'Chrome'));
			$version       = explode(' ', $result[1]);
			$this->name    = 'chrome';
			$this->version = $version[0];
		} //Safari
		elseif (preg_match('/Safari/', $this->_ua) && !preg_match('/iPhone/', $this->_ua) && !preg_match('/iPod/', $this->_ua) && !preg_match('/iPad/', $this->_ua)) {
			$result     = explode('/', stristr($this->_ua, 'Version'));
			$this->name = 'safari';
			if (isset ($result[1])) {
				$version       = explode(' ', $result[1]);
				$this->version = $version[0];
			} else {
				$this->version = 'unknown';
			}
		} // Opera
		elseif (preg_match('/opera/i', $this->_ua)) {
			$result = stristr($this->_ua, 'opera');

			if (preg_match('/\//', $result)) {
				$result        = explode('/', $result);
				$version       = explode(' ', $result[1]);
				$this->name    = 'opera';
				$this->version = $version[0];
			} else {
				$version       = explode(' ', stristr($result, 'opera'));
				$this->name    = 'opera';
				$this->version = $version[1];
			}
		} // iPhone/iPod
		elseif (preg_match('/iPhone/', $this->_ua) || preg_match('/iPod/', $this->_ua)) {
			$result     = explode('/', stristr($this->_ua, 'Version'));
			$this->name = 'iphone';
			if (isset ($result[1])) {
				$version       = explode(' ', $result[1]);
				$this->version = $version[0];
			} else {
				$this->version = 'unknown';
			}
		} // iPad
		elseif (preg_match('/iPad/', $this->_ua)) {
			$result     = explode('/', stristr($this->_ua, 'Version'));
			$this->name = 'ipad';
			if (isset ($result[1])) {
				$version       = explode(' ', $result[1]);
				$this->version = $version[0];
			} else {
				$this->version = 'unknown';
			}
		} // Android
		elseif (preg_match('/Android/', $this->_ua)) {
			$result     = explode('/', stristr($this->_ua, 'Version'));
			$this->name = 'android';
			if (isset ($result[1])) {
				$version       = explode(' ', $result[1]);
				$this->version = $version[0];
			} else {
				$this->version = "unknown";
			}
		} else {
			$this->name    = "unknown";
			$this->version = "unknown";
		}
	}

	function _createChecks()
	{
		$this->_checks = array(
			'', // filename
			'-' . $this->name, // browser check
			'-' . $this->platform, // platform check
			'-' . $this->engine, // render engine
			'-' . $this->name . '-' . $this->platform, // browser + platform check
			'-' . $this->name . $this->shortversion, // short browser version check
			'-' . $this->name . $this->version, // longbrowser version check
			'-' . $this->name . $this->shortversion . '-' . $this->platform, // short browser version + platform check
			'-' . $this->name . $this->version . '-' . $this->platform // longbrowser version + platform check
		);
	}

	function getChecks($file, $keep_path = false)
	{
		$checkfiles = array();
		$ext        = substr($file, strrpos($file, '.'));
		$path       = ($keep_path) ? dirname($file) . DS : '';
		$filename   = basename($file, $ext);
		foreach ($this->_checks as $suffix) {
			$checkfiles[] = $path . $filename . $suffix . $ext;
		}
		return $checkfiles;
	}
}

$browser         = new GantryBrowser();
$url_file_checks = $browser->getChecks($file_path, false);
$template->assign_vars(array(
                            'BROWSER'  => $url_file_checks[1],
                            'PLATFORM' => $url_file_checks[2],
                            'ENGINE'   => $url_file_checks[3],
                            'VERSION'   => $url_file_checks[5]
                        
                       ));

function current_page()
{
	// Get script name and explode it twice so that we get hold of the script name without
	// the extension. Of cause double explosion is not necessary but for fun :)
	// Then return this to caller.
	$Current_Page = $_SERVER["SCRIPT_NAME"];
	$break        = Explode('/', $Current_Page);
	$file_name    = $break[count($break) - 1];
	$break        = Explode('.', $file_name);
	$page         = $break[0];
	return $page;
}

$s_page = current_page();

$template->assign_vars(array(
                            'S_CURRENTPAGE_MCP'                => ($s_page == "mcp") ? true : false,
                            'S_CURRENTPAGE_REPORT'             => ($s_page == "report") ? true : false,
                            'S_CURRENTPAGE_POSTING'            => ($s_page == "posting") ? true : false,
                            'S_CURRENTPAGE_VIEWONLINE'         => ($s_page == "viewonline") ? true : false,
                            'S_CURRENTPAGE_FAQ'                => ($s_page == "faq") ? true : false,
                            'S_CURRENTPAGE_MEMBERLIST'         => ($s_page == "memberlist") ? true : false,
                            'S_CURRENTPAGE_SEARCH'             => ($s_page == "search") ? true : false,
                            'S_CURRENTPAGE_UCP'                => ($s_page == "ucp") ? true : false,
                            'S_CURRENTPAGE_INDEX'              => ($s_page == "index") ? true : false,
                            'S_CURRENTPAGE_VIEWTOPIC'          => ($s_page == "viewtopic") ? true : false,
                            'S_CURRENTPAGE_VIEWFORUM'          => ($s_page == "viewforum") ? true : false,
                       ));


global $phpbb_root_path, $config, $user, $less_compressed, $template;
$template->assign_vars(array(
                'LESS_COMPRESSED' => ($config['less_compressed']) ? true : false,
                'LESS_DEBUG_HEADER' => ($config['less_debug_header']) ? true : false,
));

// Less 
if (!isset($config['less_compressed'])) {$template->assign_vars(array('LESS_COMPRESSED'		=> false ) ); } 
if (!isset($config['less_debug_header'])) {$template->assign_vars(array('LESS_DEBUG_HEADER'		=> true ) ); }

// paths
$sources_path = $phpbb_root_path."styles/".$user->theme['theme_path']."/theme/less/";
$compiled_path = $phpbb_root_path."styles/".$user->theme['theme_path']."/theme/css-compiled/";

$template->assign_vars(array('LESS_SOURCE_PATH'=>$sources_path,'COMPILED_CSS_PATH'=>$compiled_path));

function rokbb_compile_less($lessfile, $cssfile = null, array $options = array())
{
	global $template, $phpbb_root_path, $root_path, $user;
	// setup the less filename
	if (dirname($lessfile) == '.') {
		$lessfile = $phpbb_root_path."styles/".$user->theme['theme_path']. '/theme/less/' . $lessfile;
	}
	$less_file_md5  = md5($lessfile);
	$less_file_path = $lessfile;
	$less_file_url  = $less_file_path;


	// abort if the less file isnt there
	if (!is_file($less_file_path)) {
		return;
	}

	// get an md5 sum of any passed in options
	$tmp_options = $options;
	array_walk($tmp_options, create_function('&$v,$k', '$v = " * @".$k." = " .$v;'));
	$options_string = implode($tmp_options, "\n");
	$options_md5    = md5($options_string . (string)$template->_rootref['LESS_COMPRESSED']);


	$css_append = '';
	if (!empty($options)) {
		$css_append = '-' . $options_md5;
	}

	$default_compiled_css_dir = $phpbb_root_path."styles/".$user->theme['theme_path']. '/theme/css-compiled';
	if (!file_exists($default_compiled_css_dir)) {
		mkdir($default_compiled_css_dir, 0775, true);
		if (!file_exists($default_compiled_css_dir)) {
			throw new Exception(sprintf('Unable to create default directory (%s) for compiled less files.  Please check your filesystem permissions.', $default_compiled_css_dir));
		}
	}

	// setup the output css file name
	if (is_null($cssfile)) {
		$css_file_path   = $default_compiled_css_dir . '/' . pathinfo($lessfile, PATHINFO_FILENAME) . $css_append . '.css';
		$css_passed_path = pathinfo($css_file_path, PATHINFO_BASENAME);
	} else {
		if (dirname($cssfile) == '.') {
			$css_file_path   = $default_compiled_css_dir . '/' . pathinfo($cssfile, PATHINFO_FILENAME) . $css_append . '.css';
			$css_passed_path = pathinfo($css_file_path, PATHINFO_BASENAME);
		} else {
			$css_file_path   = dirname($cssfile) . '/' . pathinfo($cssfile, PATHINFO_FILENAME) . $css_append . '.css';
			$css_passed_path = $css_file_path;
		}
	}
	$cssfile_md5 = md5($css_file_path);

	// set base compile modes
	$force_compile  = false;

	$runcompile    = false;
	$cached_less_compile = false;
	$cacheFile = $phpbb_root_path . "cache/tpl_" . $template->_rootref['T_THEME_NAME'] . '-' . $cssfile_md5 . ".cache";
	if (file_exists($cacheFile)) {
		$cached_less_compile = @unserialize(file_get_contents($cacheFile));
	} else {
		$runcompile = true;
	}

	if ($cached_less_compile === false || !file_exists($css_file_path)) {
		$cached_less_compile = $less_file_path;
		$runcompile          = true;
	} elseif (is_array($cached_less_compile) && isset($cached_less_compile['root'])) {
		if (isset($cached_less_compile['files']) and is_array($cached_less_compile['files'])) {
			foreach ($cached_less_compile['files'] as $fname => $ftime) {
				if (!file_exists($fname) or filemtime($fname) > $ftime) {
					// One of the files we knew about previously has changed
					// so we should look at our incoming root again.
					$runcompile = true;
					break;
				}
			}
		}
	}

	if ($runcompile) {
		require_once($phpbb_root_path.'includes'.DIRECTORY_SEPARATOR.'rokbb'.DIRECTORY_SEPARATOR.'LessCompiler.php');

		$less = new RokBB_LessCompiler();
		if (!empty($options)) {
			$less->setVariables($options);
		}

		if ($template->_rootref['LESS_COMPRESSED']) {
			$less->setFormatter("compressed");
		}

		try {
			$new_cache = $less->cachedCompile($cached_less_compile, $force_compile);
		} catch (Exception $ex) {
			throw new RuntimeException('Less Parse Error: ' . $ex->getMessage());
		}
		if (!is_array($cached_less_compile) || $new_cache['updated'] > $cached_less_compile['updated']) {
			file_put_contents($cacheFile, serialize($new_cache));
			$tmp_ouput_file = tempnam(dirname($css_file_path), 'rokbb_less');

			$header = '';
			if ($template->_rootref['LESS_DEBUG_HEADER']) {
				$header .= sprintf("/*\n * Main File : %s", $less_file_url);
				if (!empty($options)) {
					$header .= sprintf("\n * Variables :\n %s", $options_string);
				}
				if (count($new_cache['files'] > 1)) {
					$included_files = array_keys($new_cache['files']);
					unset($included_files[0]);
					$header .= sprintf("\n * Included Files : \n%s", implode("\n", $included_files));
				}
				$header .= "\n */\n";
			}
			file_put_contents($tmp_ouput_file, $header . $new_cache['compiled']);

			// Do the messed up file renaming for windows
			if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
				$move_old_file_name = tempnam(dirname($css_file_path), 'gantry_less');
				if (is_file($css_file_path)) @rename($css_file_path, $move_old_file_name);
				@rename($tmp_ouput_file, $css_file_path);
				@unlink($move_old_file_name);
			} else {
				@rename($tmp_ouput_file, $css_file_path);
			}
			@chmod($css_file_path,0664);
		}
	}
	return $css_file_path;
}