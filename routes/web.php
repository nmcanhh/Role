<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/test', [UserController::class, 'index'])->name('user.index');

Route::get('/admin/signin', [UserController::class, 'signin'])->name('admin.auth.signin');
Route::post('/admin/signin', [UserController::class, 'login'])->name('admin.auth.login');
Route::get('/admin/signin', [UserController::class, 'signout'])->name('admin.auth.signout');


Route::middleware(['auth'])->group(function () {

    Route::prefix('/admin')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('admin.home');
    });


    // Module User
    Route::prefix('/admin/user')->group(function () {

        // Không có quyền vào
        Route::get('/error', [UserController::class, 'error'])->name('admin.error.index');

        // Danh sách User
        Route::get('/',[
            'as' => 'admin.user.index',
            'uses' => 'App\Http\Controllers\UserController@index',
            'middleware' => 'checkPermission:user-index'
        ]);
        // Thêm User
        Route::get('/add',[
            'as' => 'admin.user.add',
            'uses' => 'App\Http\Controllers\UserController@add',
            'middleware' => 'checkPermission:user-add'
        ]);
        Route::post('/add',[
            'as' => 'admin.user.create',
            'uses' => 'App\Http\Controllers\UserController@create',
            'middleware' => 'checkPermission:user-add'
        ]);

        // Sửa User
        Route::get('/edit/{id}',[
            'as' => 'admin.user.edit',
            'uses' => 'App\Http\Controllers\UserController@edit',
            'middleware' => 'checkPermission:user-edit'
        ]);
        Route::post('/edit/{id}',[
            'as' => 'admin.user.update',
            'uses' => 'App\Http\Controllers\UserController@update',
            'middleware' => 'checkPermission:user-edit'
        ]);

        // Xóa User
        Route::get('/delete/{id}',[
            'as' => 'admin.user.delete',
            'uses' => 'App\Http\Controllers\UserController@delete',
            'middleware' => 'checkPermission:user-delete'
        ]);
    });

    // Module Role
    Route::prefix('/admin/role')->group(function () {

        // Không có quyền vào
        Route::get('/error', [RoleController::class, 'error'])->name('admin.error.index');

        // Danh sách Role
        Route::get('/',[
            'as' => 'admin.role.index',
            'uses' => 'App\Http\Controllers\RoleController@index',
            'middleware' => 'checkPermission:role-index'
        ]);
        // Thêm Role
        Route::get('/add',[
            'as' => 'admin.role.add',
            'uses' => 'App\Http\Controllers\RoleController@add',
            'middleware' => 'checkPermission:role-add'
        ]);
        Route::post('/add',[
            'as' => 'admin.role.create',
            'uses' => 'App\Http\Controllers\RoleController@create',
            'middleware' => 'checkPermission:role-add'
        ]);

        // Sửa Role
        Route::get('/edit/{id}',[
            'as' => 'admin.role.edit',
            'uses' => 'App\Http\Controllers\RoleController@edit',
            'middleware' => 'checkPermission:role-edit'
        ]);
        Route::post('/edit/{id}',[
            'as' => 'admin.role.update',
            'uses' => 'App\Http\Controllers\RoleController@update',
            'middleware' => 'checkPermission:role-edit'
        ]);

        // Xóa Role
        Route::get('/delete/{id}',[
            'as' => 'admin.role.delete',
            'uses' => 'App\Http\Controllers\RoleController@delete',
            'middleware' => 'checkPermission:role-delete'
        ]);
    });

    // Module Permission

    Route::prefix('/admin/permission')->group(function () {

        // Không có quyền vào
        Route::get('/error', [PermissionController::class, 'error'])->name('admin.error.index');

        // Danh sách Permission
        Route::get('/',[
            'as' => 'admin.permission.index',
            'uses' => 'App\Http\Controllers\PermissionController@index',
            'middleware' => 'checkPermission:permission-index'
        ]);

        // Thêm Permission
        Route::get('/add',[
            'as' => 'admin.permission.add',
            'uses' => 'App\Http\Controllers\PermissionController@add',
            'middleware' => 'checkPermission:permission-add'
        ]);
        Route::post('/add',[
            'as' => 'admin.permission.create',
            'uses' => 'App\Http\Controllers\PermissionController@create',
            'middleware' => 'checkPermission:permission-add'
        ]);

        // Sửa Permission
        Route::get('/edit/{id}',[
            'as' => 'admin.permission.edit',
            'uses' => 'App\Http\Controllers\PermissionController@edit',
            'middleware' => 'checkPermission:permission-edit'
        ]);
        Route::post('/edit/{id}',[
            'as' => 'admin.permission.update',
            'uses' => 'App\Http\Controllers\PermissionController@update',
            'middleware' => 'checkPermission:permission-edit'
        ]);

        // Xóa Permission
        Route::get('/delete/{id}',[
            'as' => 'admin.permission.delete',
            'uses' => 'App\Http\Controllers\PermissionController@delete',
            'middleware' => 'checkPermission:permission-delete'
        ]);
    });

});

