<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use App\Categoria;

use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= DB::table('productos as p')
                    ->join('categorias as c', 'p.categoria_id','=','c.id')
                    ->select('p.nombreP','p.id','p.proveedor','p.cantidad','p.precioCompra','p.precioVenta','c.nombreC')
                    ->orderBy('id','DESC')
                    ->paginate(); //dd($productos);

        
        return view('inventario.producto.index',compact('productos'));//array 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias= DB::table('categorias')->get();
        return view('inventario.producto.create',compact('categorias'));//array 
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
            'nombreP' => 'required|min:3',
            'cantidad' => 'required',
            'categoria' => 'required',
        ]);
        
        $producto = Producto::create(['nombreP' => $request->nombreP,'cantidad' => $request->cantidad,'categoria_id' => $request->categoria,'proveedor' => $request->proveedor,'precioCompra' => $request->precioCompra,'precioVenta' => $request->precioVenta]);
        return redirect('/producto/'.$producto->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto= Producto::where('id',$id)->first(); 
        return view('inventario.producto.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto= Producto::findOrFail($id);//dd($producto);
        $categorias= Categoria::all()->pluck('nombreC','id');//dd($categorias);

         return view('inventario.producto.edit',compact('producto','categorias'));
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
        $prod = Producto::findOrFail($request->id);

        $request->validate([
            'nombreP' => 'required|min:3',
            'cantidad' => 'required',
            'categoria' => 'required',
            
        ]);


        $prod->nombreP = $request->nombreP;
        $prod->cantidad = $request->cantidad;
        $prod->categoria_id = $request->categoria;
        $prod->proveedor = $request->proveedor;
        $prod->precioCompra = $request->precioCompra;
        $prod->precioVenta = $request->precioVenta; 
       

       
        $prod->save();


        
        return redirect('producto');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

      public function destroy($id)
    {
       $prod=Producto::find($id)->delete();
        return back()->with('info','Producto eliminado correctamente');
    }
}   

