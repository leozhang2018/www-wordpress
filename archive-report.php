<?php get_header()?>
<div id="container">
    <section class="content content-report-title">
    	<div class="wrap">
            <h1 class="h1-page-report">媒体报道</h1>
        </div>
    </section>
	<section class="content content-report">
		<div class="center">
            <ul class="sidebar-media">
                <li class="sidebar-media-email">
                    <h4>媒体合作</h4>
                    <span>通过 <a href="mailto:marketing@qiniu.com">marketing@qiniu.com</a> 联系</span>
                </li>
                <li class="sidebar-media-design">
                    <h4>资源</h4>
                    <span>下载我们的设计物料：<a href="">点击下载</a></span>
                </li>
                <li class="sidebar-media-blog">
                    <h4>博客</h4>
                    <span>关注 <a href="http://blog.qiniu.com/" target="_blank">七牛云博客</a> 获取动态</span>
                </li>
            </ul>
			<div class="media-articles-list">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="articles">
						<div class="articles-items-via"><time><?php the_time('Y.m.d') ?></time>
                        <?php $via = get_post_meta($post->ID, 'qn_report_sources', true); if ( $via ) echo 'via <a target="_blank" href="' . get_post_meta($post->ID, 'qn_report_link', true) . '">' .get_post_meta($post->ID, 'qn_report_sources', true) . '</a>'; ?></div>
						<h3 class="article-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<div class="article-content"><p><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 220,"......"); ?></p></div>
						<a class="read-more" href="<?php the_permalink(); ?>" rel="nofollow">阅读全文</a>
					</article>
				<?php endwhile; endif;?>
				<nav class="pagenav">
					<?php par_pagenav();?>
				</nav>
			</div>
		</div>
	</section>
</div>

<?php get_footer();?>