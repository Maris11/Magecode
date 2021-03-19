@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/success.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <h1>SUCCESS</h1>
    <div class="paragraph">You have successfully signed up to our service!</div>
    <a href="/"><button>RETURN</button></a>
@endsection
