@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">User Id</th>
            <th scope="col">Years</th>
        </tr>
        </thead>

        @foreach($experience as $temp)
            <tbody>
            <tr>
                <td> {{$temp->user_id}}</td>
                <td> {{$temp->years}}</td>
            </tr>
            </tbody>
    </table>
    @endforeach
    <a href="/userexperience/create" class="btn btn-info" role="button">Edit Details</a>
@endsection
