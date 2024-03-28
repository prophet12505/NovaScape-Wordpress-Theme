<?php get_header();?>
    <div class="row">
    <div class="col-sm-12">
        <?php 
        if( have_posts()):
            while(have_posts()):   the_post();
            get_template_part('content-single',get_post_format());
            // if comment is opne and comment number is available
            if(comments_open() || get_comments_number()):
                comments_template();//look for comments.php
            endif;
            endwhile;
        endif;
        ?>
    </div><!-- /.col -->
    </div><!-- /.row -->
    <?php get_footer();?>
<!-- this automatically overwrite index.php   -->
