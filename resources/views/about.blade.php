@extends('layouts.app')

@section('title', 'About - ' . config('app.name'))

@section('content')
<div class="page-header">
    <div class="container">
        <h1>About Us</h1>
        <p class="lead">Learn more about our project and mission</p>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2>Our Story</h2>
                <p>
                    This website represents a modern migration from a legacy custom PHP application to 
                    the Laravel framework. The migration brings numerous benefits including:
                </p>
                <ul>
                    <li>Improved security with Laravel's built-in protection mechanisms</li>
                    <li>Better code organization following MVC architecture</li>
                    <li>Enhanced performance and scalability</li>
                    <li>Easier maintenance and future development</li>
                    <li>Modern tooling and asset pipeline</li>
                </ul>

                <h2>Technology Stack</h2>
                <p>
                    This application is built using Laravel 10, which provides:
                </p>
                <ul>
                    <li>PHP 8.1+ for modern PHP features</li>
                    <li>Blade templating engine for elegant views</li>
                    <li>Eloquent ORM for database interactions</li>
                    <li>Vite for asset compilation</li>
                    <li>Built-in authentication and authorization</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="info-box">
                    <h3>Quick Facts</h3>
                    <ul class="fact-list">
                        <li><strong>Framework:</strong> Laravel 10</li>
                        <li><strong>PHP Version:</strong> 8.1+</li>
                        <li><strong>Database:</strong> MySQL/PostgreSQL</li>
                        <li><strong>Frontend:</strong> Blade + Vite</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
