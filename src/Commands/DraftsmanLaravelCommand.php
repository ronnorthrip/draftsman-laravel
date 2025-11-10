<?php

namespace DraftsmanInc\DraftsmanLaravel\Commands;

use Illuminate\Console\Command;

class DraftsmanLaravelCommand extends Command
{
    public $signature = 'draftsman-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
