@extends('layouts.app')


@section('content')




    <form action="/jobskill" method="get" class="nav navbar-nav">
        <input type="text" placeholder="Skill.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>



    <table class="table">
        <thead>
        <tr>
            <th scope="col">Company Id</th>
            <th scope="col">Location</th>
            <th scope="col">Skill</th>
            <th scope="col">Salary</th>
            <th scope="col">Experience</th>
            <th scope="col">Application</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)

            <tr>
                <td> {{$job->company_id}}</td>
                <td> {{$job->location}}</td>
                <td> {{$job->skill}}</td>
                <td> {{$job->salary}}</td>
                <td> {{$job->experience}}</td>
                <td> <a href="/job/{{$job->id}}" class="btn btn-info" role="button">Apply</a> </td>

            </tr>


    @endforeach

        </tbody>
    </table>

@endsection
