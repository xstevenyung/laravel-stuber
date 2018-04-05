<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Foundation\Console\JobMakeCommand as BaseJobMakeCommand;

class JobMakeCommand extends BaseJobMakeCommand
{
    public function getStub()
    {
        $original = parent::getStub();

        $filename = collect(explode('/', $original))->last();

        return $this->files->exists($override = app_path("/Stubs/{$filename}"))
            ? $override
            : $original;
    }
}