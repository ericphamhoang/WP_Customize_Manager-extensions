<?php

namespace Owlies;
/**
 * Created by PhpStorm.
 * User: nikon_000
 * Date: 1/4/2017
 * Time: 2:42 PM
 */
class WCM_Utils
{
    public function get_theme_setting($name)
    {
        return get_theme_mod(sanitize_title($name)."__settings");
    }

    public function get_site_logo()
    {
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        return $image[0];
    }
}