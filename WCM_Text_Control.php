<?php

namespace Owlies;
/**
 * Created by PhpStorm.
 * User: nikon_000
 * Date: 1/4/2017
 * Time: 2:42 PM
 */
class WCM_Text_Control extends WCM_Control
{
    /**
     * WCM_Text_Control constructor.
     * @param string $title
     * @param string $section
     * @param string $description
     * @param string|null $default
     * @param string $selector
     */
    public function __construct(string $title, string $section, string $description = '', string $default = null, string $selector = '')
    {
        parent::__construct($title, $section, $description, $default, $selector);
        $this->control_options = array(
            'label' => $this->title,
            'section' => $this->section,
            'settings' => $this->id . '__settings',
            'type' => 'text'
        );
    }

    public function render(\WP_Customize_Manager $wp_customize)
    {
        $this->add_default_setting($wp_customize);

        $wp_customize->add_control(new \WP_Customize_Control($wp_customize,
            $this->id, $this->control_options));
    }
}