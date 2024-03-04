<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController_pharmacy;
use Auth;
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


use App\Http\Controllers\CustomAuthController;
Route::get('index_admin', [CustomAuthController::class, 'dashboard']); 
Route::get('admin/login', [CustomAuthController::class, 'index'])->name('admin/login');
Route::post('admin/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('admin/register', [CustomAuthController::class, 'registration'])->name('admin/register');
Route::post('admin/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');




Route::get('/', function () {

    // dd(Auth::user());
    return view('blog-grid');
});

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');
Route::get('/profile-settings', function () {
    return view('profile-settings');
})->name('profile-settings');

Route::get('/components', function () {
    return view('components');
})->name('components');

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');
Route::get('/blog-list', function () {
    return view('blog-list');
})->name('blog-list');
Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');


Route::get('/edit-blog', function () {
    return view('edit-blog');
})->name('edit-blog');



/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () { 
        Route::get('/index_admin', function () {
        return view('admin.index_admin');
        })->name('pagee');

        
        Route::get('/login', function () {
        return view('admin.login');
        })->name('login');
        Route::get('/register', function () {
        return view('admin.register');
        })->name('register');

        Route::get('/forgot-password', function () {
        return view('admin.forgot-password');
        })->name('forgot-password');
        
        Route::get('/error-404', function () {
        return view('admin.error-404');
        })->name('error-404');
        Route::get('/error-500', function () {
        return view('admin.error-500');
        })->name('error-500');

        
        Route::get('/components', function () {
        return view('admin.components');
        })->name('components');

        Route::get('/blog', function () {
        return view('admin.blog');
        })->name('blog');
        Route::get('/blog-details', function () {
        return view('admin.blog-details');
        })->name('blog-details');
        Route::get('/add-blog', function () {
        return view('admin.add-blog');
        })->name('add-blog');
        Route::get('/edit-blog', function () {
        return view('admin.edit-blog');
        })->name('edit-blog');
        Route::get('/active-blog', function () {
        return view('admin.active-blog');
        })->name('active-blog');

        Route::get('/pending-blog', function () {
        return view('admin.pending-blog');
        })->name('pending-blog');
        
        Route::get('/pending-blog', function () {
        return view('admin.pending-blog');
        })->name('pending-blog');

        
         Route::get('/change-password', function () {
        return view('admin.change-password');
        })->name('change-password');
        Route::get('/conform-email', function () {
        return view('admin.conform-email');
        })->name('conform-email');

        
        
    });
/********************ADMIN ROUTES END******************************/

