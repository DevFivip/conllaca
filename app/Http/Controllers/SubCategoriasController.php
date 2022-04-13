<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class SubCategoriasController extends Controller
{
    public function index()
    {
        $subcategorias = Subcategoria::with('categoria')->get();
        return view('dashboard.subcategoria.index', compact('subcategorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategorias = Subcategoria::all();
        $categorias = Categoria::all();
        return view('dashboard.subcategoria.create', compact('categorias'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Subcategoria::create($data);
        return redirect('subcategoria');
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categoria::all();
        $subcategoria = Subcategoria::find($id);
        $subcategoria = $subcategoria->toArray();
        return view('dashboard.subcategoria.edit', compact('subcategoria', 'categorias'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $subcategoria = Subcategoria::find($id);
        $subcategoria->update($data);

        return redirect('subcategoria');

        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $subcategoria = Subcategoria::find($id)->delete();

        return $subcategoria;
        //
    }
}
