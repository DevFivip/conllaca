<?php

namespace App\Http\Controllers;

use App\Models\Headertron;
use Illuminate\Http\Request;

class HeadertronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $headertrons = Headertron::all();
        return view('dashboard.headertron.index', compact('headertrons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('dashboard.headertron.create');
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

        if (isset($data['imagen'])) {
            $image = $request->file('imagen');

            $filename = time() . '.' . $image->getClientOriginalName();

            $path = $request->imagen->storeAs('public/', $filename);
            $data['imagen'] = $filename;
        }

        $headertron = Headertron::create($data);

        return redirect('headertron');
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

        $headertron = Headertron::find($id);
        return view('dashboard.headertron.edit', compact('headertron'));
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

        $headertron = Headertron::find($id);
        $headertron->update($data);

        return redirect('headertron');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $headertron = Headertron::find($id)->delete();
        return $headertron;
    }
}
