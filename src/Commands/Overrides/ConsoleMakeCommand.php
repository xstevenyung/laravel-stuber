<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\ConsoleMakeCommand as BaseConsoleMakeCommand;

class ConsoleMakeCommand extends BaseConsoleMakeCommand
{
    use OverridableMakeCommand;
}