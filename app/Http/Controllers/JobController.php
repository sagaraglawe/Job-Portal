<?php

namespace App\Http\Controllers;


use App\Job;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{


    public function __construct()
    {

        $this->middleware('role');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jobs=Job::all();
        return view('job.show',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('job.create');
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
       // return "here";
       // return dd($request);
        $id=Auth::user()->id;

        Job::create($request->all());

        $user=Auth::user();

        $id=$user->id;

        $job=Job::find($id);

        $user->jobs()->save($job);

        return view('company.index',compact('id'));


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
        //return "this is show";

        $user=Auth::user();

        $job=Job::find($id);

        $user->jobs()->save($job);

        $idd=$id;

        //return view('employer.index',compact('idd'));
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
        //return "this is edit";

        $id=Auth::user()->id;

        $jobs=Job::where('company_id',$id)->get();

       // return dd($jobs);

        return view('job.showapplied',compact('jobs'));

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

            $companyid=Auth::user()->id;

            $job=Job::find($id);

            $job->users()->sync([]);

            $job->delete();

            $id=$companyid;

            return view('company.index',compact('id'));
    }



    public function skillss(){


        $request=request()->search;

       // return $request;

        $jobs=Job::where('skill','LIKE',"%$request%")->get();

        //return dd($jobs);

        return view('job.show',compact('jobs'));
    }


    public function searching(){

        $id=Auth::user()->id;

        $user=User::find($id);

        $jobs=$user->jobs;

        return view('job.showapplied',compact('jobs'));
    }

}
