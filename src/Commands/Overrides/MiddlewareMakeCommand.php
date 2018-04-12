<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Routing\Console\MiddlewareMakeCommand as BaseMiddlewareMakeCommand;

class MiddlewareMakeCommand extends BaseMiddlewareMakeCommand
{
    use OverridableMakeCommand;
}