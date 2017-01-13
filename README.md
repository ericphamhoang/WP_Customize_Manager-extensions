# WP_Customize_Manager-extensions

This package helps to quickly add WP_Customize Controls to your theme

Notice: Advanced Custom Fields is more recommended to add specific page's fields 

Usage: 

1. Download the package and copy to your theme folder
2. add this line in your wordpress theme functions.php 
  require_once __DIR__.'/WP_Customize_Manager-extensions/autoload.php'
  
 Example to add a new text field

	require_once __DIR__.'/WP_Customize_Manager-extensions/autoload.php';

	add_action('customize_register', function($wp_customize){

	$extra_section = new \Owlies\WCM_Section('Extra Information');

	$extra_section->add_control(new \Owlies\WCM_Text_Control('Phone', $extra_section->id, '', '0420735367',  ".extra-phone" ));

	$extra_section->render($wp_customize);

	});
 
in your theme template, add: 

	<p class="extra-phone" style="color:white">
	<?php
	$wcm = new \Owlies\WCM_Utils();

	echo $wcm->get_theme_setting('Phone');
	?>
	</p>
