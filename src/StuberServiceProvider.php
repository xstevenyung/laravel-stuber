<?php

namespace StvnYung\LaravelStuber;

use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use StvnYung\LaravelStuber\Commands\{
    JobMakeCommand, StubMakeCommand, StubListCommand
};

class StuberServiceProvider extends ArtisanServiceProvider
{
    public function register()
    {
        parent::register();

        $this->commands([
            StubMakeCommand::class,
            StubListCommand::class,
        ]);
    }

    protected function registerJobMakeCommand()
    {
        $this->app->singleton('command.job.make', function ($app) {
            return new JobMakeCommand($app['files']);
        });
    }
}