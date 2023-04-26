@extends('layouts.main') 
@section('title', 'Register')
@section('content')
<!-- Start Account Section -->
<section class="wrapper__account">
  <div class="account-page">
    <div class="account-center">
      <div class="account-box" style="margin-top: 30px;">
        <div class="account-logo">
          <a href="{{route('register')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="logo" />
          </a>
        </div>
        <!-- Start Register Form -->
        <form method="POST" action="{{ route('register') }}">
          @csrf
          @if ($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">
                {{ $error }}
              </div>
            @endforeach
          @endif
          <div class="form-group">
            <label>First Name</label>
            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="enter your first name" value="{{ old('first_name') }}" required autocomplete="name" autofocus />
          </div>
          <div class="form-group">
            <label>Last Name</label>
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="enter your last name" value="{{ old('last_name') }}" required autocomplete="name" autofocus />
          </div>
          <div class="form-group">
            <label>Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="enter your email" value="{{ old('email') }}" required autocomplete="email" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="enter your password" required autocomplete="new-password" />
          </div>
          <div class="form-group">
            <label>Password Confirm</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm your password" required autocomplete="new-password" />
          </div>
          <div class="form-group text-right">
            <a href="{{route('login')}}">Already have an account?</a>
          </div>
          <div class="form-group text-center">
            <input class="btn btn-primary account-btn" type="submit" value="Signup" />
          </div>
        </form>
        <!-- End Register Form -->
      </div>
    </div>
  </div>
</section>
<!-- End Account Section -->
@endsection