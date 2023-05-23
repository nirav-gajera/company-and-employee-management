@extends('layout')
@section('content')
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        margin: 100px;
        font-size: medium;
    }

    .form-group {
        margin-bottom: 20px;
    }

</style>

<div class="container mt-5">
  <div class="card card-primary">
    <div class="card-header">
      <center><h3> Login </h3></center>
    </div>
    <hr style="border: 1px solid black;" id="my-hr" width="35%" class="my-class" aria-label="Horizontal line across the page">
<form method="POST" action="{{ route('login') }}" class="navbar-form navbar-right">
   {{ csrf_field() }}
    
    <div class="col-md-6 col-lg-4">
    <div class="form-group">
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control" name="password" required>
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            {{ __('Login') }}
        </button>
    </div>
</form>
</div>
</div>
@endsection
