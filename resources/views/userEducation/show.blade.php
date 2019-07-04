@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">10th Percentage</th>
            <th scope="col">12th Percentage</th>
            <th scope="col">Graduation Percentage</th>
        </tr>
        </thead>

    @foreach($educ as $temp)
            <tbody>
            <tr>
                <td> {{$temp->user_id}}</td>
                <td> {{$temp->xth_percentage}}</td>
                <td> {{$temp->xiith_percentage}}</td>
                <td> {{$temp->graduation_percentage}}</td>
            </tr>
            </tbody>
    </table>
    @endforeach

    <a href="/usereducation/create" class="btn btn-info" role="button">Edit Details</a>


    @endsection
