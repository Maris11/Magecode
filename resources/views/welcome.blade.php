@extends('layouts.app')

@section('head')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="h1">DIGITAL</div>
    <div class="h2">MARKETING</div>
    <div class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing. Vestibulum rutrum metus at enim congue scelerisque. Sed suscipit metu non laculis semper consectetur adispiscing elit.</div>
    <a href="/services"><button>LEARN MORE</button></a>
@endsection
