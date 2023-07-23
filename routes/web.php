<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CategpryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\PostController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




 
Route::get('category/index', [CategpryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategpryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategpryController::class, 'store'])->name('category.store');
Route::get('category/edit/{id}', [CategpryController::class, 'edit'])->name('category.edit');
Route::post('category/update/{id}', [CategpryController::class, 'update'])->name('category.update');
Route::get('category/delete/{id}', [CategpryController::class, 'destroy'])->name('category.delete');

//__Sub Category route here_//

Route::get('subcategory/create', [SubcategoryController::class, 'create'])->name('subcategory.create');
Route::post('subcategory/store', [SubcategoryController::class, 'store'])->name('subcategory.store');
Route::get('subcategory/index', [SubcategoryController::class, 'index'])->name('subcategory.index');
Route::get('subcategory/delete/{id}', [SubcategoryController::class, 'destroy'])->name('subcategory.delete');
Route::get('subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
Route::post('subcategory/update/{id}', [SubcategoryController::class, 'update'])->name('subcategory.update');

//Post Route here__//

Route::get('post/index', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');


