<?php

declare(strict_types=1);

namespace App\Platform\Commands;

use Illuminate\Console\Command;

class UpdateAllPlayerGamesMetrics extends Command
{
    protected $signature = 'ra:server:player:update-all-games-metrics';
    protected $description = '';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): void
    {
    }
}