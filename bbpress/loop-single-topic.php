<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<ul id="bbp-topic-<?php bbp_topic_id(); ?>">
<li style="margin-bottom:30px;">
<div class="row">
<div class="col-md-10">
<div class="pull-left" style="margin-right:25px;">
<?php do_action( 'bbp_theme_before_topic_freshness_author' ); ?>
<?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'show_role' => false, 'type' => 'avatar', 'size' => '48' ) ); ?>
<?php do_action( 'bbp_theme_after_topic_freshness_author' ); ?>
</div>
<div class="naslov">
<header>
<?php do_action( 'bbp_theme_before_topic_title' ); ?> 
<a <?php bbp_topic_class(); ?> href="<?php bbp_topic_permalink(); ?>" title="<?php bbp_topic_title(); ?>"><?php bbp_topic_title(); ?></a>
<?php do_action( 'bbp_theme_after_topic_title' ); ?>
<?php bbp_topic_pagination(); ?>
<?php do_action( 'bbp_theme_before_topic_meta' ); ?>
<?php do_action( 'bbp_theme_after_topic_meta' ); ?>
</header>
</div>
<div class="autor">
<span style="font-weight:600;"><?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'show_role' => false, 'type' => 'name' ) ); ?></span> pre <?php bbp_topic_freshness_link(); ?> 
</div>
</div>
<div class="col-md-2">
<span class="pull-right text-center hidden-xs hidden-sm">
<span class="broj"><?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?></span><br>
<p class="odgovora">odgovora<p>
</span>
</div>
</div>
</li>
</ul><!-- #bbp-topic-<?php bbp_topic_id(); ?> -->