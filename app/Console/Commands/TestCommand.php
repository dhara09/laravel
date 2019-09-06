<?php

namespace App\Console\Commands;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command {user?}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It is Customised Testing Command ';

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
        $user=$this->argument('user');
       // $this->line('hello'.$this->argument('user'));
        $this->line('Customised Testing Command',$user);
    }
}