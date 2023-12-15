@extends('layouts.auth')

@section('content')

<form class="form" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="title">Login</div>
    <input id="email" type="email" placeholder="Email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input id="password" type="password" placeholder="Password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <button type="submit" class="button-confirm">{{ __('Login') }}</button>
  </form>

@endsection
