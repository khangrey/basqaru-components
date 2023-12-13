<?php

namespace Khangrey\BasqaruComponents\Commands;

use Illuminate\Console\Command;

class BasqaruComponentsCommand extends Command
{
    public $signature = 'basqaru-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
