<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\v1\producto;

class ProductosControllers extends Controller
{

    function obtenerLista()
    {
        $productos = producto::all();
        return $productos;
    }

    public function create(Request $request)
    {
        $producto = new Producto();
        $producto->codigo = $request->codigo;
        $producto->nombre = $request->nombre;
        $producto->save();
        $response = new \stdClass();
        $response->success = true;
        return $producto;
        return response()->json($response, 200);
    }

    function delete($id)
    {
        // $producto =  Producto::find($id);
        // $producto->delete();
        // $response = new \stdClass();
        // $response->success = true;
        // return response()->json($response, 200);

        $response = new \stdClass();
        $response->success = true;
        
        $producto =  Producto::find($id);
       
        if ($producto) {
            $producto->delete();
            $response_code = 500;
            return $producto;
        } 
        else {
            $response->error = "el producto ya fue eliminado";
            $response->success = true;
            $response->data = $producto;
        }
        
        return response()->json($response, 200);
    }

    function update(Request $request, $id)
    {
        $producto =  Producto::find($request->$id);
        if ($producto) {
            $producto->codigo = $request->codigo;
            $producto->nombre = $request->nombre;
            $producto->save();
        }
        $response = new \stdClass();
        $response->success = true;
        $response->data = $producto;

        return response()->json($response, 200);
    }

    function patch(Request $request, $id)
    {
        $producto =  Producto::find($request->$id);
        if ($producto) {
            if (isset($request->codigo)) $producto->codigo = $request->codigo;
            if (isset($request->nombre)) $producto->nombre = $request->nombre;
            $producto->save();
        }
        $response = new \stdClass();
        $response->success = true;
        $response->data = $producto;
        return response()->json($response, 200);
    }

    function obtenerItem($id)
    {
        $response = new \stdClass();
        $response->success = true;
        
        $producto =  Producto::find($id);
        return $producto;
        return response()->json($response, 200);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = new \stdClass();
        $productos = producto::all();
        $response->succes = true;
        $response->data = $productos;
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
