<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use App\Factura;
use App\DetalleFactura;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::orderBy('id','DESC')->paginate();
        //$detalle = DetalleFactura::orderBy('id','DESC')->paginate();
       

           $detalle=DB::table('detalleFactura')
                        ->select('cantidad','unidadMedidad','detalle','precioUnitario','montoTotal','subTotal','monTotalLinea','montoDescuento','naturalezaDescuento')
                        ->get();

             //dd($detalle);            
           //DetalleFactura::orderBy('id','DESC')->first();
           $hola= $detalle->toJson();
            //dd($hola);        
        return view('factura.index',compact('facturas'));//array 


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
 
    public function getFactura($id){

        
        $receptor= DB::table('fincas as f')
                    ->join('users as u','f.id_user','=','u.id')
                    ->where('u.id',$id)
                    ->select('u.name','email','nombre_comercial','tipo_indetif','num_identif','provincia','canton','distrito','barrio','otras_senas','cod_pais_tel','tel','cod_pais_fax','fax')
                    ->first();
        $emisor= DB::table('users')
                    ->where('admin','=',1)
                    ->select('name', 'email','nombre_comercial','tipo_indetif','num_identif','provincia','canton','distrito','barrio','otras_senas','cod_pais_tel','tel','cod_pais_fax','fax')
                    ->first();
        $orden= DB::table('ordenestrabajos')
                    ->where('id','=',$id)
                    ->select('orden_num','total_orden','detalle_servicio')
                    ->first();//dd($orden)    ;

        $factura= new Factura();
        $factura->emisor_nombre             =$emisor->name;
        $factura->emisor_tipo_indetif       =$emisor->tipo_indetif;
        $factura->emisor_num_identif        =$emisor->num_identif;
        $factura->nombre_comercial          =$emisor->nombre_comercial;
        $factura->emisor_provincia          =$emisor->provincia;
        $factura->emisor_canton             =$emisor->canton;
        $factura->emisor_distrito           =$emisor->distrito;
        $factura->emisor_barrio             =$emisor->barrio;
        $factura->emisor_otras_senas        =$emisor->otras_senas;    
        $factura->emisor_cod_pais_tel       =$emisor->cod_pais_tel;
        $factura->emisor_tel                =$emisor->tel;
        $factura->emisor_cod_pais_fax       =$emisor->cod_pais_fax;
        $factura->emisor_fax                =$emisor->fax;
        $factura->emisor_email              =$emisor->email;
        $factura->receptor_nombre           =$receptor->name;
        $factura->receptor_tipo_identif     =$receptor->tipo_indetif;
        $factura->receptor_num_identif      =$receptor->num_identif;
        $factura->receptor_provincia        =$receptor->provincia;
        $factura->receptor_canton           =$receptor->canton;
        $factura->receptor_distrito         =$receptor->distrito;
        $factura->receptor_barrio           =$receptor->barrio;
        $factura->receptor_cod_pais_tel     =$receptor->cod_pais_tel;
        $factura->receptor_tel              =$receptor->tel;
        $factura->receptor_cod_pais_fax     =$receptor->cod_pais_fax;
        $factura->receptor_fax              =$receptor->fax;
        $factura->receptor_email            =$receptor->email;
        $factura->condicion_venta           =01;
        $factura->plazo_credito             =0;
        $factura->medio_pago                =01;
        $factura->cod_moneda                ='CRC';
        $factura->tipo_cambio               =564.8;
        $factura->total_serv_gravados       =0;
        $factura->total_serv_exentos        =$orden->total_orden; 
        $factura->total_merc_gravada        =0;
        $factura->total_merc_exenta         =0;
        $factura->total_gravados            =0;
        $factura->total_exentos             =$orden->total_orden;
        $factura->total_ventas              =$orden->total_orden;
        $factura->total_descuentos          =0;
        $factura->total_ventas_neta         =$orden->total_orden;
        $factura->total_impuestos           =0;
        $factura->total_comprobante         =$orden->total_orden;
        $factura->otros                     =$orden->orden_num;

        $factura->save();

        $idFactura= Factura::orderBy('id','DESC')->first(); 

        $detalle= new DetalleFactura();
        $detalle->id_factura        =$idFactura->id;
        $detalle->cantidad          =1;
        $detalle->unidadMedidad      ='Sp';
        $detalle->detalle           =$orden->detalle_servicio;
        $detalle->precioUnitario    =$orden->total_orden; 
        $detalle->montoTotal        =$orden->total_orden;
        $detalle->subTotal          =$orden->total_orden; 
        $detalle->monTotalLinea    =$orden->total_orden;
        $detalle->montoDescuento    =0;
        $detalle->naturalezaDescuento="N/A";
        $detalle->save();


        dd("Good");



      


                    
    }
}
