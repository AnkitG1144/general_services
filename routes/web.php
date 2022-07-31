<?php

use App\Models\Category;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Traits\General;

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
    $category = Category::all();
    
    return view('welcome', compact('category'));
});

Route::get('/show-services/{category_id}', function ($category_id) {
    $services = Services::where('category_id', $category_id)->get();
    $categoryName = Category::where('id', $category_id)->value('name');
    // dd($services);
    return view('serviceView', compact('services', 'categoryName'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/category', function () {
    $category = Category::all();
    return view('category', compact('category'));
})->middleware(['auth'])->name('category');


Route::get('/service', function () {
    $allCategories = Category::all();
    $services = Services::select(['services.name as service_man_name', 'services.contact_no', 'categories.name as category_name'])
            ->join('categories', 'categories.id', 'services.category_id')->get(); 

    return view('service', compact('allCategories', 'services'));
})->middleware(['auth'])->name('service');

Route::post('/add-service', function (Request $request) {
    Services::create([
        'name' =>  $request->serviceName,
        'contact_no' => $request->serviceManContact,
        'category_id' => $request->caterogy_no
    ]);
    return redirect('service');

})->middleware(['auth'])->name('addService');



Route::post('/add-category', function (Request $request) {
    $general = new General;
    
    $dir_path = 'products\\';
    Storage::disk('public')->makeDirectory($dir_path);

    if($request->hasFile('categoryImage'))
        $request->categoryImage = $general->uploadFile($request->file('categoryImage'), $dir_path);

    
    Category::create([
        'name' => $request->categoryName,
        'image' => $request->categoryImage
    ]);
    return redirect('category');

})->middleware(['auth'])->name('addCategory');


require __DIR__.'/auth.php';
