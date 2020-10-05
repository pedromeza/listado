<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Listado;


class ListarController extends Controller
{
  public function manageVue()
    {
        return view('manage-vue');
    }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {

    if($request->ajax()){
       return Listado::all();
   }else{
       return view('home');
   }
  }

}
