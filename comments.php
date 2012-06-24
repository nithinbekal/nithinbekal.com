
<?php if (!empty($post->post_password) && $_COOKIE['wp-postpass_'.COOKIEHASH]!=$post->post_password) : ?>
  <p id="comments-locked">Enter your password to view comments.</p>
  <?php return; ?>
<?php endif; ?>

<h2 id="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?>
  <?php if ( comments_open() ) : ?>
    <a href="#postcomment" title="<?php _e("Leave a comment"); ?>">&raquo;</a>
  <?php endif; ?>
</h2>

<?php if ( have_comments() ) : ?>
<ol id="commentlist">

  <?php foreach ($comments as $comment) : ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
      <header>
        <cite>
          <span class="comment-author"><?php comment_author_link() ?></span>
          &#8212; <small><?php comment_type(_x('', 'noun'), __('(Trackback)'), __('(Pingback)')); ?></small>
          <?php comment_date() ?> at <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a>
        </cite>
        <small><?php edit_comment_link(__("edit")); ?></small>
      </header>
      <div class="comment-text">
		<?php if(function_exists('get_avatar')) { echo get_avatar($comment, '50'); } ?>
        <?php comment_text() ?>
      </div>
    </li>
  <?php endforeach; ?>
</ol>

<?php else : // If there are no comments yet ?>

  <p><?php _e('Be the first to comment here.'); ?></p>

<?php endif; ?>

<?php if ( comments_open() ) : ?>

  <h2 id="postcomment"><?php _e('Leave a comment'); ?></h2>

  <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url( get_permalink() ) );?></p>
  <?php else : ?>

    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

      <?php if ( is_user_logged_in() ) : ?>

        <p><?php printf(__('Logged in as %s.'), '<a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a>'); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Log out of this account') ?>"><?php _e('Log out &raquo;'); ?></a></p>

      <?php else : ?>

        <p><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" />
        <label for="author"><small><?php _e('Name'); ?> <?php if ($req) _e('(required)'); ?></small></label></p>

        <p><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" />
        <label for="email"><small><?php _e('Mail (will not be published)');?> <?php if ($req) _e('(required)'); ?></small></label></p>

        <p><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
        <label for="url"><small><?php _e('Website'); ?></small></label></p>

      <?php endif; ?>

      <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

      <p>
        <input name="submit" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment'); ?>" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
        <span id="comments-feed-link-trackback">
          <?php post_comments_feed_link(__('<abbr title="Really Simple Syndication">RSS</abbr> feed for comments on this post.')); ?> |
          <?php if ( pings_open() ) : ?>
            <a href="<?php trackback_url() ?>" rel="trackback"><?php _e('TrackBack <abbr title="Universal Resource Locator">URL</abbr>'); ?></a>
          <?php endif; ?>
        </span>
      </p>
      
      <?php do_action('comment_form', $post->ID); ?>
    </form>
  
  <?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
    
    <p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
    
<?php endif; ?>
