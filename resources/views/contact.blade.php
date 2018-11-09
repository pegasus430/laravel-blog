@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-2 text-center">Contact Us</h1>

        @if(session('message'))
            <div class='alert alert-success'>
                {{ session('message') }}
            </div>
        @endif

        <div class="col-12 col-md-6">
            <form class="form-horizontal" method="POST" action="/contact">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="Name">Name: </label>
                    <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="text" class="form-control" id="email" placeholder="john@example.com" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">message: </label>
                    <textarea type="text" class="form-control luna-message" id="message" placeholder="Type your messages here" name="message" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Send">Send</button>
                </div>
            </form>
        </div>
    </div> <!-- /container -->
@endsection