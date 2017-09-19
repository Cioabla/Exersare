<?php
/**
 * @param $var
 */
function debug($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}

/**
 * @param $url
 */
function relocate($url)
{
    header("Location: " . $url);
    die();
}
