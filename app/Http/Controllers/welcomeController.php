<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function exemplo()
    {
        $nome="Ivan";
        $sobrenome="Alves da Silva";
       // return view('exemplo',['nome'=>$nome,'sobrenome'=>$sobrenome]);
        return view('exemplo',compact('nome','sobrenome'));
    }


}
