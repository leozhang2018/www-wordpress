<?php get_header()?>
<?php while ( have_posts() ) : the_post(); ?>
    <section class="content commom-page">
        <div class="center">
            <h1 class="h1-page-heading"><?php the_title(); ?></h1>
            <div class="page-content">
                <?php the_content();?>
            </div>
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer();?>