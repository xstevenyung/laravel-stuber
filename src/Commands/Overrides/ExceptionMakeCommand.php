<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\ExceptionMakeCommand as BaseExceptionMakeCommand;

class ExceptionMakeCommand extends BaseExceptionMakeCommand
{
    use OverridableMakeCommand;
}