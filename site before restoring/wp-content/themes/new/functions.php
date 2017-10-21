<?php 

function load_style_script() {
	wp_enqueue_script('vendor', get_template_directory_uri() .
		'/js/vendor.js');
	wp_enqueue_script('main', get_template_directory_uri() .
	'/js/main.js');
	// wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Kaushan+Script|PT+Sans:400,400i,700|PT+Serif:400,700', false );
	wp_enqueue_style('vendor_style', get_template_directory_uri() .
	'/vendor.css');
	wp_enqueue_style('main_style', get_template_directory_uri() .
	'/style.css');
}

add_action('wp_enqueue_scripts', 'load_style_script');
add_filter('show_admin_bar', '__return_false');

/*Adding own options to general settings */

add_theme_support( 'post-thumbnails' );
add_image_size( 'custom-size', 400, 400, true );

function new_excerpt_length($length) { 
 return 30; 
} 
add_filter('excerpt_length', 'new_excerpt_length'); 



function my_options() {
	// $option_group, $option_name, array( '' )
	add_settings_field('phone', 'Conatct phone numbers', 'display_phone', 'general');
	register_setting(
			'general', 'my_phone_1'
		);
	register_setting(
			'general', 'my_phone_2'
		);
	add_settings_field('adress', 'Clinic address', 'display_address', 'general');
	register_setting(
			'general', 'my_address_1'
		);
	register_setting(
			'general', 'my_address_2'
		);
		register_setting(
			'general', 'my_address_3'
		);
	add_settings_field('working_hours', 'Working Hours', 'display_hours', 'general');
	register_setting(
			'general', 'my_hours_week'
		);
	register_setting(
		'general', 'my_hours_sat'
	);
}

add_action( 'admin_init','my_options' );

function display_phone() {
echo "<input type='text' class='regular-text' name='my_phone_1' value=' " . esc_attr(get_option('my_phone_1')) . " ' > <br> <input type='text' class='regular-text' name='my_phone_2' value=' " . esc_attr(get_option('my_phone_2')) . " ' >";
}
function display_address() {
	echo "<input type='text' class='regular-text' name='my_address_1' value=' " . esc_attr(get_option('my_address_1')) . " ' > <br> <input type='text' class='regular-text' name='my_address_2' value=' " . esc_attr(get_option('my_address_2')) . " ' > <br> <input type='text' class='regular-text' name='my_address_3' value=' " . esc_attr(get_option('my_address_3')) . " ' >";
}
function display_hours() {
	echo "  <label for='hours_weekday'> Weekdays </label> <input type='text' id='hours_weekday' name='my_hours_week' value=' " . esc_attr(get_option('my_hours_week')) . " ' > <br> <label for='hours_sat'> Saturday </label> <input type='text' id='hours_sat' name='my_hours_sat' value=' " . esc_attr(get_option('my_hours_sat')) . " ' >";
}

register_sidebar( array( 
         'name' => 'Social icons',
         'id' => 'icons',
         'class' => 'btn-group',
         'description' => 'Use widget "Text" for adding HTML-code for displaying icons',
        'before_widget' => '',
		'after_widget'  => '',
         	) );

register_nav_menus( array( 
	'mob_menu' => 'menu for mobile devices',
	'pc_menu' => 'menu for pc'
) ); 


 ?>