<?php
require_once('../../../wp-config.php');
require_once plugin_dir_path(__FILE__).'singledown.php';
define("singledown",plugin_dir_path(__FILE__));
$id=$_GET['id'];
$title = get_post($id)->post_title;
$singledown_name=get_post_meta($id, 'singledown_name', true);
$singledown_size=get_post_meta($id, 'singledown_size', true);
$singledown_date=get_post_meta($id, 'singledown_date', true);
$singledown_version=get_post_meta($id, 'singledown_version', true);
$singledown_author=get_post_meta($id, 'singledown_author', true);
$singledown_lanzouyun=get_post_meta($id, 'singledown_lanzouyun', true);
$singledown_tianyi=get_post_meta($id, 'singledown_tianyi', true);
$singledown_demourl=get_post_meta($id, 'singledown_demourl', true);
$singledown_ad6    = get_option('singledown_ad6');
$singledown_link6    = get_option('singledown_link6');
$singledown_ad7    = get_option('singledown_ad7');
$singledown_link7    = get_option('singledown_link7');
$singledown_ad8    = get_option('singledown_ad8');
$singledown_link8    = get_option('singledown_link8');
$singledown_ad9    = get_option('singledown_ad9');
$singledown_link9    = get_option('singledown_link9');
$singledown_ad10    = get_option('singledown_ad10');
$singledown_link10    = get_option('singledown_link10');
$singledown_ad11    = get_option('singledown_ad11');
$singledown_link11    = get_option('singledown_link11');
$singledown_ad12    = get_option('singledown_ad12');
$singledown_link12    = get_option('singledown_link12');
$singledown_ad13    = get_option('singledown_ad13');
$singledown_link13    = get_option('singledown_link13');
$singledown_ad14    = get_option('singledown_ad14');
$singledown_link14    = get_option('singledown_link14');
$singledown_ad15    = get_option('singledown_ad15');
$singledown_link15    = get_option('singledown_link15');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title><?php echo $title;?>演示</title>
<style>
body{margin: 0;padding: 0;font-family: 'microsoft yahei';font-size: 14px;overflow: hidden;}
#previewbar{background-color: #444;color: #eee;height: 48px;line-height: 48px;position: relative;z-index: 9}
#previewlogo{float: left;padding: 0 20px 0 180px;position: relative;}
#previewtitle{float: right;padding: 0 20px;position: relative;}
#previewtitle i{position: relative;top: -2px;margin-left: 5px;display: inline-block;border-left: 5px solid transparent;border-right: 5px solid transparent;border-top: 5px solid #fff;}
#previewtitle:hover{background-color: #333;}
#previewtitle:hover #previewlist{display: block;}
#previewlist{position: absolute;top: 48px;left: 0;width: 120%;background-color: #333;display: none;}
#previewlist ul{list-style: none;margin: 0;padding: 5px 0;}
#previewlist ul a{color: #eee;padding: 0 20px;line-height: 36px;font-size: 12px;text-decoration: none;display: block;}
#previewlist ul a:hover{color: #fff;background-color: #222;}
#previewaction{float: right;}
#previewaction a{display: inline-block;padding: 0 30px;color: #fff;background-color: #00BE3C;text-decoration: none;}
#previewaction a:hover{background-color: #1AC550;}
#previewframe{position: absolute;top: 48px;bottom: 0;left: 0;right: 0;}
#previewframe iframe{border: 0;width: 100%;height: 100%;margin: 0;position: absolute;top: 0;bottom: 0;left: 0;right: 0;}
</style>
</head>
<body>
<h1 style="display:none"><?php echo $title;?>演示</h1>
<div id="previewbar">
<div id="previewlogo" style="background: url(<?php echo get_option('singledown_ad6');?>) no-repeat 20px 50%;"><?php echo $title;?>官方演示</div>
	<div id="previewaction">
		<a href="<?php echo get_permalink( $id );?>">关闭演示</a>
	</div>
	<div id="previewtitle">推荐资源<i></i>
		<div id="previewlist">
			<ul>
				<li><a href="<?php echo get_option('singledown_link8');?>"><?php echo get_option('singledown_ad8');?></a></li>
				<li><a href="<?php echo get_option('singledown_link9');?>"><?php echo get_option('singledown_ad9');?></a></li>
				<li><a href="<?php echo get_option('singledown_link10');?>"><?php echo get_option('singledown_ad10');?></a></li>
                                <li><a href="<?php echo get_option('singledown_link11');?>"><?php echo get_option('singledown_ad11');?></a></li>
			</ul>
		</div>
	</div>
	<div id="previewtitle">赞助商广告<i></i>
		<div id="previewlist">
			<ul>
				<li><a href="<?php echo get_option('singledown_link12');?>"><?php echo get_option('singledown_ad12');?></a></li>
				<li><a href="<?php echo get_option('singledown_link13');?>"><?php echo get_option('singledown_ad13');?></a></li>
				<li><a href="<?php echo get_option('singledown_link14');?>"><?php echo get_option('singledown_ad14');?></a></li>
                                <li><a href="<?php echo get_option('singledown_link15');?>"><?php echo get_option('singledown_ad15');?></a></li>
			</ul>
		</div>
	</div>
</div>
<?php if($singledown_demourl){ ?>
<div id="previewframe">
	<iframe src="<?php echo $singledown_demourl;?>" frameborder="0"></iframe>
</div>
<?php }
?>
<?php echo stripslashes($singledown_ad5);?>
</body>
</html>










