<?php

namespace Saade\Teamtrust\Commands;

use Illuminate\Console\Command;

class TeamtrustCommand extends Command
{
    public $signature = 'teamtrust';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
