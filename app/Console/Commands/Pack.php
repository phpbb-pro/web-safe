<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\Purchase;

class Pack extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pack {ext} {license} {name} {uuid?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Packs an extension.';

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
     * @return mixed
     */
    public function handle()
    {
        $class = '\\App\\Packers\\' . ucfirst($this->argument('ext')) . 'Packer';
        $packer = new $class;
        return $packer->pack($this->argument('license'), $this->argument('name'), $this->argument('uuid'));
    }
}
