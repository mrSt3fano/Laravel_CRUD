<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=Auth::user();
        $productos=Producto::all();
        return view('vistaProductos',compact('user','productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=Auth::user();
        $productos=Producto::all();
        return view('CrearForm',compact('user','productos'));
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


         return redirect('/productos');
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

         return redirect('/productos');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $id)
    {
         $user=Auth::user();
        $productos=Producto::all();
        return view ('EditarProd',compact('id','productos','user'));
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
        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $id)
    {
        $id->delete();
        return redirect('/productos');
    }
}
