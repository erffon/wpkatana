<!-- post comments -->
<div class="comments bordered padding-30 rounded">
    <ul class="comments">
        <?php
        wp_list_comments(
            array('callback' => 'ktn_comments_list',
                'style' => 'ul',
                'avatar_size' => 70)

        ) ?>
    </ul>
</div>
<div class="spacer" data-height="50" id="commentbox"></div>
<!-- section header -->
<div class="section-header mt-4">
    <h3 class="section-title">ارسال نظر</h3>
    <img src="<?php echo get_template_directory_uri() . '/assets/images/wave.svg' ?>" class="wave"
         alt="wave"/>
</div>
<!-- comment form -->
<div class="comment-form rounded bordered padding-30">

    <form id="commentform" class="comment-form" method="post"
          action="<?php echo get_site_url() . '/wp-comments-post.php'; ?>">

        <div class="messages"></div>

        <div class="row">

            <div class="column col-md-12">
                <!-- Comment textarea -->
                <div class="form-group">
                                        <textarea name="comment" id="comment" class="form-control" rows="4"
                                                  placeholder="متن نظر خود را بنویسید ..."
                                                  required="required"></textarea>
                </div>
            </div>
            <?php if (!is_user_logged_in()) { ?>
                <div class="column col-md-6">
                    <!-- Email input -->
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="InputEmail"
                               placeholder="ایمیل خود را بنویسید" required="required">
                    </div>
                </div>

                <div class="column col-md-6">
                    <!-- Name input -->
                    <div class="form-group">
                        <input type="text" class="form-control" name="url" id="InputWeb"
                               placeholder="وبسایت خود را وارد کنید">
                    </div>
                </div>

                <div class="column col-md-12">
                    <!-- Email input -->
                    <div class="form-group">
                        <input type="text" class="form-control" id="InputName" name="name"
                               placeholder="نام خود را بنویسید" required="required">
                    </div>
                </div>
            <?php } ?>
        </div>

        <button type="submit" name="submit" id="submit" value="submit" class="btn btn-default">
            ارسال پیام
        </button><!-- Submit Button -->
        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
        <?php if (is_user_logged_in()) {
            wp_nonce_field('_wp_unfiltered_html_comment', '_wp_unfiltered_html_comment');
        } ?>
    </form>
</div>