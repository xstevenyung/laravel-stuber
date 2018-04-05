<?php

namespace StvnYung\LaravelStuber\Commands;

use Illuminate\Console\Command;

class StubListCommand extends Command
{
    protected $signature = 'stub:list';

    protected $description = 'List all overridable stubs.';

    protected $headers = ['Type', 'Name'];

    protected $stubs = [
        ['Job', 'job'],
    ];

    public function handle() : void
    {
        $this->table($this->headers, $this->stubs);
    }
}
