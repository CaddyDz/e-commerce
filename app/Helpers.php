<?php

declare(strict_types=1);

use App\Models\{Age, Color, Size};

function sluggify($string)
{
    // replace non letter or digits by -
    $url = preg_replace('~[^\pL\d]+~u', '-', $string);

    // transliterate
    $url = iconv('utf-8', 'us-ascii//TRANSLIT', $url);

    // remove unwanted characters
    $url = preg_replace('~[^-\w]+~', '', $url);

    // trim
    $url = trim($url, '-');

    // remove duplicate -
    $url = preg_replace('~-+~', '-', $url);

    // lowercase
    $url = strtolower($url);

    if (empty($url)) {
        return 'n-a';
    }

    return $url;
}

function size($id)
{
    return __(optional(Size::find($id))->label);
}

function age($id)
{
    return optional(Age::find($id))->value;
}

function color($id)
{
    return __(optional(Color::find($id))->color);
}
