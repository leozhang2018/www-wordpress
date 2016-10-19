<?php

// Add post formats
add_theme_support( 'post-formats', array('aside', 'chat','gallery','image','link', 'quote', 'status', 'video', 'audio') );




// 注册 report post type
function my_custom_post_report() {
  $labels = array(
    'name'               => _x( '媒体报道', '' ),  //后台媒体列表页标题的显示名称
    'singular_name'      => _x( '报道', '' ), //管理员工具条新建的下拉菜单里的显示名称
    'add_new'            => _x( '新建报道', '' ), //仪表盘侧边栏新建媒体报道的显示名称
    'add_new_item'       => __( '新建一个报道' ), //新建媒体报道页面标题的现实名称
    'edit_item'          => __( '编辑该报道' ), //媒体报道 single-page 顶部工具条的编辑功能的显示名称
    'new_item'           => __( '新报道' ),
    'all_items'          => __( '所有报道' ), //仪表盘侧边栏所有报道的显示名称
    'view_item'          => __( '查看报道' ),
    'search_items'       => __( '搜索报道' ),
    'not_found'          => __( '没有找到有关报道' ),
    'not_found_in_trash' => __( '回收站里空空如也' ),
    'parent_item_colon'  => '',
    'menu_name'          => '媒体报道' //仪表盘侧边栏菜单名
  );
  $args = array(
    'labels'        => $labels,
    'description'   => '我们网站的报道信息',
    'public'        => true,
    'menu_position' => 4,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true
  );
  register_post_type( 'report', $args );
}
add_action( 'init', 'my_custom_post_report' );

//不同文章类型分类页面显示不同数量文章
function ashuwp_posts_per_page($query){
  //product 为文章类型  products 为对应分类法
  //is_tax 判断是否为分类页面
  //is_post_type_archive 判断是否为归档页面
  //$query->is_main_query 使得仅对页面主循环有效
  //!is_admin 避免影响后台
  if((is_tax('reports')||is_post_type_archive('report') )&& $query->is_main_query() && !is_admin()){
    $query->set('posts_per_page', 5); // 设置为 5 篇每页
  }
  return $query;
}
add_action('pre_get_posts','ashuwp_posts_per_page');

?>