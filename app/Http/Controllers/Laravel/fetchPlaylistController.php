<?php

namespace App\Http\Controllers\Laravel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use DB;

class fetchPlaylistController extends Controller
{
	public function FetchPlaylist()
	{
		// Make Api Call here and fetch the playlist from the youtube using api keys

	/*	$API_key    = ‘’;
		$channelID  = ‘’;
		$maxResults = 10;
		$videoList = json_decode(file_get_contents("https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId=’.$channelID.’&maxResults=’.$maxResults.’&key=’.$API_key.”)");*/
			
		$song_name = "testing song";
		$size_of_file = "13mb";

		$movie_name = "ddlj";

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