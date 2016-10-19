<!--普通文章-->
<article class="post">
	<?php if( has_post_thumbnail()) { // 单篇文章有缩略图的?>
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<a class="thumbnail" style="padding:20px 0px 10px 0;display:block" href="<?php the_permalink() ?>" rel="bookmark"><?php post_thumbnail(800, '');?></a>
		<div class="postcon"><?php the_content("");?></div>
	<?php } else { // 单篇文章没有缩略图?>
		<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<div class="postcon"><?php the_content("");?></div>
	<?php } ?>
</article>