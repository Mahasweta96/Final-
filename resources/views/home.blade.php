@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('WELCOME') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    You are logged in, {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="nav-menu d-none d-lg-block">
<ul>
<li><a href="logout" class="d-none container d-flex get-started-btn" style="color: black;">LOGOUT</a></li>
</ul>
</nav>

@endsection
