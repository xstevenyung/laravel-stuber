<?php

namespace StvnYung\LaravelStuber\Commands;

use StvnYung\LaravelStuber\Commands\OverridableMakeCommand;
use Illuminate\Foundation\Console\JobMakeCommand as BaseJobMakeCommand;

class JobMakeCommand extends BaseJobMakeCommand
{
    use OverridableMakeCommand;
}
