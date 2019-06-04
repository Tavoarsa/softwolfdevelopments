<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Finca;
use App\Equipo;

use DB;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $equipos = DB::table('equipos as e')
                    ->join('fincas as f', 'e.finca_id','=','f.id')
                    ->select('e.nombreE','e.id','e.descripcionE','f.nombreF')
                    ->orderBy('id','DESC')
                    ->paginate(); //dd($productos);
        return view('equipo.index',compact('equipos'));//array 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fincas= DB::table('fincas')->get();
        return view('equipo.create',compact('fincas'));
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
            'nombreE' => 'required|min:3',
            'descripcionE' => 'required',
            'finca' => 'required',
        ]);
        
        $equipo = Equipo::create(['nombreE' => $request->nombreE,'descripcionE' => $request->descripcionE,'finca_id' => $request->finca,'categoriaE' => $request->categoriaE,'serie' => $request->serie,'modelo' => $request->modelo,'puestos' => $request->puestos]);
        return redirect('/equipo/'.$equipo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $equipo= Equipo::where('id',$id)->first(); 
        return view('equipo.show',compact('equipo'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipo= Equipo::findOrFail($id);//dd($producto);
        $fincas= Finca::all()->pluck('nombreF','id');//dd($categorias);
         return view('equipo.edit',compact('equipo','fincas'));
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
        $equip = Equipo::findOrFail($request->id);

          $request->validate([
            'nombreE' => 'required|min:3',
            'descripcionE' => 'required',
            'finca' => 'required',
        ]);


        $equip->nombreE = $request->nombreE;
        $equip->descripcionE = $request->descripcionE;
        $equip->finca_id = $request->finca;
        $equip->categoriaE = $request->categoriaE;
        $equip->serie = $request->serie;
        $equip->modelo = $request->modelo;
        $equip->puestos = $request->puestos;
       

       
        $equip->save();


        
        return redirect('equipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equip=Equipo::find($id)->delete();
        return back()->with('info','Equipo eliminado correctamente');
    }
}
