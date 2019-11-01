<?php 
Route::get('/','Laravel\HomeController@show')->name('home');

Route::get('/register','Laravel\RegisterController@create');
Route::post ('/register','Laravel\RegisterController@store'); 

Route::get('/login','Laravel\LoginController@create');
Route::post ('/login','Laravel\LoginController@store'); 
Route::get('/forgotPassword','Laravel\LoginController@forgotPassword');

Route::get('/registerview ','Laravel\RegisterViewController@show');
Route::get('/edit/{id}','Laravel\RegisterViewController@edit');
Route::post('/edit/{id}','Laravel\RegisterViewController@update');
Route::get('/registerview/export ','Laravel\RegisterViewController@ExportReport');

Route::get('/delete/{id}','Laravel\RegisterViewController@destroy');

Route::get('/logins', 'Laravel\SessionController@create');
Route::post('/logins', 'Laravel\SessionController@store');
Route::get('/logout', 'Laravel\SessionController@destroy');

Route::get('/workDetails','Laravel\workController@show');

Route::get('/fetchPlaylist','Laravel\fetchPlaylistController@FetchPlaylist');

Route::get('/getDriverPayment','Laravel\DriverPaymentController@driverDetails');

Route::get('/fileUpload','Laravel\UploadFileController@index');
Route::get('/fileUpload','Laravel\UploadFileController@uploadFile');

/*Route::get('/fetchPlaylist', [
      'as' => 'PlayListData.playlist',
      'uses' => 'Laravel\fetchPlaylistController@index']
    );
Route::post('/fetchPlaylist', [
      'as' => 'PlayListData.playlist',
      'uses' => 'Laravel\fetchPlaylistController@FetchPlaylist']
    );*/

//Route::get('/fetchPlaylist','Laravel\fetchPlaylistController@insertPlaylist');

//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
?>