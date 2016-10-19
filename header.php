<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9;IE=8;IE=7" />
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
	<?php
		$description = '';
		$keywords = '';
		if (is_home()) {
			$description = "七牛云是国内领先的企业级云服务商，致力于打造以数据为核心的场景化 PaaS 服务。围绕富媒体场景，七牛先后推出了对象存储，融合 CDN 加速，直播云服务，内容反垃圾等服务。";
			$keywords = "七牛, 七牛云, 七牛云存储, 对象存储, 七牛直播云, 七牛融合 CDN 加速";
		}
		elseif (is_page()) {
			$description = get_post_meta($post->ID, "description_value", true);
			$keywords = get_post_meta($post->ID, "keywords_value", true);
		}
		elseif (is_single()) {
		    $description1 = get_post_meta($post->ID, "description_value", true);
		    $description2 = mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200, "……");
		    $description = $description1 ? $description1 : $description2;
		    $keywords = get_post_meta($post->ID, "keywords_value", true);
		    if($keywords == '') {
		        $tags = wp_get_post_tags($post->ID);
		        foreach ($tags as $tag ) {
		            $keywords = $keywords . $tag->name . ", ";
		        }
		        $keywords = rtrim($keywords, ', ');
			}
		}
	?>
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body>
<?php if( is_user_logged_in() ) {
	echo "
		<style type='text/css'>
			.header-top{top:32px}
			html{margin-top: 108px !important;}
		</style>
	";} else { echo "
		<style type='text/css'>
			html{margin-top: 76px !important;}
		</style>
	";}
?>
<header id="header" class="header-top">
	<div class="center-header">
		<a class="logo" href="/"><img src="<?php bloginfo('template_url');?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a>
		<?php wp_nav_menu(array(
		    'theme_location' => 'top-menu',
		    'container' => 'nav',
		    'container_id' => 'top-menu'
		)); ?>
		<ul id="qn-register">
			<li><a class="signin" href="https://portal.qiniu.com/signin">登录</a></li>
			<li><a class="signup" href="https://portal.qiniu.com/signup/choice">注册</a></li>
		</ul>
	</div>
</header>
