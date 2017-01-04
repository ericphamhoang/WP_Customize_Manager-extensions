<?php

namespace Owlies;
/**
 * Created by PhpStorm.
 * User: nikon_000
 * Date: 1/4/2017
 * Time: 2:42 PM
 */
class WCM_Section
{
    /**
     * @var array(\WP_Customize_Image_Control)
     */
    var $controls;

    /**
     * @var string $title
     */
    var $title;

    /**
     * @var string $id
     */
    var $id;

    public function __construct($title)
    {
        $this->title = $title;
        $this->id = sanitize_title($title);
        $this->controls = array();
    }

    public function add_control($control)
    {
        array_push($this->controls, $control);
    }

    public function render(\WP_Customize_Manager $wp_customize)
    {
        $wp_customize->add_section($this->id, array(
            'title' => $this->title,
            'priority' => 30
        ));

        /**
         * @var WCM_Image_Control $control
         */
        foreach ($this->controls as $control)
        {
            $control->render($wp_customize);
        }
    }
}