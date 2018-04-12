<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Support\Str;
use StvnYung\LaravelStuber\Stub;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Console\GeneratorCommand;

class StubMakeCommand extends GeneratorCommand
{
    protected $name = 'make:stub';

    protected $description = 'Create a new stub file';

    protected $type = 'Stub';

    protected $stubs;

    public function __construct(Filesystem $files)
    {
        $this->stubs = Stub::stubNames();

        parent::__construct($files);
    }

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
