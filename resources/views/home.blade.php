@extends('layouts.task-manager')

@section('content')

    <header>
        <div class="logout"><a href="/auth/logout">Sign Out</a></div>
        <div class="title">Welcome, {{ Auth::user()->name }}</div>
    </header>

    <div class="container">
        <task-list></task-list>
    </div>

@endsection