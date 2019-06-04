<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Finca;
use App\User;

use DB;

class FincaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fincas = DB::table('fincas as f')
                    ->join('users as u', 'f.id_user','=','u.id')
                    ->select('f.nombreF','f.id','f.descripcionF','u.name')
                    ->orderBy('id','DESC')
                    ->paginate(); //dd($productos);
        return view('finca.index',compact('fincas'));//array 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users= DB::table('users')->get();
        return view('finca.create',compact('users'));//array 
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
            'nombreF' => 'required|min:3',
            'descripcionF' => 'required',
            'usuario' => 'required',
        ]);
        
        $finca = Finca::create(['nombreF' => $request->nombreF,'descripcionF' => $request->descripcionF,'id_user' => $request->usuario]);
        return redirect('/finca/'.$finca->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $finca= Finca::where('id',$id)->first(); 
        return view('finca.show',compact('finca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $finca= Finca::findOrFail($id);//dd($producto);
         $usuarios= User::all()->pluck('name','id');//dd($categorias);
         return view('finca.edit',compact('finca','usuarios'));
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
        $fin = Finca::findOrFail($request->id);

          $request->validate([
            'nombreF' => 'required|min:3',
            'descripcionF' => 'required',
            'usuario' => 'required',
        ]);


        $fin->nombreF = $request->nombreF;
        $fin->descripcionF = $request->descripcionF;
        $fin->id_user = $request->usuario;
       

       
        $fin->save();


        
        return redirect('finca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fin=Finca::find($id)->delete();
        return back()->with('info','Finica eliminado correctamente');
    }
}
