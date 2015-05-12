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
<div class="pull-left" style="margin-right:20px;">
<?php do_action( 'bbp_theme_before_topic_freshness_author' ); ?>
<?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'show_role' => false, 'type' => 'avatar', 'size' => '48' ) ); ?>
<?php do_action( 'bbp_theme_after_topic_freshness_author' ); ?>
<span class="status"><?php do_action( 'bbp_theme_before_topic_title' ); ?></span>
</div>
<div class="naslov">
<header>
<a <?php bbp_topic_class(); ?> href="<?php bbp_topic_permalink(); ?>" title="<?php bbp_topic_title(); ?>"><?php bbp_topic_title(); ?></a>
<?php do_action( 'bbp_theme_after_topic_title' ); ?>
<?php bbp_topic_pagination(); ?>
<?php do_action( 'bbp_theme_before_topic_meta' ); ?>
<?php do_action( 'bbp_theme_after_topic_meta' ); ?>
</header>
</div>
<div class="autor">
<?php if ( !bbp_is_single_forum()) : ?>
<?php if (bbp_get_topic_forum_title() == get_option('white_kategorija_1')) : ?>
<?php printf( __( '<a class="%3$s" href="%1$s">%2$s</a>', 'bbpress' ), bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ), get_option('white_boja_1') ); ?>
<?php endif; ?>
<?php if (bbp_get_topic_forum_title() == get_option('white_kategorija_2')) : ?>
<?php printf( __( '<a class="%3$s" href="%1$s">%2$s</a>', 'bbpress' ), bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ), get_option('white_boja_2') ); ?>
<?php endif; ?>
<?php if (bbp_get_topic_forum_title() == get_option('white_kategorija_3')) : ?>
<?php printf( __( '<a class="%3$s" href="%1$s">%2$s</a>', 'bbpress' ), bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ), get_option('white_boja_3') ); ?>
<?php endif; ?>
<?php if (bbp_get_topic_forum_title() == get_option('white_kategorija_4')) : ?>
<?php printf( __( '<a class="%3$s" href="%1$s">%2$s</a>', 'bbpress' ), bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ), get_option('white_boja_4') ); ?>
<?php endif; ?>
<?php if (bbp_get_topic_forum_title() == get_option('white_kategorija_5')) : ?>
<?php printf( __( '<a class="%3$s" href="%1$s">%2$s</a>', 'bbpress' ), bbp_get_forum_permalink( bbp_get_topic_forum_id() ), bbp_get_forum_title( bbp_get_topic_forum_id() ), get_option('white_boja_5') ); ?>
<?php endif; ?>
<?php endif; ?>
<span style="font-weight:600;"><?php bbp_author_link( array( 'post_id' => bbp_get_topic_last_active_id(), 'show_role' => false, 'type' => 'name' ) ); ?></span> pre <?php bbp_topic_freshness_link(); ?> 
</div>
</div>
<div class="col-md-2">
<div class="pull-right text-center hidden-xs hidden-sm">
<span class="broj"><?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?></span>
<p class="odgovora">odgovora</p>
</div>
</div>
</div>
</li>
</ul><!-- #bbp-topic-<?php bbp_topic_id(); ?> -->