<?php

namespace StvnYung\LaravelStuber\Concerns;

trait OverridableMakeCommand
{
    public function getStub()
    {
        $original = parent::getStub();

        $filename = collect(explode('/', $original))->last();

        return $this->files->exists($override = app_path("/Stubs/{$filename}"))
            ? $override
            : $original;
    }
}
