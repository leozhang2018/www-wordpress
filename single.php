<?php get_header()?>
<style type='text/css'>
#menu-hidden{margin-top:0}
@media screen and (max-width:750px){
article.articles{margin-top:30px}
}
</style>
<?php while ( have_posts() ) : the_post(); ?>
<div class="headerimg">
	<div class="cover-center">
		<h2 class="article-title-single"><?php the_title(); ?></h2>
		<ul class="article-meta">
			<li><?php the_author(); ?></li>
			<li>|</li>
			<li><?php echo date('F',get_the_time('U')).' '.get_the_time('j, Y'); ?></li>
			<li>|</li>
			<li><?php the_category(','); ?></li>
			<li>|</li>
			<li><?php if (function_exists('the_views')): ?><?php the_views(); ?><?php endif; ?></li>
		</ul>
	</div>
	<div class="hero"></div>
	<img class="content-header-archive gray" src="<?php bloginfo('template_url');?>/images/bg2.jpg" />
</div>
<div id="wrap">

		<article class="articles" style="margin-bottom:0">
			<div class="article-content"><?php the_content("View Article");?></div>
		</article>
		<div class="article-tags"><?php if ( get_the_tags() ) { the_tags('Tags: ' , ''); } else{ echo "暂无标签"; } ?></div>

</div>
<?php endwhile; ?>
<?php if ($comments || comments_open()) :  comments_template( '', true );?><?php endif; ?>
<?php get_footer();?>