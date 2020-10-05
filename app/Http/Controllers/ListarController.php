<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listado;
use DB;
class ListarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $usuarios= Listado::all();

        return view('index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=  $this->validate($request, [
         'name' => 'required|min:3|max:50',
         'apaterno' => 'required|min:3|max:50',
         'amaterno' => 'required|min:3|max:50',
         'rfc' => 'required|min:3|max:50|unique:usuario,rfc',
         'fechanacimiento' => 'required',

     ],
     [
       'name.required' => 'El nombre es requerido',
       'name.max' => 'El nombre no debe de contener más de 50 caracteres. ',
       'name.min' => 'Debe contener al menos 3 caracteres.',
       'apaterno.required' => 'El apellido paterno es requerido',
       'apaterno.max' => 'El apellido paterno no debe de contener más de 50 caracteres. ',
       'apaterno.min' => 'Debe contener al menos 3 caracteres.',
       'amaterno.required' => 'El apellido materno es requerido',
       'amaterno.max' => 'El apellido materno no debe de contener más de 50 caracteres. ',
       'amaterno.min' => 'Debe contener al menos 3 caracteres.',
       'rfc.required' => 'El rfc es requerido.',
        'rfc.max' => 'El rfc no debe de contener más de 15 caracteres. ',
        'rfc.min' => 'Debe contener al menos 10 caracteres.',
        'rfc.unique' => 'El rfc ya existe.',
        'fechanacimiento.required' => 'La fecha es requerida.',
     ]);

      $user = new Listado($request->all());
      // $pais->cnusuerpk=$request->user()->id;
      // dd($giro);
      $user->save();
      return response()->json([
          "mensaje" => "creado"
        ]);
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

      $user = Listado::find($id);
      return response()->json($user);
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
      $user=  $this->validate($request, [
         'name' => 'required|min:3|max:50',
         'apaterno' => 'required|min:3|max:50',
         'amaterno' => 'required|min:3|max:50',
         'rfc' => 'required|min:3|max:50',
         'fechanacimiento' => 'required',

     ],
     [
       'name.required' => 'El nombre es requerido',
       'name.max' => 'El nombre no debe de contener más de 50 caracteres. ',
       'name.min' => 'Debe contener al menos 3 caracteres.',
       'apaterno.required' => 'El apellido paterno es requerido',
       'apaterno.max' => 'El apellido paterno no debe de contener más de 50 caracteres. ',
       'apaterno.min' => 'Debe contener al menos 3 caracteres.',
       'amaterno.required' => 'El apellido materno es requerido',
       'amaterno.max' => 'El apellido materno no debe de contener más de 50 caracteres. ',
       'amaterno.min' => 'Debe contener al menos 3 caracteres.',
       'rfc.required' => 'El rfc es requerido.',
        'rfc.max' => 'El rfc no debe de contener más de 15 caracteres. ',
        'rfc.min' => 'Debe contener al menos 10 caracteres.',
        'rfc.unique' => 'El rfc ya existe.',
        'fechanacimiento.required' => 'La fecha es requerida.',
     ]);
     $result=DB::table('usuario')
                 ->where('id', $request->id)
                 ->update([
                   'name' => $request->name,
                   'apaterno' => $request->apaterno,
                   'amaterno' => $request->amaterno,
                   'rfc' => $request->rfc,
                   'fechanacimiento' => $request->fechanacimiento
                    ]);
             // echo json_encode($result);
        // $user = Listado::find($id);
        // $user->cotname;
        // $user->cotname = $request->cotname;
        // $user->save();
     return response()->json([
        "mensaje" => "creado"
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
      // funcion de eliminar
          $user = Listado::find($id);
          $user->delete();
          return response()->json([
              "mensaje" => "creado"
            ]);
    }
}
