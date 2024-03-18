<?php

namespace App\Http\Controllers;

class listController extends Controller
{

    public function packadge ($name=null, $lastname=null){

            
            return view('lista')->with('name', $name)->with('lastname', $lastname);

    }

}