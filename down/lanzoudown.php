<?php
require_once('../../../../wp-config.php');
define("singledown",plugin_dir_path(__FILE__));
$id=$_GET['id'];
$title = get_post($id)->post_title;
$singledown_name=get_post_meta($id, 'singledown_name', true);
$singledown_size=get_post_meta($id, 'singledown_size', true);
$singledown_date=get_post_meta($id, 'singledown_date', true);
$singledown_version=get_post_meta($id, 'singledown_version', true);
$singledown_author=get_post_meta($id, 'singledown_author', true);
$singledown_guanfang=get_post_meta($id, 'singledown_guanfang', true);
$singledown_tianyi=get_post_meta($id, 'singledown_tianyi', true);
$singledown_tianyikey=get_post_meta($id, 'singledown_tianyikey', true);
$singledown_lanzouyun=get_post_meta($id, 'singledown_lanzouyun', true);
$singledown_lanzoukey=get_post_meta($id, 'singledown_lanzoukey', true);
$singledown_chengtong=get_post_meta($id, 'singledown_chengtong', true);
$singledown_baidu=get_post_meta($id, 'singledown_baidu', true);
$singledown_baidukey=get_post_meta($id, 'singledown_baidukey', true);
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

if ($singledown_lanzouyun) {
    $singledown_downtitle='蓝奏云盘';
    $singledown_downurl=$singledown_lanzouyun;
}
if ($singledown_lanzoukey) {
    $singledown_downkey .='<strong><h2 style="color:red">提取码：</strong>'.$singledown_lanzoukey.'</h2></br>';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title;?>下载页面</title>
<meta name="keywords" content="<?php echo $title;?>" />
<meta name="description" content="<?php echo $title;?>下载" />
<link rel='stylesheet'   href='<?php echo home_url();?>/wp-content/plugins/WP-Singledown/css/download.css' type='text/css' media='all' />
<link rel='stylesheet' id='_bootstrap-css'  href='http://apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.css?ver=9.0.0' type='text/css' media='all' />
<link rel="dns-prefetch" href="//apps.bdimg.com">
<meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-title" content="下载中心">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="<?php echo home_url();?>/favicon.ico">

<!--[if lt IE 9]><script src="http://apps.bdimg.com/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
</head>

<body>
<header class="header">
  <div class="container">
  <div class="logo">
    <a href="<?php echo home_url();?>" title="WordPress"><img src="<?php echo get_option('singledown_ad6');?>">网站品牌文字</a>
  </div>
  <div class="brand">欢迎分享我们的资源地址<br>welcome
    </div>    
            <ul class="site-nav site-navbar">
                        <li><a href="<?php echo get_option('singledown_link8');?>"><?php echo get_option('singledown_ad8');?></a></li>
                        <li><a href="<?php echo get_option('singledown_link9');?>"><?php echo get_option('singledown_ad9');?></a></li>
                        <li><a href="<?php echo get_option('singledown_link10');?>"><?php echo get_option('singledown_ad10');?></a></li>
                        <li><a href="<?php echo get_option('singledown_link11');?>"><?php echo get_option('singledown_ad11');?></a></li>  
            </ul>
    <div class="topbar" style="margin-left:15px;margin-right:0px">
       Hi, 你好，感谢下载！&nbsp; &nbsp; <a href="<?php echo home_url();?>">返回首页</a>
    </div>
  </div>
</header>

<div class="singledown-focus" id="focus">
    <div class="container">
    <div class="singledown-header">
        <h1><?php echo $singledown_downtitle;?>下载通道</h1>
        <h2>文章：<a style="color:#999" href="<?php echo get_permalink( $id );?>"><?php echo $title;?></a></h2>
        <div class="singledown-buy" style="margin-top:15px">
    <a class="singledown-button" href="<?php echo $singledown_downurl;?>"><?php echo $singledown_downtitle;?></a>     
        </div>
        <div style="margin-top:-10px;margin-bottom:-15px">
        <p class="singledown-alert">
       <?php echo $singledown_downkey;?>
        <strong><h2>文件信息：</h2> </strong>
        </br><h2>1、文件名称 ：<?php echo $singledown_name;?></h2>
        <h2>2、文件大小 ：<?php echo $singledown_size;?></h2>
        <h2>3、更新时间 ：<?php echo $singledown_date;?></h2>
        <h2>4、适用版本 ：<?php echo $singledown_version;?></h2>
        <h2>5、作者信息 ：<?php echo $singledown_author;?></h2>       
        </p>
        </div>
        <p class="singledown-alert">
        <strong>版权声明：</strong>本站大部分下载资源收集于网络，只做学习和交流使用，版权归原作者所有，若为付费资源，请在下载后24小时之内自觉删除，若作商业用途，请购买正版，由于未及时购买和付费发生的侵权行为，与本站无关。本站发布的内容若侵犯到您的权益，请联系站长删除，我们将及时处理！
        </p>
    </div>
    <?php if($singledown_ad7){ ?>
    <div class="singledown-thumbnail">
        <?php  echo stripslashes($singledown_ad7); ?>
    </div>
    <?php }
    ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
    <p>&copy; 2020 <a href="<?php echo home_url();?>"><?php echo get_bloginfo("name");?></a> &nbsp; <a href='https://r.520yxl.cn/sitemap'>网站地图</a>&nbsp; Copyright by <a href='https://r.520yxl.cn/'>新逸软件</a></p>
  </div>
</footer>
</body>
</html>