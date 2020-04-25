<?php
/*
 * Plugin Name: WP-Singledown
 * Description: 这是一个全新的独立下载页面的插件，简化了前端的显示样式，独立下载页面支持图片广告和导航文字广告。
 * Author: 新逸软件
 * Version: 1.0.1
 * Author URI:https://r.520yxl.cn/
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
global $wp_single;
define("singledown",plugin_dir_path(__FILE__));
add_action('admin_menu','singledown_menu');
function singledown_menu() {
	if (function_exists('add_menu_page')) {
		add_menu_page('singledown下载','singledown下载','administrator','WP-Singledown/singledownadmin.php', '','');
	}
}
?>
<?php include('singledown.php'); ?>
