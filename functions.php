<?php

// 开启后台链接管理
add_filter( 'pre_option_link_manager_enabled', '__return_true' );


// 注册 Wordpress 菜单
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
            'top-menu' => __( '顶部菜单' ),
            'footer-menu' => __( '底部菜单' )
        )
    );
}
add_theme_support( 'menus' );

// 移除菜单的多余 CSS 选择器
function my_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item','kodo','pili','fusion','dora','qcos','about','architect','blog','contact','cooperation','developer-center','eco','forum','join','link','qa-community','reports','support','cooperative-development')) : '';
}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);


// 清除 wp_head 带入的 meta 标签
function ashuwp_clean_theme_meta(){
    remove_action( 'wp_head', 'wp_generator', 10, 1); // 移除 WordPress 版本号
    remove_action( 'wp_head', 'index_rel_link', 10, 1); // 移除主页 meta 信息
    remove_action( 'wp_head', 'start_post_rel_link', 10, 1); // 移除开始篇章
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0); // 移除父篇
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0); // 移除上下篇
    remove_action( 'wp_head', 'feed_links_extra', 3, 1); // 额外的 feed,例如 category, tag 页
    remove_action( 'wp_head', 'wlwmanifest_link', 10, 1); //移除 head 中的离线编辑器开放接口, 即 rel="wlwmanifest"
    remove_action( 'wp_head', 'rsd_link', 10, 1); // 移除 head 中的 rel="EditURI"
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // rel=pre
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0); // rel=shortlink
    remove_action( 'wp_head', 'feed_links', 2, 1); // 移除额外的 feed,如 category, tag 页
    remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0);  // 移除头部 wp-json 标签和 HTTP header 中的 link
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10, 1); // 移除 oEmbed 发现链接
    remove_action( 'wp_head', 'print_emoji_detection_script', 7, 1); // 禁用 Emoji
    remove_action( 'wp_print_styles', 'print_emoji_styles', 10, 1); // 禁用 Emoji
    remove_action( 'wp_head', 'rel_canonical', 10, 0);
}
add_action('after_setup_theme', 'ashuwp_clean_theme_meta');

// 清除 wp_footer 带入的 embed.min.js
function ashuwp_deregister_embed_script(){
    wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'ashuwp_deregister_embed_script');

// Lift GFW
function unblock_gravatar( $avatar ) {
    $avatar = str_replace( array( 'http://www.gravatar.com', 'http://0.gravatar.com', 'http://1.gravatar.com', 'http://2.gravatar.com' ), 'https://secure.gravatar.com', $avatar );
    return $avatar;
}
add_filter( 'get_avatar', 'unblock_gravatar' );



// 翻页
function par_pagenav($range = 4){
	global $paged, $wp_query;
	if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){if(!$paged){$paged = 1;}
	if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='home'>首页</a>";}
	if($paged>1) echo '<a href="' . get_pagenum_link($paged-1) .'" class="pageprev">上一页</a>';
    if($max_page > $range){
		if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
    elseif($paged >= ($max_page - ceil(($range/2)))){
		for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
		if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
		for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
    else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
    if($i==$paged)echo " class='current'";echo ">$i</a>";}}
	if($paged<$max_page) echo '<a href="' . get_pagenum_link($paged+1) .'" class="pagenext">下一页</a>';
    if($paged != $max_page){echo "<a href='" . get_pagenum_link($max_page) . "' class='last'>尾页</a>";}}
}



// 禁止半角符号自动转换为全角
remove_filter('the_content', 'wptexturize');


// 移除自动保存和修订版本
function disable_autosave() {
	wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'disable_autosave' );
remove_action('pre_post_update', 'wp_save_post_revision' );



// 引入其他 function
get_template_part('functions/post-formats');
get_template_part('functions/metabox-report');
get_template_part('functions/metabox-seo');

// WordPress 4.4 标题设置
function Bing_add_theme_support_title(){
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'Bing_add_theme_support_title' );
// 标题分隔符修改
function Bing_title_separator_to_line(){
    return ' - ';//自定义标题分隔符
}
add_filter( 'document_title_separator', 'Bing_title_separator_to_line' );

?>