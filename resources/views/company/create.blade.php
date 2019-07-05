@extends('layouts.app')


@section('content')

    <form action="/company" method="post">
        {{csrf_field()}}
        Company Id:<br>
        <input type="integer" name="company_id" placeholder="company_id" value="{{Auth::user()->id}}"><br>
        Location:<br>
        <input type="string" name="location" placeholder="location"><br>
        Establishment Year:<br>
        <input type="integer" name="establishment_year" placeholder="Establishment Year"><br>
        Website:<br>
        <input type="string" name="website" placeholder="Website"><br><br>

        <input type="submit">
    </form>


@stop