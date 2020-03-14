<?php

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

/*
Route::get('/products/create', 'Admin\TesteController@create')->name('products.create');
Route::get('/products/{id}/edit', 'Admin\TesteController@edit')->name('products.edit');
Route::get('/products/{id}', 'Admin\TesteController@show')->name('products.show');
Route::get('/products', 'Admin\TesteController@index')->name('products.index');
Route::post('/products', 'Admin\TesteController@store')->name('products.store');
Route::put('/products/{id}', 'Admin\TesteController@update')->name('products.update');
Route::delete('/products/{id}', 'Admin\TesteController@destroy')->name('products.destroy');
*/

Route::resource('roles', 'Admin\RoleController'); //->middleware('auth');
Route::resource('teste', 'Admin\TesteController'); //->middleware('auth');
Route::resource('products', 'ProductController');

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
})->name('login');


/*
Route::middleware([])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::namespace('Admin')->group(function (){
            Route::name('admin.')->group(function (){

                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
        
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
        
                Route::get('/produtos', 'TesteController@teste')->name('produtos');
        
                Route::get('/', function (){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            }); 
        });

    });
});
*/

/*
Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {
    Route::name('admin.')->group(function (){

        Route::get('/dashboard', 'TesteController@teste')->name('dashboard');

        Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

        Route::get('/produtos', 'TesteController@teste')->name('produtos');

        Route::get('/', function (){
            return redirect()->route('admin.dashboard');
        })->name('home');
    });     
});
*/

/*
Route::get('/redirect1', function () {
    return redirect('/redirect2');
});


Route::get('/redirect3', function () {
    return redirect()->route('url.name');
});

Route::get('/nome-url', function () {
    return 'rota nomeada';
})->name('url.name');

Route::view('/view', 'welcome', ['id' => 'teste']);

Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect2', function () {
    return 'Redirect 02';
});

Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Produto(s) {$idProduct}";
});


Route::get('/categories/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::get('/teste', function () {
    return view('diretorio.arquivo');
});

Route::match(['get', 'post'], '/match', function(){
    return 'match';
});

Route::get('/any', function(){
    return 'Any';
});
*/
