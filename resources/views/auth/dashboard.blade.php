@extends('layouts.app')

@section('title', 'Dashboard - ' . config('app.name'))

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Dashboard</h1>
        <p class="lead">Welcome back, {{ auth()->user()->name }}!</p>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashboard-card">
                    <h2>Your Account</h2>
                    <div class="account-info">
                        <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                        <p><strong>Member since:</strong> {{ auth()->user()->created_at->format('F j, Y') }}</p>
                    </div>
                </div>

                <div class="dashboard-card">
                    <h2>Quick Actions</h2>
                    <div class="action-buttons">
                        <a href="{{ route('home') }}" class="btn btn-secondary">View Homepage</a>
                        <a href="{{ route('about') }}" class="btn btn-secondary">About Us</a>
                        <a href="{{ route('contact') }}" class="btn btn-secondary">Contact</a>
                    </div>
                </div>

                <div class="dashboard-card">
                    <h2>Recent Activity</h2>
                    <p class="text-muted">No recent activity to display.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
