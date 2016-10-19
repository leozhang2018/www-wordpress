<?php /* Template Name: 协议 */ get_header(); ?>
<div id="container">
    <section class="content content-report-title">
        <div class="wrap">
            <h1 class="h1-page-report">协议</h1>
        </div>
    </section>
	<section class="content content-agreement">
		<div class="center">
            <ul class="sidebar-media">
                <li class="sidebar-media-email">
                    <h4>法务</h4>
                    <span>通过 <a href="mailto:forensic@qiniu.com">forensic@qiniu.com</a> 联系</span>
                </li>
                <li class="sidebar-media-design">
                    <h4>商务合作</h4>
                    <span><a href="mailto:bd@qiniu.com">bd@qiniu.com</a></span>
                </li>
                <li class="sidebar-media-blog">
                    <h4>博客</h4>
                    <span>关注 <a href="http://blog.qiniu.com/" target="_blank">七牛云博客</a> 获取动态</span>
                </li>
            </ul>
			<div class="agreement-content">
                <?php while ( have_posts() ) : the_post(); ?><?php the_content();?><?php endwhile; ?>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>