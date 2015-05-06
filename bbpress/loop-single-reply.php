<?php

/**
 * Replies Loop - Single Reply
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<div class="boja" id="post-<?php bbp_reply_id(); ?>" style="margin-bottom:40px;">
<div class="row">
<div class="col-md-12">
<div class="pull-left" style="margin-right:25px;">
<?php do_action( 'bbp_theme_before_reply_author_details' ); ?>
<?php bbp_reply_author_link( array( 'type' => 'avatar', 'size' => 64 ) ); ?>
<?php do_action( 'bbp_theme_after_reply_author_details' ); ?>
</div>
<?php if ( is_user_logged_in() ) : ?>
<div class="pull-right">
<?php if ( bbp_is_topic(bbp_get_reply_id()) ) : ?>
<bottom data-toggle="tooltip" data-placement="bottom" title="Odgovorite na temu" class="btn btn-default"><?php echo bbp_get_topic_reply_link(); ?></bottom>
<?php endif; ?>
<?php if ( bbp_is_reply(bbp_get_reply_id()) ) : ?>
<bottom data-toggle="tooltip" data-placement="bottom" title="Odgovorite na komentar" class="btn btn-default"><?php echo bbp_get_reply_to_link(); ?></bottom>
<?php endif; ?>
<?php if ( !bbp_show_lead_topic() == bbp_is_topic(bbp_get_reply_id()) ) : ?>
<bottom data-toggle="tooltip" data-placement="bottom" title="Dodaj u omiljene" class="btn btn-default"><?php bbp_user_favorites_link(); ?></bottom>
<?php endif; ?>
<div class="btn-group">
<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></button>
<ul class="dropdown-menu dropdown-menu-right" role="menu">
<?php if ( bbp_is_topic(bbp_get_reply_id()) ) : ?>
<li><?php echo bbp_get_topic_edit_link(); ?></li>
<li><?php echo bbp_get_topic_stick_link(); ?></li>
<li><?php echo bbp_get_topic_close_link(); ?></li>
<li><?php echo bbp_get_topic_trash_link(); ?></li>
<li><?php echo bbp_get_topic_spam_link(); ?></li>
<?php endif; ?>
<?php if ( bbp_is_reply(bbp_get_reply_id()) ) : ?>
<li><?php echo bbp_get_reply_edit_link(); ?></li>
<li><?php echo bbp_get_reply_move_link(); ?></li>
<li><?php echo bbp_get_reply_trash_link(); ?></li>
<li><?php echo bbp_get_reply_spam_link(); ?></li>
<?php endif; ?>
</ul>
</div>
</div>
<?php endif; ?>
<div class="ime">
<?php bbp_reply_author_link( array( 'show_role' => false, 'type' => 'name' ) ); ?> <?php bbp_reply_post_date(0, true); ?>
</div>
<div class="poruka">
<?php do_action( 'bbp_theme_before_reply_content' ); ?>
<?php bbp_reply_content(); ?>
<?php do_action( 'bbp_theme_after_reply_content' ); ?>
</div>
</div>
</div>
</div><!-- .reply -->
