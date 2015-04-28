<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<meta name="revisit-after" content="1 days">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bbpress/style.css" type="text/css" media="screen">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<<<<<<< HEAD
=======
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
>>>>>>> origin/master
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed animated tada" id="btn" data-toggle="collapse" data-target="#meni">Meni <i class="fa fa-bars"></i></button>
<?php if (is_single('')) : ?>
<a href="javascript:history.back();" data-toggle="tooltip" data-placement="bottom" title="Vrati se nazad" class="btn btn-default navbar-btn pull-left" id="nazad" style="margin-right:15px;"><i class="fa fa-angle-left"></i></a>
<?php endif; ?>
<a class="navbar-brand animated fadeInDown" id="limun" href="<?php echo esc_url(home_url()); ?>/forum" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?> Forum</a>
</div>
<div class="collapse navbar-collapse" id="meni">
<ul class="nav navbar-nav hidden-lg hidden-sm">
<?php if (is_user_logged_in()) : ?>
<a href="#new-post" class="zapocni btn navbar-btn pull-left btn-success" style="margin-left:15px;margin-right:15px;">Započni temu</a>
<a href="<?php echo bbp_get_user_profile_url( get_current_user_id() ); ?>edit/" class="navbar-btn pull-left navbar-gravatar"><?php global $current_user; get_currentuserinfo(); echo get_avatar($current_user->user_email, 32 ); ?></a>
<?php else : ?>
<div class="btn-group pull-left navbar-btn" style="margin-left:15px;">
<a class="btn btn-default" href="" data-toggle="modal" data-target="#prijava">Prijava</a>
<a class="btn btn-success" href="" data-toggle="modal" data-target="#registracija">Registracija</a>
</div>
<?php endif; ?>
</ul>
<ul class="nav navbar-nav pull-right hidden-xs hidden-sm">
<form role="search" method="get" id="bbp-searchform" action="<?php echo esc_url( home_url( 'forum/' ) ); ?>" class="navbar-form  navbar-left">
<div class="form-group has-feedback has-feedback-left">
<input data-toggle="tooltip" data-placement="bottom" title="Pronađite željenu temu" type="text" name="ts" id="ts" class="form-control" placeholder="Pretraga...">
<span class="fa fa-search form-control-feedback" aria-hidden="true"></span>
</div>
</form>
<div class="btn-group navbar-left" role="group">
<button type="button" class="btn navbar-btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bars"></i></button>
<ul class="dropdown-menu dropdown-menu-right" role="menu">
<li<?php if (is_single('generalno')) { echo ' class="active"'; } ?>><a href="<?php echo esc_url(home_url()); ?>/generalno"><i class="fa fa-desktop"></i> Generalno</a></li>
<li class="divider"></li>
<li<?php if (is_single('pomoc')) { echo ' class="active"'; } ?>><a href="<?php echo esc_url(home_url()); ?>/pomoc"><i class="fa fa-life-ring"></i> Pomoć</a></li>
</ul>
</div>
<?php if (is_user_logged_in()) : ?>
<li class="dropdown navbar-right">
<a href="#" class="dropdown-toggle navbar-gravatar" data-toggle="dropdown"> <?php global $current_user; get_currentuserinfo(); echo get_avatar($current_user->user_email, 32 ); ?></a>
<ul class="dropdown-menu" role="menu" >
<li><a href="<?php echo bbp_get_user_profile_url( get_current_user_id() ); ?>edit/"><i class="fa fa-pencil-square-o"></i> Izmeni profil</a></li>
<li><a href="<?php echo bbp_get_user_profile_url( get_current_user_id() ); ?>edit/#user_login"><i class="fa fa-lock"></i> Izmeni lozinku</a></li>
<li class="divider"></li>
<li><a href="<?php echo wp_logout_url(); ?>"><i class="fa fa-sign-out"></i> Odjavi se</a></li>
</ul>
</li>
<?php else : ?>
<div class="btn-group pull-right navbar-btn" style="margin-left:15px;">
<a class="btn btn-default" href="" data-toggle="modal" data-target="#prijava">Prijava</a>
<a class="btn btn-success" href="" data-toggle="modal" data-target="#registracija">Registracija</a>
</div>
<?php endif; ?>
</ul>
</div>
</div>
</nav>
<?php if (is_single()) : ?>
<div class="header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1><?php the_title();?></h1>
</div>
</div>
</div>
</div>
<?php endif; ?>
<div class="container" style="margin-top:40px;">
<div class="row">
<?php if (is_archive() ||  bbp_is_single_forum() || bbp_is_single_view()) : ?>
<div class="col-md-2">
<ul class="nav-pills nav-stacked hidden-xs hidden-sm" data-spy="affix">
<?php if ( is_user_logged_in() ) : ?>
<a href="#new-post" class="zapocni btn btn-success">Započni temu</a>
<?php endif; ?>
<li <?php if ( is_archive('forum')) { echo ' class="active"'; } ?>><a href="<?php echo esc_url(home_url()); ?>/forum"><i class="fa fa-comments-o"></i> Poslednje teme</a></li>
<li <?php if ( bbp_is_single_view()) { echo ' class="active"'; } ?>><a href="<?php echo esc_url(home_url()); ?>/forum/pregled/no-replies/"><i class="fa fa-comment-o"></i> Neodgovorene</a></li>
<li><a href="<?php echo bbp_get_user_profile_url( get_current_user_id() ); ?>omiljene/" class="hidden-xs hidden-sm"><i class="fa fa-star"></i> Omiljene teme</a></li>
</ul>
</div>
<div class="col-md-10">
<article><?php the_content(); ?></article>
</div>
<?php else : ?>
<div class="col-md-12"><article><?php the_content(); ?></article></div>
<?php endif; ?>
<div class="col-md-12"><div class="copyright text-right"><a href="<?php echo esc_url(home_url()); ?>/forum" title="Powered by bbPress">Powered by bbPress</a></div></div>
</div>
<?php if (is_user_logged_in()) : ?>
<?php else : ?>
<div class="modal fade" id="prijava" tabindex="-1" role="dialog" aria-labelledby="prijava" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content text-center">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title text-center" id="prijava">Prijavi se</h4>
</div>
<div class="modal-body">
<form name="login-form" role="form" action="<?php echo site_url( 'wp-login.php', 'login_post' ) ?>" method="post">
<div class="form-group">
<input type="text" name="log" class="form-control" placeholder="Korisničko ime">
</div>
<div class="form-group">
<input type="password" name="pwd" class="form-control" placeholder="Lozinka">
</div>
<p>
<a href="<?php echo wp_lostpassword_url(); ?>" title="Zaboravili ste lozinku?">Zaboravili ste lozinku?</a>
</p>
<div class="form-group">
<button type="submit" name="wp-submit" style="width:100%;" class="btn btn-primary">Prijava</button>
</div>
</form>
</div>
</div>
</div>
</div> 
<div class="modal fade" id="registracija" tabindex="-1" role="dialog" aria-labelledby="registracija" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content text-center">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="registracija">Registruj se</h4>
</div>
<div class="modal-body">
<form name="login-form" role="form" action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
<div class="form-group">
<input type="text" name="user_login" class="form-control" placeholder="Korisničko ime">
</div>
<div class="form-group">
<input type="text" name="user_email" class="form-control" placeholder="E-pošta">
</div>
<p>
<div class="bbp-template-notice" style="">Lozinka će vam biti poslata.</div>
</p>
<button type="submit" name="user-submit" style="width:100%;" class="btn btn-primary">Završi registraciju</button>
<input type="hidden" name="redirect_to" value="<?php echo $_SERVER['REQUEST_URI']; ?>?register=true" />
<input type="hidden" name="user-cookie" value="1">
</form>
</div>
</div>
</div>
</div>
<?php endif; ?>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(
function() {
$(".bbp-topic-reply-link").click(function() {
$("#new-post").fadeToggle();
});
$(".bbp-reply-to-link").click(function() {
$("#new-post").fadeToggle();
});
$(".zapocni").click(function() {
$("#new-post").fadeToggle();
});
$("body").mouseup(function(e) {
var subject = $("#new-post"); 
if(e.target.id != subject.attr('id') && !subject.has(e.target).length) { subject.fadeOut(); }
});
});
</script>
<script type="text/javascript">
$(function () {
$('[data-toggle="tooltip"]').tooltip()
});
</script>
<?php wp_footer(); ?>
</body>
</html>
