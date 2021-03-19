@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/sign_up.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="form">
        <h1>SIGN UP</h1>
        @if ($errors->any())
            <p class="error">{{ $errors->first() }}</p>
        @endif
        <form action="/" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" maxlength="200" value="{{ old('name') }}">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" maxlength="320" value="{{ old('email') }}">
            </div>
            <input type="submit" id="submit" value="SUBMIT">
        </form>
    </div>
@endsection
