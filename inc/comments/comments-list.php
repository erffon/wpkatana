<?php

function ktn_comments_list($comment, $args, $depth)
{
    $comment = $GLOBALS['comment']; ?>
    <!-- comment item -->
    <li <?php comment_class('comment rounded'); ?> id="comment-<?php comment_ID(); ?>">
        <div class="thumb">
            <?php echo get_avatar($comment->comment_author_email, $args['avatar_size'], '', $comment->comment_author, array(
                'class' => 'rounded-circle',
            )); ?>
        </div>
        <div class="details">
            <h4 class="name"><a href="#"><?php echo $comment->comment_author; ?></a></h4>
            <span class="date"><?php echo $comment->comment_date; ?></span>
            <p><?php echo $comment->comment_content; ?></p>
            <a href="#commentbox" class="reply-btn btn btn-default btn-sm"
               data-comment-id="<?php echo $comment->comment_ID ?>">پاسخ</a>
        </div>
    </li>

    <?php
}