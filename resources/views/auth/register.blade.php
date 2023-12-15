

@extends('layouts.auth')

@section('content')

<form class="form" method="POST" action="{{ route('register') }}">
    @csrf
    <div class="title">Register</div>

    {{-- Name --}}
    <input id="name" type="text" placeholder="Name" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    {{-- Email --}}
    <input id="email" type="email" placeholder="Email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    {{-- Password --}}
    <input id="password" type="password" placeholder="Password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror


    <input id="password-confirm" type="password" placeholder="Confirm Password" class="input" name="password_confirmation" required autocomplete="new-password">

    <button type="submit" class="button-confirm">
        {{ __('Register') }}
    </button>
  </form>

@endsection
