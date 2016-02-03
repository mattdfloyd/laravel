<?php

if (! function_exists('shuffleAssoc')) {
    function shuffleAssoc($array) {
        $results = [];

        $array_keys = array_keys($array);

        shuffle($array_keys);

        foreach ($array_keys as $key) {
            $results[$key] = $array[$key];
        }

        return $results;
    }
}

if ( ! function_exists('price')) {
    function price($amount, $format = '%.2n') {
        return money_format($format, $amount/100);
    }
}

if ( ! function_exists('phone')) {
    function phone($number) {
        if (strlen($number) == 10) {
            return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1) $2-$3", $number);
        }

        return $number;
    }
}
