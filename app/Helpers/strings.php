<?php

use Illuminate\Support\Str;


$func = 'slugify';
if (!function_exists($func)) {
    function slugify(string $str, string $char = '-'): string
    {
        return Str::slug($str, $char);
    }
} else {
    logger('@@@ Helper func "strings / ' . $funcName . '()" already EXISTS !');
}
