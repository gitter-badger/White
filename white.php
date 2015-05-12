<?php
/*
  Plugin Name: White Options
  Plugin URI: http://www.sceko.com/
  Description: White theme options for bbPress
  Version: 1.0
  Author: Sceko
  Author URI: http://www.sceko.com/
  License: GPL2
*/

add_action('admin_menu', 'white_menu');
function white_menu() {
	add_menu_page('White Options', 'White Options', 'administrator', 'white', 'white_stranica');
	add_action( 'admin_init', 'register_mysettings' );
}

function register_mysettings() {
	register_setting( 'white-settings', 'white_kategorija_1' );
	register_setting( 'white-settings', 'white_kategorija_2' );
	register_setting( 'white-settings', 'white_kategorija_3' );
  register_setting( 'white-settings', 'white_kategorija_4' );
	register_setting( 'white-settings', 'white_kategorija_5' );
	register_setting( 'white-settings', 'white_boja_1' );
	register_setting( 'white-settings', 'white_boja_2' );
	register_setting( 'white-settings', 'white_boja_3' );
	register_setting( 'white-settings', 'white_boja_4' );
	register_setting( 'white-settings', 'white_boja_5' );
}

function white_stranica() {
?>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<div class="wrap">
<h2>White Options</h2><hr>
<form method="post" action="options.php">
<?php settings_fields( 'white-settings' ); ?>
<?php do_settings_sections( 'white-settings' ); ?>
<div class="row">
<div class="col-md-6">
    <label>Forums</label>
    <p>Please enter the forums that you have created in your bbPress.</p>
    <input type="text" class="form-group form-control input-sm" id="white_kategorija_1" name="white_kategorija_1" value="<?php echo esc_attr( get_option('white_kategorija_1') ); ?>">
    <input type="text" class="form-group form-control input-sm" id="white_kategorija_2" name="white_kategorija_2" value="<?php echo esc_attr( get_option('white_kategorija_2') ); ?>">
    <input type="text" class="form-group form-control input-sm" id="white_kategorija_3" name="white_kategorija_3" value="<?php echo esc_attr( get_option('white_kategorija_3') ); ?>">
    <input type="text" class="form-group form-control input-sm" id="white_kategorija_4" name="white_kategorija_4" value="<?php echo esc_attr( get_option('white_kategorija_4') ); ?>">
    <input type="text" class="form-group form-control input-sm" id="white_kategorija_5" name="white_kategorija_5" value="<?php echo esc_attr( get_option('white_kategorija_5') ); ?>">
</div>
<div class="col-md-6">
    <label>Color</label>
    <p>Enter here the color for the forum that you entered on the left.</p>
    <select id="white_boja_1" name="white_boja_1" class="form-group form-control input-sm">
    <option value="<?php echo esc_attr( get_option('white_boja_1')); ?>">The selected color is: <?php echo ucfirst(esc_attr( get_option('white_boja_1')) ); ?></option>
    <option value="siva">Gray</option>
    <option value="zelena">Green</option>
    <option value="plava">Blue</option>
    <option value="crvena">Red</option>
    <option value="narandzasta">Orange</option>
    </select>
    <select id="white_boja_2" name="white_boja_2" class="form-group form-control input-sm">
   <option value="<?php echo esc_attr( get_option('white_boja_2')); ?>">The selected color is: <?php echo ucfirst(esc_attr( get_option('white_boja_2')) ); ?></option>
    <option value="siva">Gray</option>
    <option value="zelena">Green</option>
    <option value="plava">Blue</option>
    <option value="crvena">Red</option>
    <option value="narandzasta">Orange</option>
    </select>
    <select id="white_boja_3" name="white_boja_3" class="form-group form-control input-sm">
    <option value="<?php echo esc_attr( get_option('white_boja_3')); ?>">The selected color is: <?php echo ucfirst(esc_attr( get_option('white_boja_3')) ); ?></option>
    <option value="siva">Gray</option>
    <option value="zelena">Green</option>
    <option value="plava">Blue</option>
    <option value="crvena">Red</option>
    <option value="narandzasta">Orange</option>
    </select>
    <select id="white_boja_4" name="white_boja_4" class="form-group form-control input-sm">
    <option value="<?php echo esc_attr( get_option('white_boja_4')); ?>">The selected color is: <?php echo ucfirst(esc_attr( get_option('white_boja_4')) ); ?></option>
    <option value="siva">Gray</option>
    <option value="zelena">Green</option>
    <option value="plava">Blue</option>
    <option value="crvena">Red</option>
    <option value="narandzasta">Orange</option>
    </select>
    <select id="white_boja_5" name="white_boja_5" class="form-group form-control input-sm">
    <option value="<?php echo esc_attr( get_option('white_boja_5')); ?>">The selected color is: <?php echo ucfirst(esc_attr( get_option('white_boja_5')) ); ?></option>
    <option value="siva">Gray</option>
    <option value="zelena">Green</option>
    <option value="plava">Blue</option>
    <option value="crvena">Red</option>
    <option value="narandzasta">Orange</option>
    </select>
</div>
</div>
<?php submit_button(); ?>
</form>
</div>
<?php } 

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
      echo '<i data-toggle="tooltip" data-placement="bottom" title="Zaključano" style="width:24px;height:24px;text-align:center;background-color:#96A2AF;border-radius:50%;padding:4px;border:2px solid #fff;" class="fa fa-lock"></i>';
}
add_action( 'bbp_theme_before_topic_title', 'closed_topics' );

function sticky_topics() {
   $topic_id = bbp_get_topic_id();
   if ( get_post_type( $topic_id ) == bbp_get_topic_post_type() && bbp_is_topic_sticky( $topic_id ) )
      echo '<i data-toggle="tooltip" data-placement="bottom" title="Izdvojeno" style="width:24px;height:24px;text-align:center;background-color:#D13E32;border-radius:50%;padding:4px;border:2px solid #fff;" class="fa fa-thumb-tack"></i>';
}
add_action( 'bbp_theme_before_topic_title', 'sticky_topics' );

function redirect_login_users() {
    global $user;
    if (!is_admin()) {
        return admin_url();
    } else {
        return home_url('forum');
    } 
}
add_filter('login_redirect', 'redirect_login_users', 10);


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

function remember_me() {
    echo "<script>document.getElementById('rememberme').checked = true;</script>";
}
add_filter( 'login_footer', 'remember_me' );

?>