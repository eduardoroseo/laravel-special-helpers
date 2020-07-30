<?php
/**
 * Created by PhpStorm.
 * User: Eduardo Roseo
 * Date: 09/06/2020
 * Time: 17:09
 */

if (!function_exists('formatMoney')) {
    /**
     * @param $number
     * @param string $lang
     */
    function formatMoney($number, $lang = 'pt-br')
    {
        return "R$ " . number_format((float)$number, 2, ',', '.');
    }
}

if (!function_exists('onlyNumberAndLetters')) {
    /**
     * @param string $word
     * @return string|string[]
     */
    function onlyNumberAndLetters(string $word)
    {
        return str_replace(['(', ')', '-', ' ', '.', '+','*'], '', $word);
    }
}