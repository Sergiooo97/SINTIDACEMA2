<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materiales;
use App\Exports\materialesG;
use App\Exports\reporteUExport;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf; 
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use ToSweetAlert;

class almacenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $grupo = $request->get('grupo');
        $data = materiales::grupo($grupo)->get();
        return view('almacen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        toast('Registro de datos :)','info');

        return view('almacen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'id_partida' => 'required|integer',
            'numero_orden' => 'required|string',
            'lugar_entrega' => 'required|string',
            'N_partida' => 'required|string',
            'cantidad' => 'required|integer',
            'unidad' => 'required|string',
            'grupos' => 'required|string',
            'partes' =>'required|string',
            'descripcion' =>'required|string',
            'fecha_entrada' => 'required|date',
            'fecha_salida' => 'required|date',
            'precio' =>'required|integer',
            'importe' =>'required|integer',


        ],
            [
                'id_partida.required' => 'id de partida esta vacio :(',
                'id_partida.integer' => 'id de partida debe ser numero :(',
                'numero_orden.required' => 'El numero de orden es requerido :(',
                'lugar_entrega.required' => 'El lugar de entrega es requerido :(',
                'N_partida.required' => 'N_partida es requerido :(',
                'cantidad.required' => 'La cantidad es requerido :(',
                'cantidad.integer' => 'La cantidad debe ser un numero :(',
                'unidad.required' => 'Unidad es requerido :(',
                'grupos.required' => 'Grupos es requerido :(',
                'partes.required' => 'Pates es requerido :(',
                'fecha_entrada.required' => 'La fecha de entrada es requerido :(',
                'fecha_salida.required' => 'La fecha de entrada es requerido :(',
                'precio.required' => 'El precio es requerido :(',
                'precio.integer' => 'El precio debe ser un numero :(',
                'importe.required' => 'El importe es requerido :(',
                'importe.integer' => 'El importe debe ser un numero :(',
            ]);
        $data = request()->all();
        materiales::create($data);

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reportes()
    {
        $data = materiales::all();
        return view('almacen.reportes', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = materiales::where('id',$id)->first();

        return view('almacen.edit', compact('data'));

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
       
        $materiales = materiales::find($id);
        $materiales->update($request->all());
        
        return back();
    }
    public function export_reporte_general(){
        $materiales = materiales::orderBy('id','ASC')->get();
        
          return Excel::download(new materialesG($materiales), " Reportes.xlsx");
    }
    public function export_reporte_individual($id, $id_partida){
      
        $materiales = materiales::where('id', $id)->first();
        return Excel::download(new reporteUExport($materiales), $id_partida." reporte.xlsx");
    }
    public function export_reporte_individual_pdf($id, $id_partida){
      
        $materiales = materiales::where('id', $id)->first();
        $pdf = PDF::loadView('exports.excel.reporte_individual', compact('materiales'))->setPaper('a4', 'landscape');
    return $pdf->download($id_partida.'invoice.pdf');

        return Excel::download(new reporteUExport($materiales), $id_partida." reporte.xlsx");
    }

    public function export_reporte_general_pdf(){
        $materiales = materiales::orderBy('fecha_salida','ASC')->get();
        $pdf = PDF::loadView('exports.excel.reporte_general', compact('materiales'))->setPaper('a', 'landscape');
        return $pdf->download('Reportes.pdf');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materiales = materiales::find($id);
        $materiales->delete();
       
        return  back();

    }
    public function deletem($id)
    {
        $d = materiales::where('id', $id)->first();
        
       
        return  view('almacen.delete',compact('d'));

    }
}
