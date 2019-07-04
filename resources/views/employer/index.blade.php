@extends('layouts.app')

@section('content')
    <a href="/job/{{$idd}}/edit">APPLIED JOBS</a>
    <br><br>
    <a href="/job">APPLY JOBS</a>
    <br><br>
    <a href="/usereducation/{{$idd}}">EDUCATION</a>
    <br><br>
    <a href="/userexperience/{{$idd}}">EXPERIENCE</a>
    <br><br>
    <a href="/userskill/{{$idd}}">SKILL</a>

@endsection







