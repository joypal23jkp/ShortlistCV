@extends('Frontend.Layouts.app')

@section('title', 'Home Page')

@section('navbar')
    @parent
    <p class="">This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
