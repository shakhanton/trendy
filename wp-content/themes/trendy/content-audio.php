<?php the_content(); ?>

<div class="post-title-blog-post"><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
<?php echo get_the_author(); ?></p>
<?php the_category(); ?>
<?php
$comments_count = wp_count_comments( get_the_ID() );
echo $comments_count->approved . " comments";
?>
<small>Posted on: <?php the_time('d M'); ?></small>
<?php the_excerpt(); ?>
<hr>