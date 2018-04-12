<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Database\Console\Seeders\SeederMakeCommand as BaseSeederMakeCommand;

class SeederMakeCommand extends BaseSeederMakeCommand
{
    use OverridableMakeCommand;
}
