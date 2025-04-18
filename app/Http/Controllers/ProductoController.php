<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductoCollection;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ProductoCollection(Producto::where('disponible', 1)->get());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
       // Alternar el valor de disponible entre 1 y 0
    $producto->disponible = $producto->disponible == 1 ? 0 : 1;
    $producto->save();

    return [
        'status' => 'success',
        'message' => 'Producto actualizado correctamente',
        'data' => $producto
    ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
