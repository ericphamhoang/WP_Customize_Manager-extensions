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

    public function __construct($title, $section, $description = '', $default = null)
    {
        $this->section = $section;
        $this->title = $title;
        $this->id = sanitize_title($title);
        $this->description = $description;
        $this->default = $default;
    }
}