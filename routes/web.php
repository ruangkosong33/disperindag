<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Media\PhotoController;
use App\Http\Controllers\Media\VideoController;
use App\Http\Controllers\AboutUs\TaskController;
use App\Http\Controllers\Activity\IkuController;
use App\Http\Controllers\Activity\SopController;
use App\Http\Controllers\Article\InfoController;
use App\Http\Controllers\Article\PostController;
use App\Http\Controllers\Landing\FormController;
use App\Http\Controllers\Landing\PageController;
use App\Http\Controllers\Media\BannerController;
use App\Http\Controllers\PPID\LawPpidController;
use App\Http\Controllers\AboutUs\KadisController;
use App\Http\Controllers\Landing\FrontController;
use App\Http\Controllers\PPID\CostPpidController;
use App\Http\Controllers\AboutUs\PolicyController;
use App\Http\Controllers\AboutUs\VisionController;
use App\Http\Controllers\InfoPublic\DipController;
use App\Http\Controllers\AboutUs\HistoryController;
use App\Http\Controllers\AboutUs\ProfileController;
use App\Http\Controllers\Activity\NeracaController;
use App\Http\Controllers\Landing\ArticleController;
use App\Http\Controllers\PPID\VisionPpidController;
use App\Http\Controllers\Activity\AchieveController;
use App\Http\Controllers\Activity\FileIkuController;
use App\Http\Controllers\Activity\FileSopController;
use App\Http\Controllers\Activity\PerformController;
use App\Http\Controllers\Activity\RenstraController;
use App\Http\Controllers\Article\CategoryController;
use App\Http\Controllers\PPID\ProfilePpidController;
use App\Http\Controllers\PPID\ServicePpidController;
use App\Http\Controllers\AboutUs\StructureController;
use App\Http\Controllers\Information\EventController;
use App\Http\Controllers\PPID\GuideScrupleController;
use App\Http\Controllers\PPID\MaklumatPpidController;
use App\Http\Controllers\AboutUs\RegulationController;
use App\Http\Controllers\InfoPublic\FileDipController;
use App\Http\Controllers\Landing\PengumumanController;
use App\Http\Controllers\PPID\StructurePpidController;
use App\Http\Controllers\Activity\EvaluationController;
use App\Http\Controllers\Activity\FileNeracaController;
use App\Http\Controllers\Activity\FileAchieveController;
use App\Http\Controllers\Activity\FilePerformController;
use App\Http\Controllers\Activity\FileRenstraController;
use App\Http\Controllers\Information\DownloadController;
use App\Http\Controllers\Information\CommodityController;
use App\Http\Controllers\Organization\DivisionController;
use App\Http\Controllers\Organization\EmployeeController;
use App\Http\Controllers\PPID\GuideInformationController;
use App\Http\Controllers\Activity\FileEvaluationController;
use App\Http\Controllers\Information\InfographicController;
use App\Http\Controllers\Landing\ProgramKegiatanController;
use App\Http\Controllers\Information\FileDownloadController;

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

//LANDING
Route::get('/', [FrontController::class, 'home'])->name('home.front');
Route::get('/beranda', [FrontController::class, 'beranda'])->name('beranda');
Route::get('/berita', [ArticleController::class, 'semuaBerita'])->name('semua.berita');
Route::get('/berita/{slug}', [ArticleController::class, 'detailBerita'])->name('detail.berita');
Route::get('/visi-dan-misi', [PageController::class, 'vision'])->name('vision');
Route::get('/sejarah', [PageController::class, 'history'])->name('history');
Route::get('/struktur-organisasi', [PageController::class, 'structure'])->name('structure');
Route::get('/arah-kebijakan', [PageController::class, 'regulation'])->name('regulation');
Route::get('/tupoksi', [PageController::class, 'task'])->name('task');
// PPID
Route::get('/profil-ppid', [PageController::class, 'profilePpid'])->name('profil.ppid');
Route::get('/struktur-ppid', [PageController::class, 'structurePpid'])->name('struktur.ppid');
Route::get('/dasar-hukum-ppid', [PageController::class, 'dasarHukumPpid'])->name('dasar.hukum.ppid');
Route::get('/maklumat-pelayanan-ppid', [PageController::class, 'maklumatPelayananPpid'])->name('maklumat.pelayanan.ppid');
Route::get('/tata-cara-permohonan-ppid', [PageController::class, 'tataCaraPermohonan'])->name('tatacara.permohonan.ppid');
Route::get('/tata-cara-pengajuan-ppid', [PageController::class, 'tataCaraPengajuan'])->name('tatacara.pengajuan.ppid');
Route::get('/standar-biaya-ppid', [PageController::class, 'standarBiaya'])->name('standar.biaya.ppid');
Route::get('/waktu-dan-layanan-ppid', [PageController::class, 'waktuLayanan'])->name('waktu.layanan.ppid');

