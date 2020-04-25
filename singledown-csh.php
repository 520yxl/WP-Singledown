<?php
$singledown_ad6    = get_option('singledown_ad6');
$singledown_ad7    = get_option('singledown_ad7');
$singledown_ad8    = get_option('singledown_ad8');
$singledown_link8    = get_option('singledown_link8');
$singledown_ad9    = get_option('singledown_ad9');
$singledown_link9    = get_option('singledown_link9');
$singledown_ad10    = get_option('singledown_ad10');
$singledown_link10    = get_option('singledown_link10');
$singledown_ad11    = get_option('singledown_ad11');
$singledown_link11    = get_option('singledown_link11');
if ($singledown_ad6==null) {
	$singledown_ad6 = plugin_dir_url( __FILE__ ).'img/Singledownlogo.png';
}
if ($singledown_ad7==null) {
	$singledown_ad7 = plugin_dir_url( __FILE__ ).'img/WP-Singledown.png';
}
if ($singledown_ad8==null) {
	$singledown_ad8 .= "新逸软件";
	$singledown_link8 .= 'https://r.520yxl.cn';
}
?>