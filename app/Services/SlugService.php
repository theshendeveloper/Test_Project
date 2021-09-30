<?php

namespace App\Services;

class SlugService
{
    public static function generate($string, $separator = '-', $limit = 8)
    {
        $string = mb_strtolower($string, "UTF-8");;

        $string = str_replace('‌',' ',$string);
        $string = trim($string);


        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);

        $string = preg_replace("/[\s-]+/", " ", $string);

        $string = preg_replace("/[\s_]/", $separator, $string);

        return $string;
    }
}
