<?php

namespace Owlies;
/**
 * Created by PhpStorm.
 * User: nikon_000
 * Date: 1/4/2017
 * Time: 2:42 PM
 */
class WCM_Number_Control extends WCM_Text_Control
{
    public function __construct($title, $section, $description = '', $default = null, $selector = '')
    {
        parent::__construct($title, $section, $description, $default, $selector);
        $this->control_options['type'] = 'number';
    }
}