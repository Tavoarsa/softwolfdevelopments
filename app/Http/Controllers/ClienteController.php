<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente= User::where('admin',0)->get();//dd($cliente);

        return view('cliente.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
    public function show(User $user)
    {
       // dd($user);
        $id='1';
        $cliente= User::where('id',$id)->first(); 
        return view('cliente.show',compact('cliente'));      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //dd($id);
        $cliente= User::where('id',$id)->first();//dd($cliente);
        return view('cliente.edit',compact('cliente'));
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
        $clien = User::findOrFail($request->id);

        $request->validate([
            'name' => 'required|min:3',
            'tipo_indetif'=>'required',
            'num_identif' => 'required',
            'nombre_comercial'=>'required',
            'provincia'=>'required',
            'canton'=>'required',
            'distrito'=>'required',
            'barrio'=>'required',
            'otras_senas'=>'required',
            
            'tel'=>'required',
           
            'fax'=>'required',           
            'email' => 'required|unique:users,email,'.$request->id,
        ]);


        $clien->name = $request->name;
        $clien->tipo_indetif = $request->tipo_indetif;
        $clien->num_identif = $request->num_identif;
        $clien->email = $request->email;
        $clien->nombre_comercial = $request->nombre_comercial;
        $clien->provincia = $request->provincia;
        $clien->canton = $request->canton;
        $clien->distrito = $request->distrito;
        $clien->barrio = $request->barrio;
        $clien->otras_senas = $request->otras_senas;
        $clien->cod_pais_tel = 506;
        $clien->tel = $request->tel;
        $clien->cod_pais_fax = 506;
        $clien->fax = $request->fax;

       
        $clien->save();


        
        return redirect('cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($user);
        $user=User::find($id)->delete();
        return back()->with('info','Cliente eliminado correctamente');
    }
}
