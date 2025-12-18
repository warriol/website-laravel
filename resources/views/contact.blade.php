@extends('layouts.app')

@section('title', 'Contact - ' . config('app.name'))

@section('content')
<div class="page-header">
    <div class="container">
        <h1>Contact Us</h1>
        <p class="lead">Get in touch with us</p>
    </div>
</div>

<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form">
                    <h2>Send us a message</h2>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input 
                                type="text" 
                                class="form-control @error('name') is-invalid @enderror" 
                                id="name" 
                                name="name" 
                                value="{{ old('name') }}" 
                                required
                            >
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input 
                                type="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                name="email" 
                                value="{{ old('email') }}" 
                                required
                            >
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea 
                                class="form-control @error('message') is-invalid @enderror" 
                                id="message" 
                                name="message" 
                                rows="5" 
                                required
                            >{{ old('message') }}</textarea>
                            @error('message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p>Feel free to reach out to us through the form or via the following channels:</p>
                    
                    <div class="contact-item">
                        <strong>Email:</strong>
                        <p>info@example.com</p>
                    </div>
                    
                    <div class="contact-item">
                        <strong>Address:</strong>
                        <p>123 Laravel Street<br>Web City, WC 12345</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
