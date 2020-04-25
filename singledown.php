<?php

global $wpdb;
define("singledown",plugin_dir_path(__FILE__));

//放弃默认头部载入css和js
/*function singledown_style() {
    echo'<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/style.css" type="text/css" />';
    echo'<script src="'.plugin_dir_url( __FILE__ ).'js/jquery.js" type="text/javascript"></script>';
}
add_action('wp_head', 'singledown_style');*/

function singledown_styles() { //头部载入css
  if (is_singular()) {  //判断为文章页载入
  echo'<link rel="stylesheet" href="'.plugin_dir_url( __FILE__ ).'css/singledown.css" type="text/css" />';
  }
}
add_action( 'wp_head', 'singledown_styles' ); 

function singledown_scripts() { //底部加载js
  if (is_singular()) {  //判断为文章页载入
  wp_register_script('plugin_script', plugins_url('js/jquery.js', __FILE__), array('jquery'),'', true);
  wp_enqueue_script('plugin_script');
  }
}
add_action( 'wp_enqueue_scripts', 'singledown_scripts' );

function singledown_show_down($singledown_content)
{
    $filter = '/<(iframe|script)/i';//是需要过滤的关键词，关键词之间用分隔符 | 隔开即可,修复跨站漏洞，部分用户反映页面出错
    if (preg_match($filter,$singledown_content,$matches)) {
    $singledown_content = htmlspecialchars($singledown_content);
    }

	if(is_single())
	{
    $id=$_GET['id'];
    $title = get_post($id)->post_title;
		$singledown_start=get_post_meta(get_the_ID(), 'singledown_start', true);
    $singledown_reply=get_post_meta(get_the_ID(), 'singledown_reply', true);
		$singledown_name=get_post_meta(get_the_ID(), 'singledown_name', true);
		$singledown_size=get_post_meta(get_the_ID(), 'singledown_size', true);
		$singledown_date=get_post_meta(get_the_ID(), 'singledown_date', true);
		$singledown_version=get_post_meta(get_the_ID(), 'singledown_version', true);
		$singledown_author=get_post_meta(get_the_ID(), 'singledown_author', true);
		$singledown_guanfang=get_post_meta(get_the_ID(), 'singledown_guanfang', true);
    $singledown_tianyi=get_post_meta(get_the_ID(), 'singledown_tianyi', true);
		$singledown_tianyikey=get_post_meta(get_the_ID(), 'singledown_tianyikey', true);
    $singledown_lanzouyun=get_post_meta(get_the_ID(), 'singledown_lanzouyun', true);
		$singledown_lanzoukey=get_post_meta(get_the_ID(), 'singledown_lanzoukey', true);
    $singledown_chengtong=get_post_meta(get_the_ID(), 'singledown_chengtong', true);
    $singledown_baidu=get_post_meta(get_the_ID(), 'singledown_baidu', true);
    $singledown_baidukey=get_post_meta(get_the_ID(), 'singledown_baidukey', true);
    $singledown_demourl=get_post_meta(get_the_ID(), 'singledown_demourl', true);////资源名称、资源大小、更新时间、适用版本、作者信息
  }
  
  if($singledown_start)
    {
      $singledown_content .= '<br/>';
      $singledown_content .= '<div id="fengexuxian"></div>
<div class="singledown-article" ><div class="down-url-wrap"> 
<h3 class="tit"><i class="ico"></i>下载地址</h3>'; 
if ($singledown_baidu) {
  $singledown_baidutn .='<a href="#down" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" onclick="window.open(\''.plugin_dir_url( __FILE__ ).'down/baidudown.php?id='.get_the_ID().'#bddown\');return false;" class="sbtn" title=""><i class="ico"></i><i class="line"></i>百度网盘</a>';
}if ($singledown_lanzouyun) {
  $singledown_lanzoutn .='<a href="#down" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" onclick="window.open(\''.plugin_dir_url( __FILE__ ).'down/lanzoudown.php?id='.get_the_ID().'#lzdown\');return false;" class="sbtn" title=""><i class="ico"></i><i class="line"></i>蓝奏云盘</a>';
}if ($singledown_guanfang) {
  $singledown_guanfangtn .='<a href="#down" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" onclick="window.open(\''.plugin_dir_url( __FILE__ ).'down/down.php?id='.get_the_ID().'#gfdown\');return false;" class="sbtn" title=""><i class="ico"></i><i class="line"></i>官方下载</a>';
}if ($singledown_tianyi) {
   $singledown_tianyitn .='<a href="#down" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" onclick="window.open(\''.plugin_dir_url( __FILE__ ).'down/tianyidown.php?id='.get_the_ID().'#tydown\');return false;" class="sbtn" title=""><i class="ico"></i><i class="line"></i>天翼云盘</a>';
}if ($singledown_chengtong) {
   $singledown_chengtongtn .='<a href="#down" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" onclick="window.open(\''.plugin_dir_url( __FILE__ ).'down/chengtongdown.php?id='.get_the_ID().'#ctdown\');return false;" class="sbtn" title=""><i class="ico"></i><i class="line"></i>诚通网盘</a>';
}if ($singledown_demourl) {
   $singledown_demo .='<a href="#demo" rel="nofollow" rel="nofollow" rel="nofollow" rel="nofollow" onclick="window.open(\''.plugin_dir_url( __FILE__ ).'demo.php?id='.get_the_ID().'#demo\');return false;" class="sbtn" title=""><i class="ico"></i><i class="line"></i>在线演示</a>';
}
  $singledown_div .='</div> </div><div></div>';
  return $singledown_content.$singledown_guanfangtn.$singledown_lanzoutn.$singledown_tianyitn.$singledown_baidutn.$singledown_chengtongtn.$singledown_demo.$singledown_div;
        
    } 










}
add_action('the_content','singledown_show_down');
add_shortcode("singledown",'singledown_show_down');

?>
<?php include('singledown-meta-box.php'); ?>
