@extends('layouts.admin')

@section('content')
    <header>
        <h1>
            <label for="nav-toggle">
                <span class="las la-bars" style="color: black"></span>
            </label>
            Dashboard
        </h1>
        <div class="user-wrapper">
            <div>
                <h2> {{ Auth::user()->name }}</h2>
            </div>
            <div>
                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </header>
    <main>
    @yield('content')
    </main>
@endsection