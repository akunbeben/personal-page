<?php

class Template
{
    var $templateData = array();

    function set($name, $value)
    {
        $this->templateData[$name] = $value;
    }

    function load($template = '', $view = '', $viewData = array(), $return = FALSE)
    {
        $this->CI = &get_instance();
        $this->set('contents', $this->CI->load->view($view, $viewData, TRUE));
        return $this->CI->load->view($template, $this->templateData, $return);
    }
}
