<?php

namespace App\Console\Commands;

use App\Models\Banner;
use Illuminate\Console\Command;

class UpdateHomeBanner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'banner:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Updates the video on the banner';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Banner::first()->limit(1)->delete();
    }
}
