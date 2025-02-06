<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvenioEmpresaController extends Controller
{
    public function index(){
        return view ('site.convenioempresa');
    }
}
