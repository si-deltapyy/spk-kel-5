<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\CriteriaController;
use App\Http\Controllers\Admin\SubCriteriaController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RumahController;
use App\Http\Controllers\Admin\HasilController;
use App\Http\Controllers\Admin\AhpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\PostBobotController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/postaltuser', [AhpController::class, 'postaltuser'])->name('postaltuser');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/postregister', [LoginController::class, 'postregister'])->name('postregister');

Route::group(['middleware' => ['auth', 'cekrole:Admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::get('/admin/user', [UserController::class, 'index']);
    Route::get('/admin/user/form', [UserController::class, 'tampilform']);
    Route::post('/admin/user/form/postuser', [UserController::class, 'postuser'])->name('postuser');
    Route::get('/admin/user/formedit/{id}', [UserController::class, 'tampiledituser'])->name('edituser');
    Route::post('/admin/user/formedit/updateuser/{id}', [UserController::class, 'updateuser'])->name('updateuser');
    Route::get('/admin/user/hapususer/{id}', [UserController::class, 'deluser'])->name('hapususer');

    Route::get('/admin/staff', [RumahController::class, 'index']);
    Route::get('/admin/staff/form', [RumahController::class, 'tampilform']);
    Route::post('/admin/staff/form/postrumah', [RumahController::class, 'postrumah'])->name('postrumah');
    Route::get('/admin/staff/formedit/{id}', [RumahController::class, 'tampileditrumah'])->name('editrumah');
    Route::post('/admin/staff/formedit/updaterumah/{id}', [RumahController::class, 'updaterumah'])->name('updaterumah');
    Route::get('/admin/staff/hapusrumah/{tipe}', [RumahController::class, 'delrumah'])->name('hapusrumah');

    Route::get('/admin/kriteria', [CriteriaController::class, 'index']);
    Route::get('/admin/kriteria/form', [CriteriaController::class, 'tampilform']);
    Route::post('/admin/kriteria/form/postkriteria', [CriteriaController::class, 'postkriteria'])->name('postkriteria');
    Route::get('/admin/kriteria/formedit/{id}', [CriteriaController::class, 'tampileditkriteria'])->name('editkriteria');
    Route::post('/admin/kriteria/formedit/updatekriteria/{id}', [CriteriaController::class, 'updatekriteria'])->name('updatekriteria');

    Route::get('/admin/sub', [SubCriteriaController::class, 'index']);
    Route::get('/admin/sub/form', [SubCriteriaController::class, 'tampilform']);
    Route::post('/admin/sub/form/postsub', [SubCriteriaController::class, 'postsub'])->name('postsub');
    Route::get('/admin/sub/formedit/{id}', [SubCriteriaController::class, 'tampileditsub'])->name('editsub');
    Route::post('/admin/sub/formedit/updatesub/{id}', [SubCriteriaController::class, 'updatesub'])->name('updatesub');
    Route::get('/admin/sub/hapussub/{id}', [SubCriteriaController::class, 'delsub'])->name('hapussub');

    Route::get('/admin/alternative', [AhpController::class, 'tampilalternative']);
    Route::post('/admin/alternative/postalt', [AhpController::class, 'postalt'])->name('postalt');

    Route::get('/admin/ahp', [AhpController::class, 'index']);
    Route::get('/admin/ahp/perhitungan', [AhpController::class, 'indexperhitungan']);
    Route::get('/admin/ahp/hasil', [AhpController::class, 'indexhasil']);
});

Route::group(['middleware' => ['auth', 'cekrole:Admin,Customer']], function () {

    // Route::get('/ahp/bobot', [AhpController::class, 'indexbobot']);
    Route::get('/ahp/bobot', [AhpController::class, 'indexbobot'])->name('indexbobot');

    Route::post('/ahp/bobot/postbobot', [PostBobotController::class, 'store'])->name('postbobotsave');
    Route::post('/ahp/bobot/postbobot2', [AhpController::class, 'postbobot'])->name('postbobot');
    
    Route::post('/ahp/bobot/postmatriks', [AhpController::class, 'postmatriks'])->name('postmatriks');
    Route::post('/ahp/bobot/postmatriks2', [AhpController::class, 'postmatriks2'])->name('postmatriks2');
    Route::post('/ahp/bobot/cekkonsistensi', [AhpController::class, 'cekkonsistensi'])->name('cekkonsistensi');
    Route::post('/ahp/bobot/posthasilrekomendasi', [AhpController::class, 'posthasilrekomendasi'])->name('posthasilrekomendasi');
    Route::get('/ahp/bobot/kesimpulan/{tipe}', [HasilController::class, 'tampilkesimpulan']);

    Route::get('/ahp/bobot/kesimpulan', [HasilController::class, 'hasil'])->name('kesimpulan');

    Route::get('/ahp/bobot/kesimpulan/cetak/{tipe}', [HasilController::class, 'cetakpdf']);

    Route::get('/profil/reset', [CustomerController::class, 'tampilmodal']);
    Route::post('/admin/{password}', [CustomerController::class, 'ubahpassword'])->name('ubahpassword');
});