<?php

namespace Owlies;
/**
 * Created by PhpStorm.
 * User: nikon_000
 * Date: 1/4/2017
 * Time: 2:42 PM
 */
class WCM_Control
{
    /**
     * @var string $title
     */
    var $title;

    /**
     * @var int $id
     */
    var $id;

    /**
     * @var int $section
     */
    var $section;

    /**
     * @var string $label
     */
    var $description;

    /**
     * @var mixed $default
     */
    var $default;

    /**
     * Example: .abc
     * @var string $selector
     */
    var $selector;

    /**
     * @var array $control_options
     */
    var $control_options;

    /**
     * WCM_Control constructor.
     * @param string $title
     * @param string $section
     * @param string $description
     * @param string|null $default
     * @param string $selector
     */
    public function __construct(string $title,string $section, string $description = '', string $default = null, string $selector = '')
    {
        $this->section = $section;
        $this->title = $title;
        $this->id = sanitize_title($title);
        $this->description = $description;
        $this->default = $default;
        $this->selector = $selector;
    }

    public function add_default_setting(\WP_Customize_Manager $wp_customize)
    {
        $setting_options = array(
            'default' => '',
            'transport' => 'refresh',
        );

        if ($this->selector != '')
        {
            $setting_options['transport'] = 'postMessage';
        }

        $wp_customize->add_setting($this->id . '__settings', $setting_options);

        if ($this->selector != '')
        {
            $wp_customize->selective_refresh->add_partial( $this->id . '__settings', array(
                'selector' => $this->selector
            ) );
        }
    }
}