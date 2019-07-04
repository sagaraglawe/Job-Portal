@extends('layouts.app')


@section('content')

    <form action="/job" method="post">
        {{csrf_field()}}
        Company Id:<br>
        <input type="integer" name="company_id" placeholder="comapny_id"><br>
        Location:<br>
        <input type="string" name="location" placeholder="location"><br><br>
        Skill:<br>
        <input type="string" name="skill" placeholder="Skill"><br><br>
        Salary:<br>
        <input type="integer" name="salary" placeholder="Salary"><br><br>
        Experience:<br>
        <input type="integer" name="experience" placeholder="Experience"><br><br>
        <input type="submit">
    </form>


@stop
