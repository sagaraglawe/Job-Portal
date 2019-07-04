@extends('layouts.app')


@section('content')

    <form action="/usereducation" method="post">
        {{csrf_field()}}
        User Id:<br>
        <input type="integer" name="user_id" placeholder="user_id"><br>
        10th Percentage:<br>
        <input type="integer" name="xth_percentage" placeholder="10th percentage"><br>
        12th Percentage:<br>
        <input type="integer" name="xiith_percentage" placeholder="12th percentage"><br>
        Graduation Percentage:<br>
        <input type="integer" name="graduation_percentage" placeholder="Graduation Percentage"><br><br>

        <input type="submit">
    </form>


@stop