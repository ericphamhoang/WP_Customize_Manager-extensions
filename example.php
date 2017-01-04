<?php

$header_section = new WCM_Section('Header');

$header_section->add_control(new WCM_Image_Control('Header Image', $header_section->id));

$header_section->render($wp_customize);

$footer_section = new WCM_Section('Footer');

$footer_section->add_control(new WCM_Image_Control('Footer Image', $footer_section->id));

$footer_section->render($wp_customize);