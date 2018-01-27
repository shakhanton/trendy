<?php get_header(); ?>
    <div class="row">
        <div class="container">
            <div class="col-xs-12 col-sm-8">

                <div class="row text-center no-margin">
                    <?php

                    if (have_posts()):

                        while (have_posts()): the_post(); ?>

                            <?php get_template_part('content', get_post_format()); ?>

                        <?php endwhile;

                    endif;

                    ?>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>