// Route::get('/panduan-ppid', [PageController::class, 'panduanPpid'])->name('panduan.ppid');
Route::get('/permohonan-informasi', [FormController::class, 'permohonanInformasi'])->name('permohonan.informasi.ppid');
Route::post('/permohonan-informasi', [FormController::class, 'permohonanInformasiRequest'])->name('permohonan.informasi.request.ppid');
Route::get('/permohonan-keberatan-informasi', [FormController::class, 'permohonanKeberatanInformasi'])->name('permohonan.keberatan.informasi.ppid');
Route::post('/permohonan-keberatan-informasi-request', [FormController::class, 'permohonanKeberatanInformasiRequest'])->name('permohonan.keberatan.informasi.request.ppid');

// bidang & Uptd
Route::get('/bidang-dan-uptd/{slug}', [PageController::class, 'division'])->name('division');
Route::get('/data-pegawai/{slug}', [PageController::class, 'divisionDataPegawai'])->name('division.datapegawai');
//
Route::get('/agenda', [FrontController::class, 'semuaAgenda'])->name('semua.agenda');
Route::get('/agenda/{slug}', [FrontController::class, 'detailAgenda'])->name('detail.agenda');
Route::get('/harga-komoditi', [FrontController::class, 'hargaKomoditi'])->name('harga.komoditi');
Route::get('/pengumuman', [PengumumanController::class, 'semua'])->name('semua.pengumuman');
Route::get('/pengumuman/{slug}', [PengumumanController::class, 'detail'])->name('detail.pengumuman');
Route::get('/indagkop-tv', [FrontController::class, 'indagkopTv'])->name('indagkop.tv');
Route::get('/kepala-dinas', [PageController::class, 'kepalaDinas'])->name('kepala.dinas');
// renstra
Route::get('renstra', [ProgramKegiatanController::class, 'renstraIndex'])->name('renstra.front.index');
Route::get('renstra/tahun/{year}', [ProgramKegiatanController::class, 'renstraTahun'])->name('renstra.front.year');
Route::get('renstra/detail/{slug}', [ProgramKegiatanController::class, 'renstraDetail'])->name('renstra.front.detail');
// renja
Route::get('renja', [ProgramKegiatanController::class, 'renjaIndex'])->name('renja.front.index');
Route::get('renja/tahun/{year}', [ProgramKegiatanController::class, 'renjaTahun'])->name('renja.front.year');
Route::get('renja/detail/{slug}', [ProgramKegiatanController::class, 'renjaDetail'])->name('renja.front.detail');
// iku
Route::get('iku', [ProgramKegiatanController::class, 'ikuIndex'])->name('iku.front.index');
Route::get('iku/tahun/{year}', [ProgramKegiatanController::class, 'ikuTahun'])->name('iku.front.year');
Route::get('iku/detail/{slug}', [ProgramKegiatanController::class, 'ikuDetail'])->name('iku.front.detail');
// sop
Route::get('sop', [ProgramKegiatanController::class, 'sopIndex'])->name('sop.front.index');
Route::get('sop/child/{slug}', [ProgramKegiatanController::class, 'sopTahun'])->name('sop.front.year');
Route::get('sop/detail/{slug}', [ProgramKegiatanController::class, 'sopDetail'])->name('sop.front.detail');
// Download File
Route::get('download', [ProgramKegiatanController::class, 'downloadIndex'])->name('download.front.index');
Route::get('download/child/{slug}', [ProgramKegiatanController::class, 'downloadChild'])->name('download.front.child');
Route::get('download/detail/{slug}', [ProgramKegiatanController::class, 'downloadDetail'])->name('download.front.detail');

Auth::routes();

