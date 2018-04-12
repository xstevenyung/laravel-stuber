<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\MailMakeCommand as BaseMailMakeCommand;

class MailMakeCommand extends BaseMailMakeCommand
{
    use OverridableMakeCommand;
}