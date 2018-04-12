<?php

namespace StvnYung\LaravelStuber;

use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use StvnYung\LaravelStuber\Commands\{
    JobMakeCommand, StubMakeCommand, StubListCommand
};
use StvnYung\LaravelStuber\Commands\Overrides\{
    ConsoleMakeCommand, EventMakeCommand, ExceptionMakeCommand,
    ListenerMakeCommand, MailMakeCommand, NotificationMakeCommand
};
use StvnYung\LaravelStuber\Commands\Overrides\ModelMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\PolicyMakeCommand;

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

    protected function registerConsoleMakeCommand()
    {
        $this->app->singleton('command.console.make', function ($app) {
            return new ConsoleMakeCommand($app['files']);
        });
    }

    protected function registerEventMakeCommand()
    {
        $this->app->singleton('command.event.make', function ($app) {
            return new EventMakeCommand($app['files']);
        });
    }

    protected function registerExceptionMakeCommand()
    {
        $this->app->singleton('command.exception.make', function ($app) {
            return new ExceptionMakeCommand($app['files']);
        });
    }

    protected function registerListenerMakeCommand()
    {
        $this->app->singleton('command.listener.make', function ($app) {
            return new ListenerMakeCommand($app['files']);
        });
    }

    protected function registerMailMakeCommand()
    {
        $this->app->singleton('command.mail.make', function ($app) {
            return new MailMakeCommand($app['files']);
        });
    }

    protected function registerNotificationMakeCommand()
    {
        $this->app->singleton('command.notification.make', function ($app) {
            return new NotificationMakeCommand($app['files']);
        });
    }

    protected function registerModelMakeCommand()
    {
        $this->app->singleton('command.model.make', function ($app) {
            return new ModelMakeCommand($app['files']);
        });
    }

    protected function registerPolicyMakeCommand()
    {
        $this->app->singleton('command.policy.make', function ($app) {
            return new PolicyMakeCommand($app['files']);
        });
    }
}