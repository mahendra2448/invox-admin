<?php


if (! function_exists('appName')) {
    function appLogo() {
        return url('logo.png');
    }
}

if (! function_exists('appName')) {
    function appName() {
        return config('app.name');
    }
}

if (! function_exists('activeClass')) {
    function activeClass($route) {
        return request()->routeIs($route) ? 'font-bold text-primary' : '';
    }
}

