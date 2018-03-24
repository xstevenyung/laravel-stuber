<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Foundation\Console\JobMakeCommand as BaseJobMakeCommand;

class JobMakeCommand extends BaseJobMakeCommand
{
    public function getStub()
    {
        if (! $this->files->exists('app/Stubs/job.stub')) {
            return parent::getStub();
        }

        return app_path('Stubs/job.stub');
    }
}