<?php

namespace StvnYung\LaravelStuber;

use StvnYung\LaravelStuber\Commands\JobMakeCommand;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;

class StuberServiceProvider extends ArtisanServiceProvider
{
    protected function registerJobMakeCommand()
    {
        $this->app->singleton('command.job.make', function ($app) {
            return new JobMakeCommand($app['files']);
        });
    }
}