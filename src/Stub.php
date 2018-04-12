<?php

namespace StvnYung\LaravelStuber;

class Stub
{
    public static function list()
    {
        return [
            ['type' => 'Sync Job', 'name' => 'job'],
            ['type' => 'Queueable Job', 'name' => 'job-queue'],
            ['type' => 'Command', 'name' => 'console'],
            ['type' => 'Event', 'name' => 'event'],
            ['type' => 'Exception', 'name' => 'exception'],
            ['type' => 'Listener Duck', 'name' => 'listener-duck'],
            ['type' => 'Listener Queued Duck', 'name' => 'listener-queued-duck'],
            ['type' => 'Listener Queued', 'name' => 'listener-queued'],
            ['type' => 'Listener', 'name' => 'listener'],
            ['type' => 'Mail', 'name' => 'mail'],
            ['type' => 'Markdown Mail', 'name' => 'markdown-mail'],
            ['type' => 'Markdown Mail Template', 'name' => 'markdown'],
            ['type' => 'Notification', 'name' => 'notification'],
            ['type' => 'Markdown Notification', 'name' => 'markdown-notification'],
            ['type' => 'Model', 'name' => 'model'],
            ['type' => 'Pivot Model', 'name' => 'pivot.model'],
            ['type' => 'Policy', 'name' => 'policy.plain'],
            ['type' => 'Policy w/ CRUD', 'name' => 'policy'],
            ['type' => 'Provider', 'name' => 'provider'],
            ['type' => 'Request', 'name' => 'request'],
            ['type' => 'Resource', 'name' => 'resource'],
            ['type' => 'Resource Collection', 'name' => 'resource-collection'],
            ['type' => 'Rule', 'name' => 'rule'],
            ['type' => 'Feature Test', 'name' => 'test'],
            ['type' => 'Unit Test', 'name' => 'unit-test'],
        ];
    }

    public static function stubNames()
    {
        return array_map(function ($stub) {
            return $stub['name'];
        }, self::list());
    }
}