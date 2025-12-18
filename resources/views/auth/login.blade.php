@extends('layouts.app')

@section('title', 'Login - ' . config('app.name'))

@section('content')
<div class="auth-container">
    <div class="container">
        <div class="auth-card">
            <h2>Login</h2>
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        id="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        required 
                        autofocus
                    >
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        id="password" 
                        name="password" 
                        required
                    >
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group form-check">
                    <input 
                        type="checkbox" 
                        class="form-check-input" 
                        id="remember" 
                        name="remember"
                    >
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>

            <div class="auth-links">
                <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
            </div>
        </div>
    </div>
</div>
@endsection
