<?php

namespace Echoamirali\Slugger;

class Slugger {

    protected static $config = [];

    public static function doInitial($string)
    {
        $string = trim($string);
        $string = preg_replace('/\s+/u', '-', $string);
        $string = mb_strtolower($string);
        return $string;
    }

    public static function doPattern($pattern, $string)
    {
        return str_replace('#string#', $string, $pattern);
    }

} 
