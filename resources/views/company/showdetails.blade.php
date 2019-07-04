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
        @foreach($details as $detail)
            <tr>
                <td> {{$detail->company_id}}</td>
                <td> {{$detail->location}}</td>
                <td> {{$detail->establishment_year}}</td>
                <td> {{$detail->website}}</td>
                <td> <a href="/company" class="btn btn-info" role="button">Edit</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

@endsection
