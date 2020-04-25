<div class="wrap">
<?php 
if($_POST['Submit'] && current_user_can('administrator') && $_POST['Submit']=='保存设置')
{
	$singledown_ad6    = trim($_POST['singledown_ad6']);
	$singledown_ad7    = trim($_POST['singledown_ad7']);
	$singledown_ad8    = trim($_POST['singledown_ad8']);
	$singledown_ad9    = trim($_POST['singledown_ad9']);
	$singledown_ad10    = trim($_POST['singledown_ad10']);
	$singledown_ad11    = trim($_POST['singledown_ad11']);
    $singledown_link8    = trim($_POST['singledown_link8']);
    $singledown_link9    = trim($_POST['singledown_link9']);
    $singledown_link10    = trim($_POST['singledown_link10']);
    $singledown_link11    = trim($_POST['singledown_link11']);

    $update_text=array('singledown_ad6','singledown_ad7','singledown_ad8','singledown_ad9','singledown_ad10','singledown_ad11','singledown_link8','singledown_link9','singledown_link10','singledown_link11',);
	$update_singledown[] = update_option('singledown_ad6', $singledown_ad6);
	$update_singledown[] = update_option('singledown_ad7', $singledown_ad7);
	$update_singledown[] = update_option('singledown_ad8', $singledown_ad8);
	$update_singledown[] = update_option('singledown_ad9', $singledown_ad9);
	$update_singledown[] = update_option('singledown_ad10', $singledown_ad10);
	$update_singledown[] = update_option('singledown_ad11', $singledown_ad11);
    $update_singledown[] = update_option('singledown_link8', $singledown_link8);
    $update_singledown[] = update_option('singledown_link9', $singledown_link9);
    $update_singledown[] = update_option('singledown_link10', $singledown_link10);
    $update_singledown[] = update_option('singledown_link11', $singledown_link11);

    foreach($update_singledown as $k=>$v)
	{
		if($v)
		{
			$text .= '<div class="updated settings-error"><p>'.$update_text[$k].' 更新成功！</p></div>';
		}
	}
	if(empty($text))
	{
		$text = '<div class="updated settings-error"><p>没有更新任何信息</p></div>';
	}
}
$singledown_ad6    = get_option('singledown_ad6');
$singledown_ad7    = get_option('singledown_ad7');
$singledown_ad8    = get_option('singledown_ad8');
$singledown_ad9    = get_option('singledown_ad9');
$singledown_ad10    = get_option('singledown_ad10');
$singledown_ad11    = get_option('singledown_ad11');
$singledown_link8    = get_option('singledown_link8');
$singledown_link9    = get_option('singledown_link9');
$singledown_link10    = get_option('singledown_link10');
$singledown_link11    = get_option('singledown_link11');


if(!empty($text))
{
	echo '<div id="message">'.$text.'</div>';
}
if ($singledown_ad6==null) {
	$singledown_ad6 = plugin_dir_url( __FILE__ ).'img/Singledownlogo.png';
	$update_singledown[] = update_option('singledown_ad6', $singledown_ad6);
}
if ($singledown_ad7==null) {
	$singledown_ad7 = '<a href="https://r.520yxl.cn" target="_blank"><img src="'.plugin_dir_url( __FILE__ ).'img/WP-Singledown.png"></a>';
		$update_singledown[] = update_option('singledown_ad7', $singledown_ad7);
}
if ($singledown_ad8==null) {
	$singledown_ad8 .= "新逸软件";
	$singledown_link8 .= 'https://r.520yxl.cn';
	$update_singledown[] = update_option('singledown_ad8', $singledown_ad8);
    $update_singledown[] = update_option('singledown_link8', $singledown_link8);
}
?>

<form method="post" action="<?php echo admin_url('admin.php?page='.plugin_basename(__FILE__)); ?>" style="width: 90%;float: left;">
		<h2>singledown独立下载页面插件设置</h2>
		<table class="form-table">
			<tr>
				<td valign="top" width="30%"><strong>官方下载页面-LOGO</strong><br />
				</td>
				<td><input type="text" id="singledown_ad6" name="singledown_ad6"
					value="<?php echo $singledown_ad6; ?>" placeholder="LOGO图片链接地址:建议大小142 * 32" maxlength="150" size="50" />
				</td>
			</tr>			

			<tr>
				<td valign="top" width="30%"><strong>官方下载左侧-联盟大图广告</strong><br />
				</td>
				<td>
<textarea name="singledown_ad7" id="singledown_ad7" cols="40" rows="4" placeholder="图片或联盟广告代码，图片广告建议大小580 * 340px" style="width:100%; font-size: 12px; height: 112px;" class="code" >
<?php  echo stripslashes($singledown_ad7); ?>
</textarea>
				</td>

			</tr>
			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告1</strong><br />
				</td>
				<td><input type="text" id="singledown_ad8" name="singledown_ad8"
					value="<?php echo $singledown_ad8; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="singledown_link8" name="singledown_link8" 
					value="<?php echo $singledown_link8 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告2</strong><br />
				</td>
				<td><input type="text" id="singledown_ad9" name="singledown_ad9"
					value="<?php echo $singledown_ad9; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="singledown_link9" name="singledown_link9" 
					value="<?php echo $singledown_link9 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>


			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告3</strong><br />
				</td>
				<td><input type="text" id="singledown_ad10" name="singledown_ad10"
					value="<?php echo $singledown_ad10; ?>" placeholder="广告文本"  maxlength="150" size="50" />
				</td>
                <td><input type="text" id="singledown_link10" name="singledown_link10" 
					value="<?php echo $singledown_link10 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>


			<tr>
				<td valign="top" width="30%"><strong>顶部导航文字广告4</strong><br />
				</td>
				<td><input type="text" id="singledown_ad11" name="singledown_ad11"
					value="<?php echo $singledown_ad11; ?>" placeholder="广告文本" maxlength="150" size="50" />
				</td>
                <td><input type="text" id="singledown_link11" name="singledown_link11" 
					value="<?php echo $singledown_link11 ; ?>" placeholder="链接地址" maxlength="150" size="50" />
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<p class="submit">
						<input type="submit" name="Submit" value="保存设置" class="button-primary" />
					</p>
				</td>
			</tr>

		</table>
	</form>
</div>
<div style="display:none">r.520yxl.cn</div>

