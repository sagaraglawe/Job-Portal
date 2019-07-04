@extends('layouts.app')


@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Company Id</th>
            <th scope="col">Location</th>
            <th scope="col">Establishment Year</th>
            <th scope="col">Website</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td> {{$details->company_id}}</td>
                <td> {{$details->location}}</td>
                <td> {{$details->establishment_year}}</td>
                <td> {{$details->website}}</td>
                <td> <a href="/company" class="btn btn-info" role="button">Edit</a></td>
            </tr>

        </tbody>
    </table>

@endsection
