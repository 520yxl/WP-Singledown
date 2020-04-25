<?php
if ( !defined('ABSPATH') ) {exit;}
add_action( 'admin_menu', 'singledown_create_down_box' );
add_action( 'save_post', 'singledown_save_down_data' );
function singledown_create_down_box() {
	add_meta_box( 'singledown_-post-meta-boxes','开启下载（请根据实际开启其中一种下载模式）', 'singledown_post_down_info', 'post', 'normal', 'high' );
}
function singledown_down_post_boxes() {  //资源名称、资源大小、更新时间、适用版本、作者信息
	$meta_boxes = array(
	array(
    "name"             => "singledown_start",
    "title"            => "启用下载",
    "desc"             => "启用下载",
    "type"             => "checkbox",
    "capability"       => "manage_options"
    ),
	array(
			"name"             => "singledown_name",
			"title"            => "资源名称",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_size",
			"title"            => "资源大小",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_date",
			"title"            => "更新时间",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_version",
			"title"            => "适用版本",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_authsingledown",
			"title"            => "作者信息",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_guanfang",
			"title"            => "官方下载",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_tianyi",
			"title"            => "天翼云盘",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_tianyikey",
			"title"            => "提取码",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_lanzouyun",
			"title"            => "蓝奏云",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_lanzoukey",
			"title"            => "提取码",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),	
	array(
			"name"             => "singledown_chengtong",
			"title"            => "诚通网盘",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_baidu",
			"title"            => "百度云盘",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_baidukey",
			"title"            => "提取码",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	),
	array(
			"name"             => "singledown_demourl",
			"title"            => "在线演示",
			"desc"             => "",
			"type"             => "text",
			"capability"       => "manage_options"
	)
	);
	return apply_filters( 'singledown_post_boxes', $meta_boxes );
}
function singledown_post_down_info() {
	global $post;
	$meta_boxes = singledown_down_post_boxes(); 
?>
	<table class="form-table">
	<?php foreach ( $meta_boxes as $meta ) :
		$value = get_post_meta( $post->ID, $meta['name'], true );
		if ( $meta['type'] == 'text' )
			singledown_show_text_input( $meta, $value );
		elseif ( $meta['type'] == 'textarea' )
			singledown_show_textarea( $meta, $value );
		elseif ( $meta['type'] == 'checkbox' )
			singledown_show_checkbox( $meta, $value );
	endforeach; ?>
	</table>
<?php
}
function singledown_show_text_input( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:15%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
		<input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo wp_specialchars( $value, 1 ); ?>" size="30" tabindex="30" style="width: 97%;" />
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
		</td>
	</tr>
	<?php
}
function singledown_show_textarea( $args = array(), $value = false ) {
	extract( $args ); ?>
	<tr>
		<th style="width:10%;">
			<label for="<?php echo $name; ?>"><?php echo $title; ?></label>
		</th>
		<td>
			<textarea name="<?php echo $name; ?>" id="<?php echo $name; ?>" cols="60" rows="4" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( $value, 1 ); ?></textarea>
			<input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />	</td>
	</tr>
	<?php
}
function singledown_show_checkbox( $args = array(), $value = false ) {
	extract( $args ); ?>
<tr>
		<th style="width:10%;">
	<label for="<?php echo $name; ?>"><?php echo $title; ?></label>		</th>
		<td>
    <input type="checkbox" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="yes"
    <?php if ( htmlentities( $value, 1 ) == 'yes' ) echo ' checked="checked"'; ?>
    style="width: auto;" />
    <input type="hidden" name="<?php echo $name; ?>_input_name" id="<?php echo $name; ?>_input_name" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
    </td>
	</tr>
	<?php }
function singledown_save_down_data( $post_id ) {
		$meta_boxes = array_merge( singledown_down_post_boxes() );
		foreach ( $meta_boxes as $meta_box ) :
		if ( !wp_verify_nonce( $_POST[$meta_box['name'] . '_input_name'], plugin_basename( __FILE__ ) ) )
			return $post_id;
		if ( 'page' == $_POST['post_type'] && !current_user_can( 'edit_page', $post_id ) )
			return $post_id;
		elseif ( 'post' == $_POST['post_type'] && !current_user_can( 'edit_post', $post_id ) )
			return $post_id;
		$data = stripslashes( $_POST[$meta_box['name']] );
		if ( get_post_meta( $post_id, $meta_box['name'] ) == '' )
			add_post_meta( $post_id, $meta_box['name'], $data, true );
		elseif ( $data != get_post_meta( $post_id, $meta_box['name'], true ) )
			update_post_meta( $post_id, $meta_box['name'], $data );
		elseif ( $data == '' )
			delete_post_meta( $post_id, $meta_box['name'], get_post_meta( $post_id, $meta_box['name'], true ) );
	endforeach;
}
?>