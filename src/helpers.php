<?php

if (!function_exists('active_route'))
{
    function active_route($routePattern, $class = '')
    {
        $class = !empty($class) ? $class : config('activeroute.class');

        return app('active')->route($routePattern, $class);
    }
}