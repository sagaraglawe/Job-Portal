<?php

namespace App\Http\Controllers;

use App\User;
use App\UserEducation;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $idd=Auth::user()->id;
        UserEducation::where('id',$idd)->delete();
        UserEducation::create($request->all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('userEducation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $id=Auth::user()->id;

        $usereducation=UserEducation::find($id);


        if($usereducation == null){
           // return "this is submit";
            UserEducation::create($request->all());
        }
        else{
            UserEducation::where('user_id',$id)->update(['xth_percentage'=>$request->xth_percentage, 'xiith_percentage'=>$request->xiith_percentage,
                                                        'graduation_percentage'=>$request->graduation_percentage]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idd)
    {
        $idd=Auth::user()->id;
        $educ=User::find($idd)->education;


      return view('userEducation.show')->with(compact("educ"));
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
        return view('userEducation.create');
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
        //
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
    }
}
