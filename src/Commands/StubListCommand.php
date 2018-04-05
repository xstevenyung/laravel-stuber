<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Console\Command;
use StvnYung\LaravelStuber\Stub;
use Illuminate\Filesystem\Filesystem;

class StubListCommand extends Command
{
    protected $signature = 'stub:list';

    protected $description = 'List all overridable stubs.';

    protected $headers = ['Type', 'Name'];

    protected $stubs;

    public function __construct(Filesystem $files)
    {
        $this->stubs = Stub::list();

        parent::__construct($files);
    }

    public function handle() : void
    {
        $this->table($this->headers, $this->stubs);
    }
}
