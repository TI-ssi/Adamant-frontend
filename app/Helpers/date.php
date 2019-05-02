<?php
/**
 * Created by PhpStorm.
 * User: pgleblanc
 * Date: 28/03/18
 * Time: 10:02 AM
 */

if (! function_exists('format_date_text')) {
    function format_date_text($time, $with_year = true)
    {
        switch (App::getLocale()) {
            case 'fr' :
                return date('j', $time) . ' ' . __('form.month.' . strtolower(date('M', $time))) . ($with_year?' '.date('Y', $time):'');
                break;
            default:
                return __('form.month.' . strtolower(date('M', $time))) . ' ' . date('j', $time) . ($with_year?', '.date('Y', $time):'');
        }

    }
}