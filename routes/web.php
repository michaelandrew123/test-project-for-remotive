<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { 
    return view('welcome');
});

Route::get('/mechanical-turk', [App\Http\Controllers\MechanicalTurkController::class, 'index'])->name('mechanical-turk');
Route::get('/remote-task', [App\Http\Controllers\RemoTaskController::class, 'index'])->name('remotask');
Route::get('/telus', [App\Http\Controllers\TelusController::class, 'index'])->name('telus');
Route::get('/prolific', [App\Http\Controllers\ProlificController::class, 'index'])->name('prolific');
Route::get('/user-testing', [App\Http\Controllers\UserTestingController::class, 'index'])->name('user-testing');
Route::get('/rws-group', [App\Http\Controllers\RWSGroupController::class, 'index'])->name('rws-group');
Route::get('/data-annotation', [App\Http\Controllers\DataAnnotationController::class, 'index'])->name('data-annotation');
Route::get('/dscount', [App\Http\Controllers\DsCountController::class, 'index'])->name('dscount');
Route::get('/cloud-research', [App\Http\Controllers\CloudResearchController::class, 'index'])->name('cloud-research');
Route::get('/cloud-connect', [App\Http\Controllers\CloudConnectController::class, 'index'])->name('cloud-connect');
Route::get('/intellizoom', [App\Http\Controllers\IntellizoomController::class, 'index'])->name('intellizoom');
Route::get('/remotive', [App\Http\Controllers\RemotiveController::class, 'index'])->name('remotive');


Route::get('/chatbot1', [App\Http\Controllers\ChatBotController::class, 'detectIntent'])->name('detectIntent');
// Route::post('/chatbot', [ChatBotController::class, 'handleChat']);
// Route::post('/chatbot1', [ChatBotController::class, 'detectIntent']);

// Route::get('/chatbot', function () {
//     return view('chatbot');
// });

Route::get('/fetch-jobs', [RemotiveController::class, 'fetchRemoteJobs']);
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middlewar' => 'auth'], function(){ 
  
    Route::get('/home', function () {
        return view('pages.home');
    });
});
