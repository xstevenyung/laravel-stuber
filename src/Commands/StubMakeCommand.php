<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;

class StubMakeCommand extends GeneratorCommand
{
    protected $name = 'make:stub';

    protected $description = 'Create a new stub file';

    protected $type = 'Stub';

    protected $stubs = [
        'console', 'event-handler-queued', 'event-handler', 'event',
        'exception-render-report', 'exception-render', 'exception-report',
        'exception', 'job-queued', 'job', 'listener-duck', 'listener-queued-duck',
        'listener-queued', 'listener', 'mail', 'markdown-mail', 'markdown-notification',
        'markdown', 'model', 'notification', 'pivot.model', 'policy.plain',
        'policy', 'provider', 'request', 'resource-collection', 'resource',
        'routes', 'rule', 'test', 'unit-test',
    ];

    protected function getStub()
    {
        if (! in_array($this->getNameInput(), $this->stubs)) {
            throw new StubNotFound("Stub {$this->getNameInput()} not found.");
        }

        return __DIR__."/stubs/{$this->getNameInput()}.stub";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Stubs';
    }

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'.stub';
    }

    protected function buildClass($name)
    {
        return $this->files->get($this->getStub());
    }
}