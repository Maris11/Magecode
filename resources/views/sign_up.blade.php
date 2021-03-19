@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/sign_up.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="form">
        <h1>SIGN UP</h1>
        <form action="">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <input type="submit" id="submit" value="SUBMIT">
        </form>
    </div>
@endsection
