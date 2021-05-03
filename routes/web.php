<?php

use App\Http\Controllers\GradeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InfoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\PortofolioController;

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



Route::middleware(['auth:sanctum', 'verified','authparent'])->group(function () {
    Route::get('/parent/home', [PagesController::class, 'homeparent'])->name('homeparent');
    Route::get('/parent/raport', [RaportController::class, 'raportparent'])->name('raportparent');
    Route::get('/parent/presensi', [PresensiController::class, 'riwayatpresensi'])->name('riwayatpresensi');
    Route::get('/parent/presensi/{bulan}', [PresensiController::class, 'presensibulan'])->name('presensibulan');
    Route::get('/parent/portofolio/all', [PortofolioController::class, 'parentporto'])->name('parentporto');
    Route::get('/parent/portofolio/{grade}', [PortofolioController::class, 'parentportograde'])->name('parentportograde');
});
Route::middleware(['auth:sanctum', 'verified',  'authadminhrt'])->group(function () {
    
    Route::get('/hrt/dashboard', [PagesController::class, 'dashhrt'])->name('dashhrt');

    Route::get('/hrt/aplikasi/raport', [RaportController::class, 'showraport'])->name('showraport');
    
    /* PRESENSI */
    Route::get('/hrt/aplikasi/presensi', [PresensiController::class, 'presensi'])->name('presensi');
    Route::get('/hrt/aplikasi/presensi/{presensi}/edit', [PresensiController::class, 'editpresensi'])->name('editpresensi');
    Route::patch('/hrt/aplikasi/presensi/edit', [PresensiController::class, 'storepresensi'])->name('storepresensi');
    
    Route::get('/hrt/aplikasi/presensi/{presensi}/reset', [PresensiController::class, 'resetpresensi'])->name('resetpresensi');
    Route::get('/hrt/aplikasi/presensi/{presensi}/export', [PresensiController::class, 'exportpresensi'])->name('exportpresensi');

    /*INFORMASI*/
    Route::get('/kelola/informasi', [InfoController::class, 'kelolainfo'])->name('kelolainfo');
        
    Route::get('/kelola/informasi/create', [InfoController::class, 'forminfo'])->name('forminfo');
    Route::patch('/kelola/informasi/create', [InfoController::class, 'createinfo'])->name('createinfo');

    Route::get('/kelola/informasi/{post}/edit', [InfoController::class, 'updateinfo'])->name('updateinfo');
    Route::patch('/kelola/informasi/{post}/edit', [InfoController::class, 'storeinfo'])->name('storeinfo');

    Route::get('/kelola/informasi/{post}/delete', [InfoController::class, 'deleteinfo'])->name('deleteinfo');

    Route::get('/kelola/informasi/{post}/show', [InfoController::class, 'showinfo'])->name('showinfo');

    /*GRADE */
    Route::get('/hrt/kelola/grade', [GradeController::class, 'kelolagradehrt'])->name('kelolagradehrt');
    
    Route::get('/kelola/grade/{grade}/upload', [GradeController::class, 'updategrade'])->name('updategrade');
    Route::patch('/kelola/grade/{grade}/upload', [GradeController::class, 'storegrade'])->name('storegrade');


    /* RAPORT */
    Route::get('/hrt/aplikasi/raport', [RaportController::class, 'kelolaraporthrt'])->name('kelolaraporthrt');
    
    Route::get('/aplikasi/raport/{raport}/upload', [RaportController::class, 'updateraport'])->name('updateraport');
    Route::patch('/aplikasi/raport/{raport}/upload', [RaportController::class, 'storeraport'])->name('storeraport');

    Route::get('/aplikasi/raport/{raport}/delete', [RaportController::class, 'deleteraport'])->name('deleteraport');
    Route::get('/aplikasi/raport/{raport}/7-1/delete', [RaportController::class, 'raport71'])->name('raport71');
    Route::get('/aplikasi/raport/{raport}/7-2/delete', [RaportController::class, 'raport72'])->name('raport72');
    Route::get('/aplikasi/raport/{raport}/8-1/delete', [RaportController::class, 'raport81'])->name('raport81');
    Route::get('/aplikasi/raport/{raport}/8-2/delete', [RaportController::class, 'raport82'])->name('raport82');
    Route::get('/aplikasi/raport/{raport}/9-1/delete', [RaportController::class, 'raport91'])->name('raport91');
    Route::get('/aplikasi/raport/{raport}/9-2/delete', [RaportController::class, 'raport92'])->name('raport92');
    Route::get('/aplikasi/raport/{raport}/10-1/delete', [RaportController::class, 'raport101'])->name('raport101');
    Route::get('/aplikasi/raport/{raport}/10-2/delete', [RaportController::class, 'raport102'])->name('raport102');
    Route::get('/aplikasi/raport/{raport}/11-1/delete', [RaportController::class, 'raport111'])->name('raport111');
    Route::get('/aplikasi/raport/{raport}/11-2/delete', [RaportController::class, 'raport112'])->name('raport112');
    Route::get('/aplikasi/raport/{raport}/12-1/delete', [RaportController::class, 'raport121'])->name('raport121');
    Route::get('/aplikasi/raport/{raport}/12-2/delete', [RaportController::class, 'raport122'])->name('raport122');

    
    /* SISWA*/
    
    Route::get('/hrt/kelola/siswa', [StudentController::class, 'kelolasiswahrt'])->name('kelolasiswahrt');
    Route::get('/kelola/siswa/create', [StudentController::class, 'formsiswa'])->name('formsiswa');
    Route::patch('/kelola/siswa/create', [StudentController::class, 'createsiswa'])->name('createsiswa');
    
    Route::get('/kelola/siswa/{student}/edit', [StudentController::class, 'updatesiswa'])->name('updatesiswa');
    Route::patch('/kelola/siswa/{student}/edit', [StudentController::class, 'storesiswa'])->name('storesiswa');
    
    Route::get('/kelola/siswa/{student}/delete', [StudentController::class, 'deletesiswa'])->name('deletesiswa');
    
    Route::get('/kelola/siswa/{student}/show', [StudentController::class, 'showsiswa'])->name('showsiswa');
    
    /* PARENT*/
    Route::get('/hrt/kelola/parent', [ParentController::class, 'kelolaparenthrt'])->name('kelolaparenthrt');
    
    Route::get('/kelola/parent/{user}/reset', [ParentController::class, 'resetparent'])->name('resetparent');
    Route::patch('/kelola/parent/{user}/reset', [ParentController::class, 'resetparent'])->name('resetparent');
    
    
    /*PORTOFOLIO*/
    Route::get('/hrt/aplikasi/portofolio', [PortofolioController::class, 'kelolaportohrt'])->name('kelolaportohrt');
    Route::get('/hrt/aplikasi/portofolio/{nis}/all/detail', [PortofolioController::class, 'detailporto'])->name('detailporto');
    Route::get('/hrt/aplikasi/portofolio/{nis}/{grade}/detail', [PortofolioController::class, 'detailportograde'])->name('detailportograde');
    
    Route::get('/hrt/aplikasi/portofolio/{nis}/upload', [PortofolioController::class, 'uploadporto'])->name('uploadporto');
    Route::patch('/hrt/aplikasi/portofolio/{nis}/upload', [PortofolioController::class, 'storeporto'])->name('storeporto');
    
    Route::get('/hrt/aplikasi/portofolio/{id}/edit', [PortofolioController::class, 'formeditporto'])->name('formeditporto');
    Route::patch('/hrt/aplikasi/portofolio/{id}/edit', [PortofolioController::class, 'editporto'])->name('editporto');
    Route::get('/hrt/aplikasi/portofolio/{portofolio}/delete', [PortofolioController::class, 'deleteporto'])->name('deleteporto');
    
    /*PASSWORD*/
    Route::get('/hrt/password', [UserController::class, 'changepass'])->name('changepass');
    Route::patch('/hrt/password', [UserController::class, 'storepass'])->name('storepass');
    
    /*PROFIL*/
    Route::get('/hrt/profile', [UserController::class, 'changeprofile'])->name('changeprofile');
    Route::patch('/hrt/profile', [UserController::class, 'storeprofile'])->name('storeprofile');
    
});
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    
    /*PASSWORD*/
    Route::get('/admin/password', [UserController::class, 'changepass'])->name('changepass');
    Route::patch('/admin/password', [UserController::class, 'storepass'])->name('storepass');
    /*PROFIL*/
    Route::get('/admin/profile', [UserController::class, 'changeprofile'])->name('changeprofile');
    Route::patch('/admin/profile', [UserController::class, 'storeprofile'])->name('storeprofile');
    
    Route::get('/kelola/parent', [ParentController::class, 'kelolaparent'])->name('kelolaparent');
    Route::get('/kelola/siswa', [StudentController::class, 'kelolasiswa'])->name('kelolasiswa');
    Route::get('/kelola/raport', [RaportController::class, 'kelolaraport'])->name('kelolaraport');
    Route::get('/kelola/grade', [GradeController::class, 'kelolagrade'])->name('kelolagrade');
    Route::get('/admin/dashboard', [PagesController::class, 'dashadmin'])->name('dashadmin');
    
    /* USER*/
    Route::get('/admin/kelola/user', [UserController::class, 'kelolauser'])->name('kelolauser');
    
    Route::get('/admin/kelola/user/{user}/edit', [UserController::class, 'updateuser'])->name('updateuser');
    Route::patch('/admin/kelola/user/{user}/edit', [UserController::class, 'storeuser'])->name('storeuser');
    
    Route::get('/admin/kelola/user/create', [UserController::class, 'formuser'])->name('formuser');
    Route::patch('/admin/kelola/user/create', [UserController::class, 'createuser'])->name('createuser');
    
    Route::get('/admin/kelola/user/{user}/delete', [UserController::class, 'deleteuser'])->name('deleteuser');
    
    Route::get('/admin/kelola/user/{user}/reset', [UserController::class, 'resetuser'])->name('resetuser');
    Route::patch('/admin/kelola/user/{user}/reset', [UserController::class, 'resetuser'])->name('resetuser');
});
