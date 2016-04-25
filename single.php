<?php get_header(); ?>

  <div class="main">
    <section class="row">
        <div class="two columns">
            &nbsp;
        </div>
        <div class="eight columns">
<!-- BEGIN SINGLE PHP -->
            <?php
            if (have_posts() ) {
                /* OUR DATA CONTEXT IS DEFINED  */
                while ( have_posts() ) {
                    the_post();
                    if ( has_post_thumbnail() ) { ?>
                        <div class="post-thumbnail"><?php the_post_thumbnail('large'); ?></div>
                    <?php } ?>
                    <h4><?php the_title(); ?></h4>
                    <div class="date-author-single">
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?> </small>
                    </div>
                    <?php the_content();
                } // end while
            } // end if
            ?>
<!-- END SINGLE PHP -->
        </div>
        <div class="two columns">
            &nbsp;
        </div>
    </section>
  </div>

<?php get_footer(); ?>
