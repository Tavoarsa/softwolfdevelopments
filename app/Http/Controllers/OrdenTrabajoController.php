<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use App\Finca;
use App\Equipo;
use App\OrdenTrabajo;
use App\User;
use DB;

class OrdenTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    $ordenes= DB::table('ordenestrabajos as ot')
                    ->join('fincas as f', 'ot.id_finca','=','f.id')
                    ->join('equipos as eq','ot.id_equipo','=','eq.id')
                    ->select('ot.id','ot.orden_num','ot.fecha_visita','ot.plaza_credito','status','ot.total_orden','f.nombreF','eq.nombreE','f.id_user as id_finca')
                    ->orderBy('orden_num','DESC')
                    ->paginate(); //dd($ordenes);

    return view('orden.index',compact('ordenes'));//array               
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $orden = OrdenTrabajo::pluck('orden_num');

        if ($orden->isEmpty()) {
            $orden_num=1;
        }else{
           $orden_num=$orden->last() + 1;
            //dd($orden->last());
        }
        
                     
           
        

        $users= User::where('admin',0)->get();

        $fincas= Finca::pluck('nombreF','id');//dd($tags);
                  
        $productos= DB::table('productos as p')
                    ->join('categorias as c', 'p.categoria_id','=','c.id')
                    ->select('p.nombreP','p.id','p.proveedor','p.cantidad','p.precioCompra','p.precioVenta','c.nombreC')
                    ->orderBy('id','DESC')
                    ->paginate(); //dd($productos);
       /* $equipos = DB::table('equipos as e')
                    ->join('fincas as f', 'e.finca_id','=','f.id')
                    ->select('e.nombreE','e.id','e.descripcionE','f.nombreF')
                    ->orderBy('id','DESC')
                    ->paginate();*/

        return view('orden.create',compact('productos','fincas','equipos','orden_num','users'));
    }

    public function getEquipos(Request $request, $id){

        if($request->ajax()){
            $equipos= Equipo::equipos($id);
            return response()->json($equipos);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            
            'tipo_visita'=>'required',
            'descripcion_servicio' => 'required',
            'detalle_servicio'=>'required',
            'date'=>'required',
            'plaza_credito'=>'required',
            'costo_servicio'=>'required',
            'costo_kilometraje'=>'required',
            'total_orden'=>'required',
            
            'responsable_finca'=>'required',
         
            'realizado'=>'required',           
            
        ]);

        $orden= new OrdenTrabajo();
        $orden->orden_num=              $request->orden_num;
        $orden->id_finca =              $request->finca;
        $orden->id_equipo =             $request->equipo;
        $orden->fecha_visita =          $request->date; 
        $orden->tipo_visita=            $request->tipo_visita;
        $orden->descripcion_servicio=   $request->descripcion_servicio;
        $orden->detalle_servicio=       $request->detalle_servicio;
        $orden->costo_servicio=         $request->costo_servicio;
        $orden->costo_kilometraje=      $request->costo_kilometraje;
        $orden->total_orden =           $request->total_orden;
        $orden->plaza_credito=          $request->plaza_credito;
        $orden->responsable_finca=      $request->responsable_finca;
        $orden->realizado=              $request->realizado;
        $orden->status=                 1;
        $orden->save();


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
