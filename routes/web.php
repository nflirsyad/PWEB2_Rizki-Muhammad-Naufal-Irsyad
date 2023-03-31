<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerekController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[HomeController::class,'index']);
    
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    route::middleware(['auth','CekStatus:admin'])->group(function(){
        route::get('/dashboard', function(){
            return view('admin.dashboard');
        })->name('dashboard');
        route::get('/merek',[MerekController::class,'index'])->name('merek');
        route::post('merek/store',[MerekController::class,'store'])->name('merek.store');
        route::get('merek/edit/{id}/', [MerekController::class, 'edit']);
        route::post('merek/update', [MerekController::class, 'update'])->name('merek.update');
        route::get('merek/destroy/{id}/',[MerekController::class, 'destroy']);
    });

    route::middleware(['auth', 'CekStatus:user'])->group(function(){

        route::get('user/home', function(){
            return view('user.home');
        })->name('user.home');
    });
});

