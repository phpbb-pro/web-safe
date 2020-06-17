<?php

if (!function_exists('price')) {
    function price($ext, $package, $array = false) {
        $chars = [
            'EUR'   => [
                'char'      => '€',
                'position'  => 'after',
            ],
            'USD'   => [
                'char'      => '$',
                'position'  => 'before',
            ],
            'GBP'   => [
                'char'      => '£',
                'position'  => 'before',
            ],
            'BRL'   => [
                'char'      => 'R$',
                'position'  => 'before',
            ],
            'VND'   => [
                'char'      => '₫',
                'position'  => 'after',
            ],
            'RUB'   => [
                'char'      => '₽',
                'position'  => 'after',
            ],
            'TRY'   => [
                'char'      => 'TL',
                'position'  => 'after',
            ],
            'PLN'   => [
                'char'      => 'zł',
                'position'  => 'after',
            ],
            'JPY'   => [
                'char'      => '¥',
                'position'  => 'before',
            ],
        ];

        $prices = require resource_path("data/$ext/pricing.php");
        $currency = geoip(geoip()->getClientIP())->currency ?? 'USD';
        $sign = $chars[$currency];
        
        if ($array) {
            return [$currency, $prices[$package][$currency]];
        }

        $return = '';
        if ($sign['position'] === 'before') $return .= $sign['char'];
        $return .= $prices[$package][$currency];
        if ($sign['position'] === 'after') $return .= $sign['char'];

        return $return;
    }
}
