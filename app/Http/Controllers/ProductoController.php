<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Subcategoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with(['subcategoria', 'categoria'])->get();
        return view('dashboard.producto.index', compact('productos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        return view('dashboard.producto.create', compact('categorias', 'subcategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $data = $request->all();

        if (isset($data['imagen'])) {
            $image = $request->file('imagen');

            $filename = time() . '.' . $image->getClientOriginalName();

            $path = $request->imagen->storeAs('public/', $filename);
            $data['imagen'] = $filename;
        }

        $data["slug"]= $this::slugfy($data["producto_nombre"]);

        $producto = Producto::create($data);

        return redirect('home/producto');
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
        //
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        $producto = Producto::find($id);
        return view('dashboard.producto.edit', compact('producto', 'categorias', 'subcategorias'));
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
        //
        $data = $request->all();

        if (isset($data['imagen'])) {
            $image = $request->file('imagen');

            $filename = time() . '.' . $image->getClientOriginalName();

            $path = $request->imagen->storeAs('public/', $filename);
            $data['imagen'] = $filename;
        }

        $producto = Producto::find($id);

        $data["slug"]= $this::slugfy($data["producto_nombre"]);
        $producto->update($data);

        return redirect('home/producto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::find($id)->delete();
        return $producto;
    }


    public static function slugfy($text, $length = null)
    {
        $replacements = [
            '<' => '', '>' => '', '-' => ' ', '&' => '', '"' => '', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae', '??' => 'C', "'" => '', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'D', '??' => 'D', '??' => 'D', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'G', '??' => 'G', '??' => 'G', '??' => 'G', '??' => 'H', '??' => 'H', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'IJ', '??' => 'J', '??' => 'K', '??' => 'L', '??' => 'L', '??' => 'L', '??' => 'L', '??' => 'L', '??' => 'N', '??' => 'N', '??' => 'N', '??' => 'N', '??' => 'N', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'Oe', '??' => 'Oe', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'OE', '??' => 'R', '??' => 'R', '??' => 'R', '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'S', '??' => 'T', '??' => 'T', '??' => 'T', '??' => 'T', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Ue', '??' => 'U', '??' => 'Ue', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'W', '??' => 'Y', '??' => 'Y', '??' => 'Y', '??' => 'Z', '??' => 'Z', '??' => 'Z', '??' => 'T', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'ae', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'f', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'h', '??' => 'h', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'ij', '??' => 'j', '??' => 'k', '??' => 'k', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'oe', '??' => 'oe', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'oe', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 's', '??' => 's', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'ue', '??' => 'u', '??' => 'ue', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'w', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 't', '??' => 'a', '??' => 'ss', '???' => 'b', '??' => 'ss', '????' => 'iy', '??' => 'A', '??' => 'B', '??' => 'V', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'YO', '??' => 'ZH', '??' => 'Z', '??' => 'I', '??' => 'Y', '??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => 'O', '??' => 'P', '??' => 'R', '??' => 'S', '??' => 'T', '??' => 'U', '??' => 'F', '??' => 'H', '??' => 'C', '??' => 'CH', '??' => 'SH', '??' => 'SCH', '??' => '', '??' => 'Y', '??' => '', '??' => 'E', '??' => 'YU', '??' => 'YA', '??' => 'a', '??' => 'b', '??' => 'v', '??' => 'g', '??' => 'd', '??' => 'e', '??' => 'yo', '??' => 'zh', '??' => 'z', '??' => 'i', '??' => 'y', '??' => 'k', '??' => 'l', '??' => 'm', '??' => 'n', '??' => 'o', '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'u', '??' => 'f', '??' => 'h', '??' => 'c', '??' => 'ch', '??' => 'sh', '??' => 'sch', '??' => '', '??' => 'y', '??' => '', '??' => 'e', '??' => 'yu', '??' => 'ya', '.' => '-', '???' => '-eur-', '$' => '-usd-'
        ];
        // Replace non-ascii characters
        $text = strtr($text, $replacements);
        // Replace non letter or digits with "-"
        $text = preg_replace('~[^\pL\d.]+~u', '-', $text);
        // Replace unwanted characters with "-"
        $text = preg_replace('~[^-\w.]+~', '-', $text);
        // Trim "-"
        $text = trim($text, '-');
        // Remove duplicate "-"
        $text = preg_replace('~-+~', '-', $text);
        // Convert to lowercase
        $text = strtolower($text);
        // Limit length
        if (isset($length) && $length < strlen($text))
            $text = rtrim(substr($text, 0, $length), '-');

        return $text;
    }
}
