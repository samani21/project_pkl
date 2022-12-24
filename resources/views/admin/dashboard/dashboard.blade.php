@extends('layouts.admin')

@section('content')
    <header>
        <h1>
            <label for="nav-toggle">
                <span class="las la-bars" style="color: black"></span>
            </label>
            Dashboar
        </h1>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </div>
            </li>         
    </header>
    <main>
    <h1>Dashboar</h1>
    </main>
@endsection