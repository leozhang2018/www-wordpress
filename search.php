<?php get_header()?>
<style type='text/css'>#menu-hidden{margin-top:0}#comments{margin-top: 30px}</style>

<div class="headerimg-page" style="margin-bottom:120px">
	<div class="cover-center-page">
		<h2 class="article-title-page">Search results for「<span class="highlight-keyword"><?php the_search_query(); ?></span>」</h2>
	</div>
</div>
<div id="wrap">

<?php $posts = query_posts($query_string . '&orderby=date&showposts=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article class="articles">
		<h2 class="article-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="article-date"><?php echo date('F',get_the_time('U')).' '.get_the_time('j, Y'); ?></div>
		<div class="article-thumb"><?php if( has_post_thumbnail()) { // 单篇文章有缩略图的?><?php post_thumbnail(1000, '');?><?php } ?></div>
		<div class="article-content"><?php the_content("View Article");?></div>
	</article>
	<div class="articles-sep"></div>
<?php endwhile; else: ?>
	<article class="articles" style="margin-bottom:0">
		<div class="no-search">Sorry, no results you want, please search again</div>
	</article>
<?php endif; ?>
</div>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="pagenav" align="center">
		<?php par_pagenav();?>
	</nav>
	<nav class="nav-phone">
		<span class="pageprev"><?php previous_posts_link('〈 Previous'); ?></span>
		<span class="pagenext"><?php next_posts_link('Next 〉'); ?></span>
	</nav>
<?php endif; ?>

<?php get_footer();?>