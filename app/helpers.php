<?php

/**
 * 获取路由 class
 * @return string|string[]
 */
function route_class()
{
    return str_replace('.', '-', \Route::currentRouteName());
}
