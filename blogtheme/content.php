<div class="blog-post">
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  

    <p class="blog-post-meta">
        <?php the_date(); ?> by <a href="#">
            <?php the_author(); ?>
        </a>
    </p>
    <?php if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title(); ?>" srcset="" class="img-fluid mb-3 img-thumbnail">
    <?php endif;?>
    
    <?php the_content(); ?>
</div>