//SYSADMIN
Route::middleware(['auth', 'roles:admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        //DASHBOARD
        Route::get('/home', [HomeController::class, 'index'])->name('home');

        //ABOUT US
        Route::resource('/structure', StructureController::class);
        Route::resource('/profile', ProfileController::class);
        Route::resource('/history', HistoryController::class);
        Route::resource('/vision', VisionController::class);
        Route::resource('/task', TaskController::class);
        Route::resource('/policy', PolicyController::class);
        Route::resource('/regulation', RegulationController::class);
        Route::resource('/kadis', KadisController::class);
        //

        //ACTIVITY
        Route::resource('/renstra', RenstraController::class);
        Route::get('/filerenstra/{renstra}', [FileRenstraController::class, 'index'])->name('filerenstra.index');
        Route::get('/filerenstra/create/{renstra}', [FileRenstraController::class, 'create'])->name('filerenstra.create');
        Route::post('/filerenstra/{renstra}', [FileRenstraController::class, 'store'])->name('filerenstra.store');
        Route::get('/filerenstra/{renstra}/edit/{filerenstra}', [FileRenstraController::class, 'edit'])->name('filerenstra.edit');
        Route::put('/filerenstra/{renstra}/{filerenstra}', [FileRenstraController::class, 'update'])->name('filerenstra.update');
        Route::delete('/filerenstra/{renstra}/{filerenstra}', [FileRenstraController::class, 'destroy'])->name('filerenstra.destroy');

        Route::resource('/iku', IkuController::class);
        Route::get('/fileiku/{iku}', [FileIkuController::class, 'index'])->name('fileiku.index');
        Route::get('/fileiku/create/{iku}', [FileIkuController::class, 'create'])->name('fileiku.create');
        Route::post('/fileiku/{iku}', [FileIkuController::class, 'store'])->name('fileiku.store');
        Route::get('/fileiku/{iku}/edit/{fileiku}', [FileIkuController::class, 'edit'])->name('fileiku.edit');
        Route::put('/fileiku/{iku}/{fileiku}', [FileIkuController::class, 'update'])->name('fileiku.update');
        Route::delete('/fileiku/{iku}/{fileiku}', [FileIkuController::class, 'destroy'])->name('fileiku.destroy');

        Route::resource('/perform', PerformController::class);
        Route::get('/fileperform/{perform}', [FilePerformController::class, 'index'])->name('fileperform.index');
        Route::get('/fileperform/create/{perform}', [FilePerformController::class, 'create'])->name('fileperform.create');
        Route::post('/fileperform/{perform}', [FilePerformController::class, 'store'])->name('fileperform.store');
        Route::get('/fileperform/{perform}edit/{fileperform}', [FilePerformController::class, 'edit'])->name('fileperform.edit');
        Route::put('/fileperform/{perform}/{fileperform}', [FilePerformController::class, 'update'])->name('fileperform.update');
        Route::delete('/fileperform/{perform}/{fileperform}', [FilePerformController::class, 'destroy'])->name('fileperform.destroy');

        Route::resource('/achieve', AchieveController::class);
        Route::get('/fileachieve/{achieve}', [FileAchieveController::class, 'index'])->name('fileachieve.index');
        Route::get('/fileachieve/create/{achieve}', [FileAchieveController::class, 'create'])->name('fileachieve.create');
        Route::post('/fileachieve/{achieve}', [FileAchieveController::class, 'store'])->name('fileachieve.store');
        Route::get('/fileachieve/edit/{achieve}', [FileAchieveController::class, 'edit'])->name('fileachieve.edit');
        Route::put('/fileachieve/{achieve}/{fileachieve}', [FileAchieveController::class, 'update'])->name('fileachieve.update');
        Route::delete('/fileachieve/{achieve}/{fileachieve}', [FileAchieveController::class, 'destroy'])->name('fileachieve.destroy');

        Route::resource('/evaluation', EvaluationController::class);
        Route::get('/fileevaluation/{evaluation}', [FileEvaluationController::class, 'index'])->name('fileevaluation.index');
        Route::get('/fileevaluation/create/{evaluation}', [FileEvaluationController::class, 'create'])->name('fileevaluation.create');
        Route::post('/fileevaluation/{evaluation}', [FileEvaluationController::class, 'store'])->name('fileevaluation.store');
        Route::get('/fileevaluation/{evaluation}/edit{fileevaluation}', [FileEvaluationController::class, 'edit'])->name('fileevaluation.edit');
        Route::put('/fileevaluation/{evaluation}/{fileevaluaton}', [FileEvaluationController::class, 'update'])->name('fileevaluation.update');
        Route::delete('/fileevaluation/{evaluation}/{fileevaluaton}', [FileEvaluationController::class, 'destroy'])->name('fileevaluation.destroy');

        Route::resource('/neraca', NeracaController::class);
        Route::get('/fileneraca/{neraca}', [FileNeracaController::class, 'index'])->name('fileneraca.index');
        Route::get('/fileneraca/create/{neraca}', [FileNeracaController::class, 'create'])->name('fileneraca.create');
        Route::post('/fileneraca/{neraca}', [FileNeracaController::class, 'store'])->name('fileneraca.store');
        Route::get('/fileneraca/{neraca}/edit/{fileneraca}', [FileNeracaController::class, 'edit'])->name('fileneraca.edit');
        Route::put('/fileneraca/{neraca}/{fileneraca}', [FileNeracaController::class, 'update'])->name('fileneraca.update');
        Route::delete('/fileneraca/{neraca}/{fileneraca}', [FileNeracaController::class, 'destroy'])->name('fileneraca.destroy');

        Route::resource('/sop', SopController::class);
        Route::get('/filesop/{sop}', [FileSopController::class, 'index'])->name('filesop.index');
        Route::get('/filesop/create/{sop}', [FileSopController::class, 'create'])->name('filesop.create');
        Route::post('/filesop/{sop}', [FileSopController::class, 'store'])->name('filesop.store');
        Route::get('/filesop/{sop}/edit/{filesop}', [FileSopController::class, 'edit'])->name('filesop.edit');
        Route::put('/filesop/{sop}/{filesop}', [FileSopController::class, 'update'])->name('filesop.update');
        Route::delete('/filesop/{sop}/{filesop}', [FileSopController::class, 'destroy'])->name('filesop.destroy');
        //

        //ORGANIZATION
        Route::resource('/division', DivisionController::class);
        Route::resource('/employee', EmployeeController::class);
        //

        //ARTICLE
        Route::resource('/category', CategoryController::class);
        Route::resource('/post', PostController::class);
        Route::resource('/info', InfoController::class);
        //

        //MEDIA
        Route::resource('/photo', PhotoController::class);
        Route::resource('/video', VideoController::class);
        Route::resource('/banner', BannerController::class);
        //

        //INFORMATION
        Route::resource('/event', EventController::class);
        Route::resource('/commodity', CommodityController::class);
        Route::resource('/infographic', InfographicController::class);

        Route::resource('/download', DownloadController::class);
        Route::get('/filedownload/{download}', [FileDownloadController::class, 'index'])->name('filedownload.index');
        Route::get('/filedownload/create/{download}', [FileDownload::class, 'create'])->name('filedownload.create');
        Route::post('/filedownload/{download}', [FileDownload::class, 'store'])->name('filedownload.store');
        Route::get('/filedownload/{download}/edit/{filedownload}', [FileDownload::class, 'edit'])->name('filedownload.edit');
        Route::put('/filedownload/{download}/{filedownload}', [FileDownload::class, 'update'])->name('filedownload.update');
        Route::delete('/filedownload/{download}/{filedownload}', [FileDownload::class, 'destroy'])->name('filedownload.destroy');
        //

        //PPID
        Route::resource('/profileppid', ProfilePpidController::class);
        Route::resource('/visionppid', VisionPpidController::class);
        Route::resource('/lawppid', LawPpidController::class);
        Route::resource('/maklumatppid', MaklumatPpidController::class);
        Route::resource('/serviceppid', ServicePpidController::class);
        Route::resource('/costppid', CostPpidController::class);
        Route::resource('/structureppid', StructurePpidController::class);
        Route::resource('/guideinformation', GuideInformationController::class);
        Route::resource('/guidescruple', GuideScrupleController::class);

        Route::resource('/dip', DipController::class);
        Route::get('/filedip/{dip}', [FileDipController::class, 'index'])->name('filedip.index');
        Route::get('/filedip/create/{dip}', [FileDipController::class, 'create'])->name('filedip.create');
        Route::post('/filedip/{dip}', [FileDipController::class, 'store'])->name('filedip.store');
        Route::get('/filedip/{dip}/edit/{filedip}', [FileDipController::class, 'edit'])->name('filedip.edit');
        Route::put('/filedip/{dip}/{filedip}', [FileDipController::class, 'update'])->name('filedip.update');
        Route::delete('/filedip/{dip}/{filedip}', [FileDipController::class, 'destroy'])->name('filedip.destroy');
        //

        //LOGOUT
        Route::get('logout', function () {
            Auth::logout();

        });

    });
});



