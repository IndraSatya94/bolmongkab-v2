<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/visi-misi', [App\Http\Controllers\PageController::class, 'visimisi']);
Route::get('/bupati', [App\Http\Controllers\PageController::class, 'bupati']);
Route::get('/wakil-bupati', [App\Http\Controllers\PageController::class, 'wakilBupati']);
Route::get('/sekda', [App\Http\Controllers\PageController::class, 'sekda']);
Route::get('/sejarah', [App\Http\Controllers\PageController::class, 'sejarah']);
Route::get('/event', [App\Http\Controllers\PageController::class, 'event']);
Route::get('/event-detail/{events:id}', [App\Http\Controllers\PageController::class, 'eventDetail']);
Route::get('/pengumuman', [App\Http\Controllers\PageController::class, 'pengumuman']);
Route::get('/dinas', [App\Http\Controllers\PageController::class, 'dinas']);
Route::get('/kecamatan', [App\Http\Controllers\PageController::class, 'kecamatan']);
Route::get('/badandaerah', [App\Http\Controllers\PageController::class, 'badandaerah']);
Route::get('/desa', [App\Http\Controllers\PageController::class, 'desa']);
Route::get('/puskesmas', [App\Http\Controllers\PageController::class, 'puskesmas']);
route::get('/pengumuman-detail/{pengumuman:id}',[App\Http\Controllers\PageController::class,'pengumumanDetail'])->name('pengumuman-detail');
route::get('/pengumuman-cari',[App\Http\Controllers\Pagecontroller::class,'hascarpengumuman']);
route::get('/event-detail/{event:id}',[App\Http\Controllers\PageController::class,'eventDetail'])->name('event-detail');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'ShowLoginForm']);

Auth::routes(['register' => false]);

Route::prefix('admin')->group(function () {

    Route::group(['middleware' => 'auth'], function(){

        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');

        //permissions
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'] ,'as' => 'admin']);

        //roles
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'] ,'as' => 'admin']);

        //users
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'] ,'as' => 'admin']);

        //tags
        Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show' ,'as' => 'admin']);

        //categories
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show' ,'as' => 'admin']);

        //posts
        Route::resource('/post', App\Http\Controllers\Admin\PostController::class, ['except' => 'show' ,'as' => 'admin']);

        //leaders
        Route::resource('/leader', App\Http\Controllers\Admin\LeaderController::class, ['except' => 'show' ,'as' => 'admin']);

        //statik
        Route::resource('/statik', App\Http\Controllers\Admin\StatikController::class, ['except' => 'show' ,'as' => 'admin']);

        //instansi
        Route::resource('/instansi', App\Http\Controllers\Admin\InstansiController::class, ['except' => 'show' ,'as' => 'admin']);

        //statik
        Route::resource('/dinasdetail', App\Http\Controllers\Admin\DinasdetailController::class, ['except' => 'show' ,'as' => 'admin']);

        //banners
        Route::resource('/banner', App\Http\Controllers\Admin\BannerController::class, ['except' => 'show' ,'as' => 'admin']);

        //services
        Route::resource('/service', App\Http\Controllers\Admin\ServiceController::class, ['except' => 'show' ,'as' => 'admin']);

        //event
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show' ,'as' => 'admin']);

        //photo
        Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);

        //video
        Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show' ,'as' => 'admin']);

        //slider
        Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show', 'create', 'edit', 'update'] ,'as' => 'admin']);

    });

});