<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\EventMakeCommand as BaseEventMakeCommand;

class EventMakeCommand extends BaseEventMakeCommand
{
    use OverridableMakeCommand;
}