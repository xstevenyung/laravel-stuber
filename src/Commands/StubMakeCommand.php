<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\GeneratorCommand;

class StubMakeCommand extends GeneratorCommand
{
    protected $name = 'make:stub';

    protected $description = 'Create a new stub file';

    protected $type = 'Stub';

    protected function getStub()
    {
        return __DIR__."/stubs/{$this->getNameInput()}.stub";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Stubs';
    }

    /**
     * Override getPath to include the right extension
     */
    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        return $this->laravel['path'].'/'.str_replace('\\', '/', $name).'.stub';
    }

    /**
     * Prevent replacing namespaces on the stub
     */
    protected function replaceNamespace(&$stub, $name)
    {
        return $this;
    }

    /**
     * Prevent replacing calsses on the stub
     */
    protected function replaceClass($stub, $name)
    {
        return $stub;
    }
}