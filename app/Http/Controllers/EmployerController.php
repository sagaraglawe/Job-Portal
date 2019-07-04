<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployerController extends Controller
{
    //
    public function show($id)
    {
        //

        //return dd($id);
        $idd=$id;
        //return $id;

        return view('employer.index',compact("idd"));
    }




}
