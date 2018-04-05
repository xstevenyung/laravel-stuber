<?php

namespace StvnYung\LaravelStuber;

class Stub
{
    public static function list()
    {
        return [
            ['type' => 'Sync Job', 'name' => 'job'],
            ['type' => 'Queueable Job', 'name' => 'job-queue'],
        ];
    }

    public static function stubNames()
    {
        return array_map(function ($stub) {
            return $stub['name'];
        }, self::list());
    }
}