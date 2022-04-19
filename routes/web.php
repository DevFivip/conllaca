<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\HeadertronController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\SubCategoriasController;
use App\Http\Controllers\TestimonioController;
use App\Models\Categoria;
use App\Models\Headertron;
use App\Models\Horario;
use App\Models\Informacion;
use App\Models\Producto;
use App\Models\RedesSocial;
use App\Models\Subcategoria;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $info = Informacion::first();
    $headertron = Headertron::orderBy('id', 'asc')->first();
    $productos = Producto::orderBy('updated_at', 'asc')->limit(3)->get();
    $informacion = Informacion::first();
    $horarios = Horario::all();
    $redes = RedesSocial::all();
    $redes = $redes->pluck('url', 'nombre');

    return view('welcome', compact('headertron', 'productos', 'informacion', 'horarios', 'info', 'redes'));
});


Route::get('/productos', function (Request $request) {

    // dd($request->all());
    $where = $request->all();
    $categorias = Categoria::all();
    $subcategorias = Subcategoria::all();
    $info = Informacion::first();
    $redes = RedesSocial::all();
    $redes = $redes->pluck('url', 'nombre');
    $paginate = Producto::where($where)->with(['categoria', 'subcategoria'])->orderBy('updated_at', 'asc')->paginate(20);
    return view('productos', compact('paginate', 'info', 'categorias', 'subcategorias', 'redes'));
});

Route::get('/producto/{slug}', function ($slug) {
    $info = Informacion::first();
    $producto = Producto::with(['categoria', 'subcategoria'])->where('slug', $slug)->first();
    $redes = RedesSocial::all();
    $redes = $redes->pluck('url', 'nombre');
    $similares = Producto::with(['categoria', 'subcategoria'])->whereKeyNot($producto->id)->where('categoria_id', $producto->categoria_id)->limit(3)->orderBy('updated_at', 'desc')->get();
    return view('producto', compact('producto', 'similares', 'info', 'redes'));
});

Route::get('/contactanos', function () {
    $info = Informacion::first();
    $informacion = Informacion::first();
    $redes = RedesSocial::all();
    $redes = $redes->pluck('url', 'nombre');
    return view('contactanos', compact('informacion', 'info', 'redes'));
});


Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('home/informacion', InformacionController::class);
Route::resource('home/categoria', CategoriasController::class);
Route::resource('home/subcategoria', SubCategoriasController::class);
Route::resource('home/producto', ProductoController::class);

Route::resource('home/cliente', ClientesController::class);
Route::resource('home/testimonio', TestimonioController::class);


Route::resource('home/headertron', HeadertronController::class);
Route::resource('home/horario', HorarioController::class);

Route::resource('home/redes', RedesController::class);
