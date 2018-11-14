<?php
/**
 * Created by PhpStorm.
 * User: yangjiekang
 * DateTime: 2018-11-07 16:04
 * Email: 121491162@qq.com
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}


if (! function_exists('make_excerpt')) {
    /**
     * Limit the number of words in a string.
     *
     * @param  string  $value
     * @param  int     $words
     * @param  string  $end
     * @return string
     */
    function make_excerpt($value, $length = 100, $end = '...')
    {
        $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
        return str_limit($excerpt, $length, $end);
    }
}