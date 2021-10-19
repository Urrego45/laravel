<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Perdida;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facturas = Factura::all();

        return view('factura.index', ['facturas' => $facturas]);
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
        $request->validate([
            'nombre' => 'required|max:255',
            'valor'=> 'required|max:255',
        ]);        

        $factura = new Factura;
        $factura->id = rand(1000000000000000, 9999999999999990);
        $factura->nombre = $request->nombre;
        $factura->valor = $request->valor;
        $factura->save();

        return redirect()->route('factura.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::find($id);
        return view('factura.show', ['factura' => $factura]);
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
        $factura = Factura::find($id);
        $factura->nombre = $request->nombre;
        $factura->valor = $request->valor;
        $factura->save();

        return redirect()->route('factura.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $factura = Factura::find($id);
        $perdida = new Perdida;
        $perdida->id_facturas = strval($factura->id);
        $perdida->nombre = $factura->nombre;
        $perdida->valor = $factura->valor;
        $perdida->save();

        $factura->delete();
        return redirect()->route('factura.index');
    }
}
