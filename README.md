# WP_Customize_Manager-extensions

This package helps to quickly add WP_Customize Controls to your theme

![alt](https://ericphamhoang.github.io/wcm/demo.PNG)

Notice: Advanced Custom Fields is more recommended to add custom fields for specific pages

What WP_Customize supports:

- Live Editing (Good on live site when you can preview your changes before saving them)
- Visual edit links - No more headache finding where to change your website's information. Instead, just click on the edit button and get redirected to the field you need to edit
- Robust refreshing speed - support partial refreshing is super faster than ordinary editing methods : you don't need to refresh the whole post/page again to check your results

Why use this package: 

- object oriented
- help you to quickly add extra datas to your website theme without much knowledge about super complicated Wordpress Codex

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

		<p class="extra-phone">
		<?php
		$wcm = new \Owlies\WCM_Utils();

		echo $wcm->get_theme_setting('Phone');
		?>
		</p>
		
Result: https://ericphamhoang.github.io/wcm/demo.PNG

