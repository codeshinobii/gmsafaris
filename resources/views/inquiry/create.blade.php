@extends('layouts.app')

@section('title', 'Inquire About a Safari - Golden Memories Safaris')
@section('keywords', 'Tanzania safari inquiry, ask about safari, safari questions, custom safari quote')
@section('description', 'Have questions about our Tanzania safaris? Send us an inquiry and our safari specialists will get back to you within 24 hours with personalized recommendations.')
@section('canonical', 'https://www.gmsafaris.co.tz/inquiry')
@section('og_title', 'Inquire About a Safari - Golden Memories Safaris')
@section('og_description', 'Have questions about our Tanzania safaris? Send us an inquiry.')
@section('og_url', 'https://www.gmsafaris.co.tz/inquiry')

@section('extra_styles')
<style>
    .page-header-inquiry {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ site_image('hero_fallback_1') }}') center center no-repeat;
        background-size: cover;
    }
    .inquiry-form .form-label {
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    .inquiry-form .form-control:focus,
    .inquiry-form .form-select:focus {
        border-color: var(--bs-primary);
        box-shadow: 0 0 0 0.2rem rgba(var(--bs-primary-rgb), 0.25);
    }
</style>
@endsection

@section('body_content')

    <!-- Page Header -->
    <div class="container-fluid page-header-inquiry py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Inquire About a Safari</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Inquiry</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Inquiry Form Section -->
    <div class="container-fluid py-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in Touch</small>
                        <h1 class="display-5 mb-3">Have Questions? We're Here to Help!</h1>
                        <p class="lead text-muted">Fill out the form below and our safari specialists will get back to you within 24 hours with personalized recommendations and answers to all your questions.</p>
                    </div>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="card shadow-sm border-light p-4 p-md-5">
                        <form method="POST" action="{{ route('inquiry.store') }}" class="inquiry-form">
                            @csrf
                            <input type="hidden" name="_timestamp" value="{{ time() }}">
                            <div style="position: absolute; left: -9999px; opacity: 0;" aria-hidden="true">
                                <input type="text" name="website" tabindex="-1" autocomplete="off" value="">
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                                        placeholder="Enter your full name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                                        placeholder="Enter your email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone"
                                        placeholder="Include country code (e.g., +1...)" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="country" class="form-label">Country of Residence</label>
                                    <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country"
                                        placeholder="Enter your country" value="{{ old('country') }}">
                                    @error('country')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject"
                                        placeholder="e.g., Safari package question, custom itinerary"
                                        value="{{ old('subject', $selectedSafari ? 'Question about ' . $selectedSafari->title : '') }}">
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="safari_id" class="form-label">Related Safari Package (Optional)</label>
                                    <select class="form-select @error('safari_id') is-invalid @enderror" id="safari_id" name="safari_id">
                                        <option value="">-- General Inquiry --</option>
                                        @foreach($safaris as $safari)
                                            <option value="{{ $safari->id }}"
                                                {{ old('safari_id', $selectedSafari && $selectedSafari->id === $safari->id ? $safari->id : '') == $safari->id ? 'selected' : '' }}>
                                                {{ $safari->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('safari_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-12">
                                    <label for="message" class="form-label">Your Message <span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message"
                                        rows="6" placeholder="Tell us about your travel plans, questions, or what you're looking for in a safari..." required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">The more details you provide, the better we can tailor our response to your needs.</small>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary rounded-pill px-5 py-3">
                                    <i class="fas fa-paper-plane me-2"></i> Send Inquiry
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="text-center mt-5">
                        <p class="lead">Prefer to talk directly? Call us or send an email:</p>
                        <p><i class="fa fa-phone-alt text-primary me-2"></i><a href="tel:+255786383273">+255 786 383 273</a></p>
                        <p><i class="fas fa-envelope text-primary me-2"></i><a href="mailto:info@gmsafaris.co.tz">info@gmsafaris.co.tz</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
