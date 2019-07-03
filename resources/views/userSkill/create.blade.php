@extends('layouts.app')


@section('content')

    <form action="/userskill" method="post">
        {{csrf_field()}}
        User Id:<br>
        <input type="integer" name="user_id" placeholder="user_id"><br>
        Skills:<br>
        <input type="text" name="skill" placeholder="skill"><br><br>
        <input type="submit">
    </form>


@stop
