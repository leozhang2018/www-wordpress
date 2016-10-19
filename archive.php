<?php get_header()?>

<div id="container">
    <section class="content">
        <div class="center">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        	<?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; endif;?>
        </div>
    </section>
</div>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav class="pagenav" align="center">
		<?php par_pagenav();?>
	</nav>
<?php endif; ?>

<?php get_footer();?>