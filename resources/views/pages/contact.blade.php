@extends('layouts.default')

@section('content')

    <div class="card marvel font mt-3 col-md-12 " style = "height : 50em">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">Please use this form to contact the page owner</p></div>
        <div class="card-body">

            <form action="/contact" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div>
                    <label for="Subject">Subject</label>
                    <input name="Subject: " type="text" class="form-control" id="subject" placeholder="Subject">
                </div>

                <div class="form-group">
                    <label for="body">Mesage</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection
