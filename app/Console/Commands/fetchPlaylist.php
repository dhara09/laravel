<?php

namespace App\Console\Commands;
use App\Http\Controllers\Laravel\fetchPlaylistController;
use Illuminate\Console\Command;

class fetchPlaylist extends Command
{
    
   /* $getKey=YOUTUBE_API_KEY;*/

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'playlist:9xm';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command will fetch the playlist from youtube and inserts data into db';

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
        $controller = new fetchPlaylistController();
        $controller->FetchPlaylist();           
    }
}
?>