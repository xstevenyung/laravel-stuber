<?php

namespace StvnYung\LaravelStuber;

class Stub
{
    public static function list()
    {
        return [
            ['type' => 'Job', 'name' => 'job'],
            ['type' => 'Test', 'name' => 'test'],
        ];
    }

    public static function stubNames()
    {
        return array_map(function ($stub) {
            return $stub['name'];
        }, self::list());
    }
}