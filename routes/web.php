<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IdeasController;
use App\Http\Controllers\IdeaCategoryController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\DigitalAssetCategoryController;
use App\Http\Controllers\DigitalAssetStatusController;
use App\Http\Controllers\DigitalAssetController;
use App\Http\Controllers\ClientSectionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientSliderController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
require __DIR__ . '/auth.php';

// Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');







// user  start
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::post('/user/store', [UserController::class, 'userStore'])->name('user.store');
Route::post('/user/edit', [UserController::class, 'userEdit'])->name('user.edit');
Route::post('/user/update/', [UserController::class, 'userUpdate'])->name('user.update');
Route::post('/user/delete', [UserController::class, 'userDelete'])->name('user.delete');
Route::post('/change/admin/status', [UserController::class, 'changeAdminStatus'])->name('is.admin');
// user end


// admin start
Route::get('/admins', [UserController::class, 'admins'])->name('admins');
Route::post('/admin/store', [UserController::class, 'adminStore'])->name('admin.store');
Route::post('/admin/edit', [UserController::class, 'adminEdit'])->name('admin.edit');
Route::post('/admin/update/', [UserController::class, 'adminUpdate'])->name('admin.update');
Route::post('/admin/delete', [UserController::class, 'adminDelete'])->name('admin.delete');


// admin  end



Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->name('edit.profile');
Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('update.profile');


// app settings start
Route::get('/app/settings', [SettingsController::class, 'appSettings'])->name('app.settings');
Route::post('/settings/edit', [SettingsController::class, 'settingsEdit'])->name('settings.edit');
Route::post('/settings/update/', [SettingsController::class, 'settingsUpdate'])->name('settings.update');

// app settings end
// get user feedbacks 
Route::get('/user/feedbacks', [UserController::class, 'getUserFeedback'])->name('user.feedback');
Route::post('/user/feedbacks/view', [UserController::class, 'viewUserFeedback'])->name('user.feedback.view');
Route::post('/user/feedbacks/delete', [UserController::class, 'deleteUserFeedback'])->name('user.feedback.delete');


});


//* password reset start */
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forgot.password');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::get('resend/email/{token}', [ForgotPasswordController::class, 'resendEmail'])->name('resend.email');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/register/{token}', [UserController::class, 'registerNewUser'])->name('accept');
Route::post('/user/sign/up', [UserController::class, 'userSignUp'])->name('user.sign.up');
Route::get('/super-admin', [UserController::class, 'superAdmin']);
Route::post('/make/super/admin', [UserController::class, 'makeSuperAdmin'])->name('is.superadmin');

Route::get('/clear-cache', function() {

    $configCache = Artisan::call('config:cache');
    $clearCache = Artisan::call('cache:clear');
    // return what you want
    return "Finished";
});



