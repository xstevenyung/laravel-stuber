<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\ProviderMakeCommand as BaseProviderMakeCommand;

class ProviderMakeCommand extends BaseProviderMakeCommand
{
    use OverridableMakeCommand;
}