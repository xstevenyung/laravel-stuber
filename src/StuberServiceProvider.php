<?php

namespace StvnYung\LaravelStuber;

use StvnYung\LaravelStuber\Commands\JobMakeCommand;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;

class StuberServiceProvider extends ArtisanServiceProvider
{
    public function register()
    {
        parent::register();

        $this->commands([
            \StvnYung\LaravelStuber\Commands\StubMakeCommand::class,
        ]);
    }

    protected function registerJobMakeCommand()
    {
        $this->app->singleton('command.job.make', function ($app) {
            return new JobMakeCommand($app['files']);
        });
    }
}