<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\AutentikasiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  
Route::prefix('dashboard')->middleware('auth')->group(function(){  //->middleware('can:manage-users')  prefix('dashboard')->name('dashboard.')->
    Route::get('/', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard');
    Route::get('management/edit', [App\Http\Controllers\Dashboard\DashboardController::class, 'edit'])->name('management.edit');
    Route::delete('management/destroy/{user}', [App\Http\Controllers\Dashboard\DashboardController::class, 'destroy'])->name('management.destroy');

}); 

Route::get('eror', [App\Http\Controllers\ErorController::class, 'index'])->name('erorpage');


// Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');

Route::get('/autentikasi', [App\Http\Controllers\AutentikasiController::class, 'index'])->name('autentikasi.index'); 
Route::get('/login', [App\Http\Controllers\AutentikasiController::class, 'rest'])->name('autentikasi.rest');
// show form route
Route::get('login-admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm']);
// post credential to the login method
Route::post('login-admin', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/autentikasi-rest', [App\Http\Controllers\AutentikasiController::class, 'authrest'])->name('autentikasi.rest.post'); 
Route::get('/prodi', function(){
    $client = new \GuzzleHttp\Client();
    $url = "https://endpoint.stkip-pgri-sumbar.ac.id/index.php/v1/evoting/program_studi";
    $response = $client->get($url,  
      [
        'headers' => [
          'X-API-KEY' => 'EMONEVhasdjkhui23h487ofihsdf897234r',
        ],
      ]);
      dd($response->getBody());
});
