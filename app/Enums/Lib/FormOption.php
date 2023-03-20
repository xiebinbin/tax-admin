<?php

namespace App\Enums\Lib;


trait FormOption
{
    /**
     * @return array
     */
    public static function getFormOptions(): array
    {
        $tmps = self::getValues();
        $items = [];
        foreach ($tmps as $tmp) {
            $items[$tmp] = self::getDescription($tmp);
        }
        return $items;
    }
}
