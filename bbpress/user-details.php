<?php

/**
 * User Details
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

	<?php do_action( 'bbp_template_before_user_details' ); ?>

	<div id="bbp-single-user-details">

			<ul class="nav-pills nav-stacked">
<!--
				<li class="<?php if ( bbp_is_single_user_profile() ) :?>active<?php endif; ?>">
						<a class="url fn n" href="<?php bbp_user_profile_url(); ?>" title="<?php printf( esc_attr__( "%s's Profile", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>" rel="me"><i class="fa fa-user"></i> <?php _e( 'Profile', 'bbpress' ); ?></a>
				</li>

-->

				<li class="<?php if ( bbp_is_single_user_topics() ) :?>active<?php endif; ?>">
						<a href="<?php bbp_user_topics_created_url(); ?>" title="<?php printf( esc_attr__( "%s's Topics Started", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><i class="fa fa-comments-o"></i> <?php _e( 'All Discussions', 'bbpress' ); ?></a>
				</li>

				<li class="<?php if ( bbp_is_single_user_replies() ) :?>active<?php endif; ?>">
						<a href="<?php bbp_user_replies_created_url(); ?>" title="<?php printf( esc_attr__( "%s's Replies Created", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><i class="fa fa-comment-o"></i> <?php _e( 'Unanswered', 'bbpress' ); ?></a>
				</li>

				<?php if ( bbp_is_favorites_active() ) : ?>
					<li class="<?php if ( bbp_is_favorites() ) :?>active<?php endif; ?>">
							<a href="<?php bbp_favorites_permalink(); ?>" title="<?php printf( esc_attr__( "%s's Favorites", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><i class="fa fa-star"></i> <?php _e( 'Following', 'bbpress' ); ?></a>
					</li>
				<?php endif; ?>

<!--
				<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>

					<?php if ( bbp_is_subscriptions_active() ) : ?>
						<li class="<?php if ( bbp_is_subscriptions() ) :?>active<?php endif; ?>">
								<a href="<?php bbp_subscriptions_permalink(); ?>" title="<?php printf( esc_attr__( "%s's Subscriptions", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Subscriptions', 'bbpress' ); ?></a>
						</li>
					<?php endif; ?>

					<li class="<?php if ( bbp_is_single_user_edit() ) :?>active<?php endif; ?>">
							<a href="<?php bbp_user_profile_edit_url(); ?>" title="<?php printf( esc_attr__( "Edit %s's Profile", 'bbpress' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><i class="fa fa-pencil-square-o"></i> <?php _e( 'Izmeni profil', 'bbpress' ); ?></a>
					</li>


				<?php endif; ?>
-->
			</ul>

	</div><!-- #bbp-single-user-details -->

	<?php do_action( 'bbp_template_after_user_details' ); ?>