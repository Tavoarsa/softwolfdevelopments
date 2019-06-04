<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias= Categoria::orderBy('id','DESC')->paginate();//dd($tags);
        return view('inventario.categoria.index',compact('categorias'));//array 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $request->validate([
            'nombreC' => 'required|min:3',
            'descripcion' => 'required',
        ]);
        
        $categoria = Categoria::create(['nombreC' => $request->nombreC,'descripcion' => $request->descripcion]);
        return redirect('/categoria/'.$categoria->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $categoria= Categoria::where('id',$id)->first(); 
      return view('inventario.categoria.show',compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categoria= Categoria::where('id',$id)->first();
         return view('inventario.categoria.edit',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cate = Categoria::findOrFail($request->id);

        $request->validate([
            'nombreC' => 'required|min:3',
            'descripcion' => 'required',
            
        ]);


        $cate->nombreC = $request->nombreC;
        $cate->descripcion = $request->descripcion;
       

       
        $cate->save();


        
        return redirect('categoria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $cate=Categoria::find($id)->delete();
        return back()->with('info','Categoria eliminado correctamente');
    }
}
