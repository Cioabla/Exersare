<?php

/**
 * Created by PhpStorm.
 * User: Rio
 * Date: 9/9/2017
 * Time: 3:34 PM
 */
class Views
{
  /**
     * Render view
     *
     * @param $content_view
     * @param $template_view
     * @param null $data
     */
    function generate($content_view = null, $template_view, $data = null)
    {
        if ($data) {
            extract($data);
        }



        include 'views/templates/' . $template_view;
    }
}
