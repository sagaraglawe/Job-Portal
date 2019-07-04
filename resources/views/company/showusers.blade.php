@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">Name</th>
            <th scope="col">E-Mail</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            @foreach($job->users as $user)
            <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
            </tr>
            @endforeach

        @endforeach

        </tbody>
    </table>

@endsection
