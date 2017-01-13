# WP_Customize_Manager-extensions

This package helps to quickly add WP_Customize Controls to your theme

Notice: Advanced Custom Fields is more recommended to add specific page's fields 

Usage: 

1. Download the package and copy to your theme folder
2. add this line in your wordpress theme functions.php 
  require_once __DIR__.'/WP_Customize_Manager-extensions/autoload.php'
  
 Example to add a new text field

		add_action('customize_register', function(){

					 $extra_section = new WCM_Section('Extra Information');

					$copyright_section->add_control(new WCM_Text_Control('Phone', $extra_section->id, '', '0420735367',  ".extra-phone" ));

					$copyright_section->render($wp_customize);

		})
 
in your theme template, add: 

		 <p class="extra-phone">
		 <?php 
		 $wcm = new new WCM_Utils();

		 echo $wcm->get_theme_setting('Phone');
		 ?>
		 </p>
