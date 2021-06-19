<?php
/**
 * Plugin Name: Login KrQ
 * Plugin URI: https://www.facebook.com/hungthai99
 * Description: Tuỳ biến lại trang giao diện admin
 * Version: 1.0
 * Author: Thái Hùng
 * Author URI: https://www.facebook.com/hungthai99
 */
/**
 * Hàm thay đỔi logo
 */
function login_krq(){ ?>
    
    <style type="text/css">
        body{
            background-image: url(<?php echo plugins_url('images/banner.jpg', __FILE__); ?>) !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }
        #login h1{
            background: #fff;
            border-radius: 5px;
        }
        #login h1 a{
            background-image: url(<?php echo plugins_url('images/logo.png', __FILE__); ?>);
        }
        #login form{
            border-radius: 5px;
            border: none;
        }
        #login form input{
            border: none;
            border-bottom: 1px solid;
            border-radius: 0;
        }
        #login form input:focus{
            box-shadow: none;
        }
        #rememberme{
            box-shadow: none !important;
            border: 1px solid !important;
        }
        #wp-submit{
            border-radius: 3px !important;
        }
        #nav{
            margin: 15px 0 0 0 !important;
        }
        #nav a, #backtoblog a{
            color:  #fff !important;
        }
        .backup-methods-wrap a{
            color: #fff !important;
        }
    </style>

<?php }
add_action('login_enqueue_scripts', 'login_krq');

/**
 * text footer
 */
function admin_krq_footer_credit( $text ){
    $text = '<p>Design and Develop by Vituto Media.</p>';
    return $text;
}
add_filter('admin_footer_text', 'admin_krq_footer_credit');

/**
 * đổi link logo đăng nhập
 */
function pridio_login_headerurl(){
    return home_url('/');
}
add_filter( 'login_headerurl', 'pridio_login_headerurl');

add_action( 'login_redirect', 'pridio_login_redirect');
function pridio_login_redirect(){
return 'https://vitutomedia.com/';
}

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
  
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
	 
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
	 
function custom_dashboard_help() {
echo '<p>Welcome to Custom Blog Theme! Need help? Contact the developer <a href="mailto:yourusername@gmail.com">here</a>. For WordPress Tutorials visit: <a href="https://www.wpbeginner.com" target="_blank">WPBeginner</a></p>';
}
