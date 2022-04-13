<?php

namespace App\Http\Controllers;

use App\Models\Informacion;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $info = Informacion::first();
        $info = $info->toArray();
        return view('dashboard.informacion.formulario', compact('info'));
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

        if (isset($data['logo'])) {
            $image = $request->file('logo');

            $filename = time() . '.' . $image->getClientOriginalName();


            // $path = public_path('images/' . $filename);
            // // // Image::make($image->getRealPath())->resize(200, 200)->save($path);


            // $original_file_name = $request->file->getClientOriginalName();

            $path = $request->logo->storeAs('public/', $filename);
            $data['logo'] = $filename;
        }

        $info = Informacion::find($id);
        $info->update($data);

        return redirect('home');
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
    }
}
