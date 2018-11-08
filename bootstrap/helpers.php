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