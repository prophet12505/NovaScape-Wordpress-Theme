<?php get_header();?>
    <div class="row">
    <div class="col-sm-8 blog-main">
        <?php 
          if( have_posts()):
            while(have_posts()): 
              //set up the post
              the_post();
              get_template_part('content',get_post_format());
            endwhile;
          endif;
        ?>
        <nav>
            <ul class="pager">
                <li><?php previous_posts_link('previous') ?>Previous</li>
                <li><?php next_posts_link('next') ?>Next</li>
            </ul>
        </nav>
    </div><!-- /.blog-main -->
      <?php get_sidebar();?>
    </div><!-- /.row -->

    <?php get_footer();?>