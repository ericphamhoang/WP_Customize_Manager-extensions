<?php

namespace Owlies;
/**
 * Created by PhpStorm.
 * User: nikon_000
 * Date: 1/4/2017
 * Time: 2:42 PM
 */
class WCM_Textarea_Control extends WCM_Control
{
    public function render(\WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_setting($this->id . '__settings', array(
            'default' => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control(new \WP_Customize_Control($wp_customize,
            $this->id,
            array(
                'label' => $this->title,
                'section' => $this->section,
                'settings' => $this->id . '__settings',
                'type' => 'textarea'
            )));
    }
}