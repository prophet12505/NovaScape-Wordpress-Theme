<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if ( '1' === $comments_number ) {
                echo '1 Comment';
            } else {
                echo $comments_number . ' Comments';
            }
            ?>
        </h2>
        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 48,
                )
            );
            ?>
        </ol>

        <?php the_comments_pagination(); ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments">Comments are closed.</p>
    <?php endif; ?>

    <?php comment_form(); ?>

</div>
