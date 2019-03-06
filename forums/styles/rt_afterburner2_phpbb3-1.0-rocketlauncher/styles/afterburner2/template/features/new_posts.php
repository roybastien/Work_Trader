<?php
/**
*
* New Posts Module for RokTabs
*
* @package module
* @version $Id: new_posts.php 8111 2013-03-07 16:54:05Z karol $
* @copyright (c) 2011 RocketTheme, LLC
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

global $phpbb_root_path, $phpEx, $user, $auth, $db, $config;
// Number of posts and permissions
require($phpbb_root_path."styles/afterburner2/default_values.php");
extract($default_values);

$afterburner2_new_topics = (isset($config['afterburner2_new_topics']) ? $config['afterburner2_new_topics'] : $afterburner2_new_topics);
$afterburner2_new_percolumn = (isset($config['afterburner2_new_percolumn']) ? $config['afterburner2_new_percolumn'] : $afterburner2_new_percolumn);

$topic_limit = request_var('topic_limit', $afterburner2_new_topics);
$forums = array_unique(array_keys($auth->acl_getf('f_read', true)));

// Select the last topics to which we have permissions
if(sizeof($forums)) {
$sql = 'SELECT *
                FROM ' . POSTS_TABLE . ' p , ' . USERS_TABLE . ' u
                WHERE p.post_approved = 1
                AND ' . $db->sql_in_set('p.forum_id', $forums) . '
                AND u.user_id = p.poster_id
                ORDER BY p.post_id  DESC
                LIMIT 0,' . $topic_limit;

$result = $db->sql_query($sql);
};

$counter = 0; 
$cells_per_row = $afterburner2_new_percolumn; 
while ($row = $db->sql_fetchrow($result))
{ 
    $counter++; 
    if(($counter % $cells_per_row) == 1)  { echo '<div class="rt-demo-grid-5"><ul>'; }
    $url = append_sid(generate_board_url() . "/viewtopic.{$phpEx}?f={$row['forum_id']}&amp;t={$row['topic_id']}&amp;p={$row['post_id']}#p{$row['post_id']}");
    echo '<li><a href="' . $url . '">' . $row['post_subject'] . '</a>&nbsp;'. $user->lang['POST_BY_AUTHOR'] .'&nbsp;'. $row['username'] . '</li>'; 
    if(($counter %  $cells_per_row) == 0) { echo '</ul></div>'; } 
} 
// just in case we haven't closed the last row 
// this would happen if our result set isn't divisible by $cells_per_row

if(($counter % $cells_per_row) != 0) { echo '</ul></div>'; }

$db->sql_freeresult($result);
?>