@extends('layouts.app')


@section('content')

    <form action="/userexperience" method="post">
        {{csrf_field()}}
        User Id:<br>
        <input type="integer" name="user_id" placeholder="user_id"><br>
        Experience:<br>
        <input type="integer" name="years" placeholder="Experience"><br><br>

        <input type="submit">
    </form>


@stop
