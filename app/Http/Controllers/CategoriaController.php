<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Http\Requests\StoreUpdateCategoriaRequest;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::paginate(3);

        return view('pages.categorias.index', [
            'categorias' => $categorias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateCategoriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateCategoriaRequest $request)
    {
        $data = $request->only('nome');
        Categoria::create($data);
        return redirect()->route('categorias.index');
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
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return redirect()->back();
        }
        return view('pages.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreUpdateCategoriaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateCategoriaRequest $request, $id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return redirect()->back();
        }
        $categoria->update($request->all());
        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        if (!$categoria) {
            return redirect()->back();
        }
        $categoria->delete();
        return redirect()->route('categorias.index');
    }
}
