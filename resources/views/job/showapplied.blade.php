@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Job Id</th>
            <th scope="col">Location</th>
            <th scope="col">Skill</th>
            <th scope="col">Salary</th>
            <th scope="col">Experience</th>

        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)


            <tr>
                <td> {{$job->id}}</td>
                <td> {{$job->location}}</td>
                <td> {{$job->skill}}</td>
                <td> {{$job->salary}}</td>
                <td> {{$job->experience}}</td>
                <td> <form action="/job/{{$job->id}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        {{csrf_field()}}
                        <button>Delete Job</button>
                    </form> </td>
            </tr>


        @endforeach

        </tbody>
    </table>

@endsection

