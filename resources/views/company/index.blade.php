@extends('layouts.app')

@section('content')
    <a href="/company/create">APPLIED APPLICANTS</a>
    <br><br>
    <a href="/company/{{$id}}/edit">Company Details</a>
    <br><br>
    <a href="/job/create">Post Job</a>
    <br><br>
    <a href="/job/{{$id}}/edit">Previous Jobs</a>

@endsection







