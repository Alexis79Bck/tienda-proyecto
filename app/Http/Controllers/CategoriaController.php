<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id', 'desc')->paginate(15);
        return view('admin.categorias.index', compact('categorias'));
        
        //$categorias = Categoria::all();
        //return view('admin.categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Muestra el Formulario (Vista) para crear un registro.
     */
    public function create()
    {
        return view('admin.categorias.crear');
    }

    /**
     * Almacena o Guarda los datos del Formulario.
     * Es decir Crea el registro en la Base de datos.
     *   
     *  La clase StoreCategoriaRequest Es una clase que me permitirá establecer las
     *  reglas de validacion para los datos que se recibe del formulario.
     * 
     *  Si los datos no cumple con las regras establecida, este mostrara un error.
     */
    public function store(StoreCategoriaRequest $request)
    {
        
        Categoria::create([
            'nombre' => $request->input('nombre'),
            'mostrar' => $request->input('mostrar') == 'verdadero' ? true : false
        ]);

        return redirect()->route('categorias.index')
                         ->with('mensaje','Categoria creada exitosamente.');
    }

    /**
     * Muestra la información de un registro.
     * La clase Categoria me permite buscar y encontrar rapidamente el 
     * modelo asociado al parametro (id) que proviene de la URL y obtener
     * la información a procesar.
     */
    public function show(Categoria $categoria)
    {
        return view('admin.categorias.mostrar', compact('categoria'));
    }

    /**
     * Muestra el Formulario (Vista) de Editar
     * La clase Categoria me permite buscar y encontrar rapidamente el 
     * modelo asociado al parametro (id) que proviene de la URL y obtener
     * la información a procesar.
     */
    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.editar', compact('categoria'));
    }

    /**
     * Actualiza la información de un recurso.
     * 
     * La clase UpdateCategoriaRequest Es una clase que me permitirá establecer las
     * reglas de validacion para los datos que se recibe del formulario.
     * 
     * Si los datos no cumple con las regras establecida, este mostrara un error.
     * 
     * La clase Categoria me permite buscar y encontrar rapidamente el 
     * modelo asociado al parametro (id) que proviene de la URL y obtener
     * la información a procesar.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        
        $categoria->nombre = $request->input('nombre');
        $categoria->mostrar = $request->input('mostrar')  == 'verdadero' ? true : false;
        $categoria->save();

        return redirect()->route('categorias.index')->with('mensaje','Categoria actualizada exitosamente');
    }

    /**
     * Elimina de forma lógica un registro.
     * 
     * La clase Categoria me permite buscar y encontrar rapidamente el 
     * modelo asociado al parametro (id) que proviene de la URL y obtener
     * la información a procesar.
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('mensaje','Categoria eliminada exitosamente');
    }
}

/**
 * Les hago la siguiente observacion, cuando se trabaja con CRUDs, recuerden que se relaciona con Un
 * Modelo, si deben realizar varios CRUDs, deben hacer estos procedimientos en cada Controlador que este
 * asociado.
 */
