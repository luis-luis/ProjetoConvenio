<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanoController extends Controller
{

    public function plano1()
    {
        return view('site.plano1');
    }

    public function plano2()
    {
        return view('site.plano2');
    }
    public function plano3()
    {
        return view('site.plano3');
    }
    public function plano1sc()
    {
        return view('site.plano1sc');
    }
    public function plano2sc()
    {
        return view('site.plano2sc');
    }
    public function plano3sc()
    {
        return view('site.plano3sc');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
