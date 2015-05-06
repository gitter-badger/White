# Installation

1) First download teme from https://github.com/Sceko/White/archive/master.zip
2) After upload bbPress folder in your WordPress teme like /wp-content/themes/your-teme/[here]
3) Now u most install plugin https://wordpress.org/plugins/bbpress-loadmore-topics/
4) Change from /wp-admin/options-general.php?page=bbpress Forum Root to <strong>forum</strong> and Forum root should show to <strong>Topics by Freshness</strong> 
5) And last add this in your functions.php
<pre>
show_admin_bar(false);
 
function isa_dequeue_bbp_style() {
    if (class_exists('bbPress')) {
      if (!is_bbpress()) {
        wp_dequeue_style('bbp-default');
        wp_dequeue_style('bbp_private_replies_style');
        wp_dequeue_script('bbpress-editor');
      }
    }
}
add_action( 'wp_enqueue_scripts', 'isa_dequeue_bbp_style', 99 );
 
function closed_topics() {
   $topic_id = bbp_get_topic_id();
   if ( get_post_type( $topic_id ) == bbp_get_topic_post_type() && bbp_is_topic_closed( $topic_id ) )
      echo '<i style="color:#ECF1F8;" class="glyphicon glyphicon-lock"></i>';
}
add_action( 'bbp_theme_before_topic_title', 'closed_topics' );
 
function sticky_topics() {
   $topic_id = bbp_get_topic_id();
   if ( get_post_type( $topic_id ) == bbp_get_topic_post_type() && bbp_is_topic_sticky( $topic_id ) )
      echo '<i style="color:#5CB85C;" class="glyphicon glyphicon-pushpin"></i>';
}
add_action( 'bbp_theme_before_topic_title', 'sticky_topics' );
 
function login_redirect( $redirect_to, $request, $user ) {
  return home_url('forum');
}
add_filter( 'login_redirect', 'login_redirect', 10, 3 );
 
function redirect_non_admin_users() {
if (!current_user_can('manage_options') && '/wp-admin/admin-ajax.php' != $_SERVER['PHP_SELF']) {
    wp_redirect(home_url('forum'));
    exit;
  }
}
add_action('admin_init', 'redirect_non_admin_users');
 
function login_email($username) {
  $user = get_user_by_email($username);
  if(!empty($user->user_login))
  $username = $user->user_login;
  return $username;
}
add_action('wp_authenticate', 'login_email');
</pre>

Uputstvo na Srpskom: http://www.oklop.me/forum/tema/white-tema-za-bbpress/

<img src="http://i.pics.rs/G9NxG" alt="" class="img-thumbnail" />