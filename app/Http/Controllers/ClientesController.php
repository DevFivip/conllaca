<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Facade\FlareClient\Http\Client;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::all();
        return view('dashboard.cliente.index', compact('clientes'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('dashboard.cliente.create');
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

        $cliente = Cliente::create($data);

        return redirect('home/cliente');
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
        $cliente = Cliente::find($id);
        return view('dashboard.cliente.edit', compact('cliente'));
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

        if (isset($data['imagen'])) {
            $image = $request->file('imagen');

            $filename = time() . '.' . $image->getClientOriginalName();

            $path = $request->imagen->storeAs('public/', $filename);
            $data['imagen'] = $filename;
        }

        $cliente = Cliente::find($id);
        $cliente->update($data);

        return redirect('home/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id)->delete();

        return $cliente;

        //
    }
}
