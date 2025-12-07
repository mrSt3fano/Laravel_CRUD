<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $obtProd=Producto::all();
        return view('vistaProductos',['productos'=>$obtProd]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos=Producto::all();
        return view('CrearForm',compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombreProducto'=> 'required|string',
            'precioProducto'=> 'required|numeric|min:1',
            'stockProducto'=> 'required|integer|min:0'
        ]);

        Producto::create([
           'nombre' => $request->input('nombreProducto'),
        'precio' => $request->input('precioProducto'),
        'stock'  => $request->input('stockProducto'),
        ]);


        return redirect('/redirigir1');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $devolver = Producto::latest()->first();
        if (!$devolver) {
        return 'No hay productos registrados';
        }

        return view('prodRegistrados', ['devolver' => $devolver]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $id)
    {
        $productos=Producto::all();
        return view ('yield-section',compact('id','productos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $id)
    {

        $request->validate([
            'nombreProducto'=> 'required|string',
            'precioProducto'=> 'required|numeric|min:1',
            'stockProducto'=> 'required|integer|min:0'
        ]);

        $id->update([
            'nombre'=>$request->nombreProducto,
            'precio'=>$request->precioProducto,
            'stock'=>$request->stockProducto
        ]);
        return view('welcome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $id)
    {
        $id->delete();
        return view('welcome');
    }
}
