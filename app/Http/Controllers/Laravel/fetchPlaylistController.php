<?php

namespace App\Http\Controllers\Laravel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use App\Laravel\MyModel;
use DB;

class fetchPlaylistController extends Controller
{
	private $MyModel;

	function __construct(){
		$this->setMyModel();
	}

	public function setMyModel(){
		$local = new MyModel();
		$this->_MyModel = $local;
	}

	public function FetchPlaylist()
	{
		// Make Api Call here and fetch the playlist from the youtube using api keys

	/*	$API_key    = ‘’;
		$channelID  = ‘’;
		$maxResults = 10;
		$videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=’.$channelID.’&maxResults=’.$maxResults.’&key=’.$API_key.”)");
		*/
			
		$song_name = "Guess the song";
		$size_of_file = "16mb";
		$movie_name = "Guess the movie name";

		//Insert the data into database{playlists_data}
		$data_content =	array('song_name'	  => $song_name,
								'size_of_file'=> $size_of_file,
								'movie_name'  => $movie_name,
								'created_at'  => now(),
								'updated_at'  => now()
							 );
		DB::table('playlists_data')->insert($data_content);
		echo "Playlist Data Has Been Inserted Successfully \n";
		return view('PlayListData.fetch',compact('data_content'));
		// Artisan::call("playlist-fetch:9xm", ['song_name' => $song_name, 'size_of_file' => $size_of_file, 'movie_name' => $movie_name]);
	} 
}
?>