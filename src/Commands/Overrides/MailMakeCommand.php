<?php

namespace StvnYung\LaravelStuber\Commands\Overrides;

use StvnYung\LaravelStuber\Concerns\OverridableMakeCommand;
use Illuminate\Foundation\Console\MailMakeCommand as BaseMailMakeCommand;

class MailMakeCommand extends BaseMailMakeCommand
{
    use OverridableMakeCommand;

    protected function writeMarkdownTemplate()
    {
        $path = resource_path('views/' . str_replace('.', '/', $this->option('markdown'))) . '.blade.php';

        if (!$this->files->isDirectory(dirname($path))) {
            $this->files->makeDirectory(dirname($path), 0755, true);
        }

        $this->files->put($path, file_get_contents(__DIR__ . '/stubs/markdown.stub'));
    }
}