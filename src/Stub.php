<?php

namespace StvnYung\LaravelStuber;

class Stub
{
    public static function list()
    {
        return [
            ['type' => 'Sync Job', 'name' => 'job'],
        ];
    }

    public static function stubNames()
    {
        return array_map(function ($stub) {
            return $stub['name'];
        }, self::list());
    }
}