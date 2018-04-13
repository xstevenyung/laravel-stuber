<?php

namespace StvnYung\LaravelStuber;

use StvnYung\LaravelStuber\Commands\JobMakeCommand;
use StvnYung\LaravelStuber\Commands\StubListCommand;
use StvnYung\LaravelStuber\Commands\StubMakeCommand;
use Illuminate\Foundation\Providers\ArtisanServiceProvider;
use StvnYung\LaravelStuber\Commands\Overrides\MailMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\RuleMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\TestMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\EventMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ModelMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\PolicyMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\SeederMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ConsoleMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\FactoryMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\RequestMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ListenerMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ProviderMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ResourceMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ExceptionMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\ControllerMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\MiddlewareMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\NotificationMakeCommand;
use StvnYung\LaravelStuber\Commands\Overrides\MigrationCreator;

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

    protected function registerProviderMakeCommand()
    {
        $this->app->singleton('command.provider.make', function ($app) {
            return new ProviderMakeCommand($app['files']);
        });
    }

    protected function registerRequestMakeCommand()
    {
        $this->app->singleton('command.request.make', function ($app) {
            return new RequestMakeCommand($app['files']);
        });
    }

    protected function registerResourceMakeCommand()
    {
        $this->app->singleton('command.resource.make', function ($app) {
            return new ResourceMakeCommand($app['files']);
        });
    }

    protected function registerRuleMakeCommand()
    {
        $this->app->singleton('command.rule.make', function ($app) {
            return new RuleMakeCommand($app['files']);
        });
    }

    protected function registerTestMakeCommand()
    {
        $this->app->singleton('command.test.make', function ($app) {
            return new TestMakeCommand($app['files']);
        });
    }

    protected function registerControllerMakeCommand()
    {
        $this->app->singleton('command.controller.make', function ($app) {
            return new ControllerMakeCommand($app['files']);
        });
    }

    protected function registerMiddlewareMakeCommand()
    {
        $this->app->singleton('command.middleware.make', function ($app) {
            return new MiddlewareMakeCommand($app['files']);
        });
    }

    protected function registerFactoryMakeCommand()
    {
        $this->app->singleton('command.factory.make', function ($app) {
            return new FactoryMakeCommand($app['files']);
        });
    }

    protected function registerSeederMakeCommand()
    {
        $this->app->singleton('command.seeder.make', function ($app) {
            return new SeederMakeCommand($app['files'], $app['composer']);
        });
    }

    protected function registerCreator()
    {
        $this->app->singleton('migration.creator', function ($app) {
            return new MigrationCreator($app['files']);
        });
    }
}
