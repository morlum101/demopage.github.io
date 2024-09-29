<?php

// Facades
use Illuminate\Support\Facades\{Auth,Route};

// Shared Restful Controllers
use App\Http\Controllers\All\{
    ProfileController,
    TmpImageUploadController
};

// Admin Restful Controllers
use App\Http\Controllers\Admin\{
    DashboardController,
    ActivityLogController,
    BarangayController,
    CategoryController,
    MunicipalityController,
    PatientController,
    UserController
};

// Auth Restful Controller
use App\Http\Controllers\Auth\{
    AuthController
};

// User Restful Controllers
use App\Http\Controllers\User\{
    DashboardController as UserDashboardController
};


// Guest
Route::group(['as' => 'main.'],function() {
    Route::view('/', 'main.home')->name('home');
});


// Admin 
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'],function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard.index');
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('patients', PatientController::class);
    //Route::get('role', RoleController::class)->name('role.index');
    Route::get('activity_logs', ActivityLogController::class)->name('activity_logs.index');


    /** Delivery Management */
    Route::resource('municipalities', MunicipalityController::class);
    Route::resource('barangays', BarangayController::class);

});


// User
Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'],function() {
    Route::get('dashboard', UserDashboardController::class)->name('dashboard.index');
});


// Auth
Route::group(['middleware' => ['auth']],function() {
    Route::delete('tmp_upload/revert', [TmpImageUploadController::class, 'revert']);     // TMP FILE UPLOAD
    Route::resource('tmp_upload', TmpImageUploadController::class);
    Route::resource('profile', ProfileController::class)->only('index', 'update')->parameter('profile', 'user');
});


// Custom Authentication
Route::group(['as' => 'auth.'], function () {

    // Auth Routes
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'attemptLogin')->name('attempt_login');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'attemptRegister')->name('attempt_register');
        Route::post('/logout', 'logout')->name('logout');

        // email verification

        Route::get('/email/verify/{token}', 'emailVerification')->name('email_verification');
    });
});


Auth::routes(['login' => false, 'register' => false, 'logout' => false]);