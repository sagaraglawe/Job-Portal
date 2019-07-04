@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Company Id</th>
            <th scope="col">Location</th>
            <th scope="col">Skill</th>
            <th scope="col">Salary</th>
            <th scope="col">Experience</th>

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

            </tr>


        @endforeach

        </tbody>
    </table>

@endsection
