@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid" style="background-image: url('https://live.staticflickr.com/65535/52803998810_702141be0a_z.jpg'); background-size: cover;">
  <div class="container">
    <h1 class="display-4">Welcome to the Complaints System</h1>
    <p class="lead">Submit your complaints and issues and get them resolved by departmental lecturers.</p>
    <hr class="my-4">
    <p>If you are a student, please sign in or sign up to submit a complaint.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Sign In</a>
    <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Sign Up</a>
  </div>
</div>
@endsection