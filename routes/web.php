<?php
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\WorkController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SetttingController;
use App\Http\Controllers\MainController;
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



Route::get('/',[MainController::class,'Index']);
Route::post('contact/store',[MainController::class,'Store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('logout',[AdminController::class,'logout'])->name('logout')->middleware('auth');


Route::get('admin/update/setting',[AdminController::class,'UpdateSetting'])->name('admin.update.setting')->middleware('auth');
Route::post('admin-check-current-password',[AdminController::class,'CheckAdminPassword'])->name('admin.check.current.password')->middleware('auth');
Route::post('admin/update/password',[AdminController::class,'UpdatePassword'])->name('admin.update.password')->middleware('auth');

Route::get('about/us',[AboutController::class,'AboutUs'])->middleware('auth');
Route::post('update/about/{id}',[AboutController::class,'AboutUpdate'])->middleware('auth')->name('update.about');


//project route
Route::get('add/project', [ProjectController::class, 'add'])->name('add.project')->middleware('auth');
Route::get('all/project', [ProjectController::class, 'all'])->name('all.project')->middleware('auth');
Route::post('store/project', [ProjectController::class, 'store'])->name('store.project')->middleware('auth');
Route::get('edit/project/{id}', [ProjectController::class, 'edit'])->name('edit.project')->middleware('auth');
Route::get('delete/project/{id}', [ProjectController::class, 'delete'])->name('delete.project')->middleware('auth');
Route::post('update/project/{id}', [ProjectController::class, 'update'])->name('update.project')->middleware('auth');

//testimonial route
Route::get('add/testimonial', [TestimonialController::class, 'add'])->name('add.testimonial')->middleware('auth');
Route::get('all/testimonial', [TestimonialController::class, 'all'])->name('all.testimonial')->middleware('auth');
Route::post('store/testimonial', [TestimonialController::class, 'store'])->name('store.testimonial')->middleware('auth');
Route::get('edit/testimonial/{id}', [TestimonialController::class, 'edit'])->name('edit.testimonial')->middleware('auth');
Route::get('delete/testimonial/{id}', [TestimonialController::class, 'delete'])->name('delete.testimonial')->middleware('auth');
Route::post('update/testimonial/{id}', [TestimonialController::class, 'update'])->name('update.testimonial')->middleware('auth');

//service route
Route::get('add/service', [ServiceController::class, 'add'])->name('add.service')->middleware('auth');
Route::get('all/service', [ServiceController::class, 'all'])->name('all.service')->middleware('auth');
Route::post('store/service', [ServiceController::class, 'store'])->name('store.service')->middleware('auth');
Route::get('edit/service/{id}', [ServiceController::class, 'edit'])->name('edit.service')->middleware('auth');
Route::get('delete/service/{id}', [ServiceController::class, 'delete'])->name('delete.service')->middleware('auth');
Route::post('update/service/{id}', [ServiceController::class, 'update'])->name('update.service')->middleware('auth');

//education route
Route::get('add/education', [EducationController::class, 'add'])->name('add.education')->middleware('auth');
Route::get('all/education', [EducationController::class, 'all'])->name('all.education')->middleware('auth');
Route::post('store/education', [EducationController::class, 'store'])->name('store.education')->middleware('auth');
Route::get('edit/education/{id}', [EducationController::class, 'edit'])->name('edit.education')->middleware('auth');
Route::get('delete/education/{id}', [EducationController::class, 'delete'])->name('delete.education')->middleware('auth');
Route::post('update/education/{id}', [EducationController::class, 'update'])->name('update.education')->middleware('auth');


//experience route
Route::get('add/experience', [ExperienceController::class, 'add'])->name('add.experience')->middleware('auth');
Route::get('all/experience', [ExperienceController::class, 'all'])->name('all.experience')->middleware('auth');
Route::post('store/experience', [ExperienceController::class, 'store'])->name('store.experience')->middleware('auth');
Route::get('edit/experience/{id}', [ExperienceController::class, 'edit'])->name('edit.experience')->middleware('auth');
Route::get('delete/experience/{id}', [ExperienceController::class, 'delete'])->name('delete.experience')->middleware('auth');
Route::post('update/experience/{id}', [ExperienceController::class, 'update'])->name('update.experience')->middleware('auth');

//category route
Route::get('add/category', [CategoryController::class, 'add'])->name('add.category')->middleware('auth');
Route::get('all/category', [CategoryController::class, 'all'])->name('all.category')->middleware('auth');
Route::post('store/category', [CategoryController::class, 'store'])->name('store.category')->middleware('auth');
Route::get('edit/category/{id}', [CategoryController::class, 'edit'])->name('edit.category')->middleware('auth');
Route::get('delete/category/{id}', [CategoryController::class, 'delete'])->name('delete.category')->middleware('auth');
Route::post('update/category/{id}', [CategoryController::class, 'update'])->name('update.category')->middleware('auth');


//work route
Route::get('add/work', [WorkController::class, 'add'])->name('add.work')->middleware('auth');
Route::get('all/work', [WorkController::class, 'all'])->name('all.work')->middleware('auth');
Route::post('store/work', [WorkController::class, 'store'])->name('store.work')->middleware('auth');
Route::get('edit/work/{id}', [WorkController::class, 'edit'])->name('edit.work')->middleware('auth');
Route::get('delete/work/{id}', [WorkController::class, 'delete'])->name('delete.work')->middleware('auth');
Route::post('update/work/{id}', [WorkController::class, 'update'])->name('update.work')->middleware('auth');

//blog route
Route::get('add/blog', [BlogController::class, 'add'])->name('add.blog')->middleware('auth');
Route::get('all/blog', [BlogController::class, 'all'])->name('all.blog')->middleware('auth');
Route::post('store/blog', [BlogController::class, 'store'])->name('store.blog')->middleware('auth');
Route::get('edit/blog/{id}', [BlogController::class, 'edit'])->name('edit.blog')->middleware('auth');
Route::get('delete/blog/{id}', [BlogController::class, 'delete'])->name('delete.blog')->middleware('auth');
Route::post('update/blog/{id}', [BlogController::class, 'update'])->name('update.blog')->middleware('auth');


Route::get('website/setting',[SetttingController::class,'Setting'])->middleware('auth');
Route::post('update/website/setting/{id}',[SetttingController::class,'Update'])->middleware('auth')->name('update.website.setting');