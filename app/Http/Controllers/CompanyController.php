<?php

namespace App\Http\Controllers;

use App\Companyn;
use App\Job;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    //

    public function __construct()
    {

        $this->middleware('role');
    }


    public function index(){

        $id=Auth::user()->id;
        return view('company.create');
    }
    public function show()
    {
        $id=Auth::user();
        return view('company.index',compact('id'));

    }

    public function store(Request $request){

        $companyid=Auth::user()->id;

        $temp=Companyn::where('company_id',$companyid)->get();


        if($temp->isEmpty()){
            Companyn::create($request->all());
        }
        else{

            Companyn::where('company_id',$companyid)->update(['location'=>$request->location,'establishment_year'=>$request->establishment_year,'website'=>$request->website]);
        }

        $id=Auth::user()->id;

        return view('company.index',compact('id'));

    }


    public function create(){

            $companyid=Auth::user()->id;

            $jobs=Job::where('company_id',$companyid)->get();

            return view('company.showusers',compact('jobs'));

    }

    public function edit(){



        $id = Auth::user()->id;


        $details=Companyn::where('company_id',$id)->get();

       // return dd($details);
        if($details->isEmpty())
            return view('company.create');

        return view('company.showdetails',compact('details'));
    }


    public function detail($id){
        return $id;
    }
}
