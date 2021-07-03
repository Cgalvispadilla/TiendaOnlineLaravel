<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = producto::paginate(2);
        return view('admin.productos.index', compact('productos'));
        
    }
    public function index_cliente()
    {
        //
        $productos = producto::all();
        return view('index', compact('productos'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada=$request->all();
        $producto=producto::create($entrada);
        $file = $request->file('imagen');
        $nombre = $file->getClientOriginalName();
        $vector=explode('.',$nombre);
        $formato=$vector[sizeof($vector)-1];
        $nombre=$producto->id.'.'.$formato;
        $file->move('images/productos', $nombre);
        $producto->imagen=$nombre;
        $producto->save();
        
        return redirect()->route('admin/productos');
        // return view('admin.productos.index');


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
        $producto = producto::find($id);
        return view('admin.productos.edit', compact('producto'));
    }
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, ['nombre'=>'required']);
        $producto=producto::find($id);
        $file = $request->file('imagen');
        
        //comprobamos si enviaron o no la imagen
        if($file != null){
            //se busca la imagen
            $image_path = public_path().'/images/productos/'.$producto->imagen;
            unlink($image_path); //se elimina 
            //se realiza el cambio de nombre a la imagen
            $nombre = $file->getClientOriginalName();
            $vector=explode('.',$nombre);
            $formato=$vector[sizeof($vector)-1];
            $nombre=$producto->id.'.'.$formato;
            $file->move('images/productos', $nombre);
            //se modifica el producto
            $producto->imagen=$nombre;
            $producto->nombre=$request->nombre;
            $producto->Descripcion=$request->Descripcion;
            $producto->precio=$request->precio;
            $producto->talla=$request->talla;
            $producto->categoria=$request->categoria;
            $producto->Descripcion=$request->Descripcion;
            $producto->cantidad=$request->cantidad;
            $producto->color=$request->color;
            $producto->update(); 
            return redirect()->route('admin/productos');
        }else{
        $producto->imagen=$producto->imagen;
        $producto->nombre=$request->nombre;
        $producto->Descripcion=$request->Descripcion;
        $producto->precio=$request->precio;
        $producto->talla=$request->talla;
        $producto->categoria=$request->categoria;
        $producto->Descripcion=$request->Descripcion;
        $producto->cantidad=$request->cantidad;
        $producto->color=$request->color;
        $producto->update();
        return redirect()->route('admin/productos');
        } 
        
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
        producto::find($id)->delete();
        return redirect()->route('admin/productos');
        
    }
}
