<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class welcomeController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        //
    }
    public function categorias()
    {
        $categories=$this->categories->all();
        return view('exemplo',compact('categories'));
    }


}
