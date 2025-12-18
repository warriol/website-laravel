@extends('layouts.app')

@section('title', 'Home - ' . config('app.name'))

@section('content')
<div class="hero-section">
    <div class="container">
        <h1>Welcome to {{ config('app.name') }}</h1>
        <p class="lead">This is a modern Laravel-based website, migrated from a custom PHP application.</p>
        <div class="cta-buttons">
            <a href="{{ route('about') }}" class="btn btn-primary">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Get in Touch</a>
        </div>
    </div>
</div>

<div class="features-section">
    <div class="container">
        <h2>Features</h2>
        <div class="features-grid">
            <div class="feature-card">
                <h3>Modern Framework</h3>
                <p>Built with Laravel 10, providing a robust and scalable foundation.</p>
            </div>
            <div class="feature-card">
                <h3>Authentication</h3>
                <p>Secure user authentication and authorization system included.</p>
            </div>
            <div class="feature-card">
                <h3>Database Ready</h3>
                <p>Pre-configured migrations and models for quick development.</p>
            </div>
            <div class="feature-card">
                <h3>Asset Pipeline</h3>
                <p>Modern asset management with Vite for fast development.</p>
            </div>
        </div>
    </div>
</div>
@endsection
