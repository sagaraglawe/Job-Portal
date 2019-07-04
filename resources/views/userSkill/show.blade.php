@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">Skill</th>
        </tr>
        </thead>

        @foreach($skill as $temp)
            <tbody>
            <tr>
                <td> {{$temp->user_id}}</td>
                <td> {{$temp->skill}}</td>
            </tr>
            </tbody>
    </table>
    @endforeach
    <a href="/userskill/create" class="btn btn-info" role="button">Edit Details</a>
@endsection
