<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
use App\Codificacion_mh;
use DB;

class CompaniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $compania= Compania::where('admin',1)->get();
        return view('compania.index',compact('compania'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $provincias= DB::table('codificacion_mh as p')
                    ->select('p.idProvincia','p.nombreProvincia')
                    ->where('p.idProvincia','<=',7)
                    ->orderBy('p.nombreProvincia','DESC')
                    ->pluck('p.nombreProvincia','p.idProvincia');//dd("Provincia",$provincias);
         

        /*$cantones= DB::table('codificacion_mh as p')
                    ->select('p.idCanton','p.nombreCanton')
                    ->where('p.idProvincia','=',2)
                    ->orderBy('p.nombreCanton','DESC')
                    ->pluck('p.nombreCanton','p.idCanton');  *///dd("Canton",$cantones); 

        /*$distritos= DB::table('codificacion_mh as p')
                    ->select('p.idDistrito','p.nombreDistrito')
                    ->where('p.idProvincia','=',2)
                    ->orderBy('p.nombreDistrito','DESC')
                    ->pluck('p.nombreDistrito','p.idDistrito'); *///dd("Distrito",$distritos);

       /* $barrios= DB::table('codificacion_mh as p')
                    ->select('p.idBarrio','p.nombreBarrio')
                    ->where('p.idBarrio','=',017)
                    ->orderBy('p.nombreBarrio','DESC')
                    ->pluck('p.nombreBarrio','p.idBarrio'); */ //dd("Barrio",$barrios);  

        $compania = User::where('admin',1)->first(); // dd($compania->id);

        return view('compania.edit', compact('compania','provincias'));
    }
    public function getCantones(Request $request, $id){

        if($request->ajax()){

            $cantones= Codificacion_mh::cantones($id);
            return response()->json($cantones);
        }

    }

    public function getDistritos(Request $request, $id){

        
        if($request->ajax()){

            $provincia=2;
            $distritos= Codificacion_mh::distritos($id,$provincia);
            return response()->json($distritos);
        }

    }

    public function getBarrios(Request $request, $id){

        if($request->ajax()){
            
            $barrios= Codificacion_mh::barrios($id);
            return response()->json($barrios);
        }

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
       $comp = User::findOrFail($request->id);

        $request->validate([
            'name' => 'required|min:3',
            'num_identif' => 'required',
            'email' => 'required|unique:users,email,'.$request->id,
        ]);


        $comp->name = $request->name;
        $comp->tipo_indetif = $request->tipo_indetif;
        $comp->num_identif = $request->num_identif;
        $comp->email = $request->email;
        $comp->nombre_comercial = $request->nombre_comercial;
        $comp->provincia = $request->provincia;
        $comp->canton = $request->canton;
        $comp->distrito = $request->distrito;
        $comp->barrio = $request->barrio;
        $comp->otras_senas = $request->otras_senas;
        $comp->cod_pais_tel = 506;
        $comp->tel = $request->tel;
        $comp->cod_pais_fax = 506;
        $comp->fax = $request->fax;

       
        $comp->save();


        
        return redirect('/admin');
        
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
