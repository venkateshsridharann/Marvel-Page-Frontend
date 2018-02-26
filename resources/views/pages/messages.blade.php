@extends('layouts.default')

@section('content')

<div class ='card  col-md-12 ' style=" margin-top : 4em;">
    <table class="table" >
        <thead class="thead-dark">
        <tr>
            <th scope="col"></th>
            <th scope="col">Messages</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a href="/messagecard">The trailer of Venom is amazing, cant wait for the movie </a></td>
            <td><button class="btn btn-danger">Delete</button></td>

        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="/messagecard">can you update HD wallpapers?</a></td>
            <td><button class="btn btn-danger">Delete</button></td>

        </tr>
        <tr>
            <th scope="row">3</th>
            <td><a href="/messagecard">Movies page is non responsive, leads to homepage</a></td>
            <td><button class="btn btn-danger">Delete</button></td>

        </tr>

        </tbody>
    </table>

</div>


<br><br><br><br><br><br><br><br><br><br><br>



@endsection