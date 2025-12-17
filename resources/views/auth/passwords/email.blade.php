@extends('layouts.app')

@section('content')
<!-- Font Awesome Backup -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />

<style>
    /* Hide navbar on password reset page */
    .navbar {
        display: none !important;
    }
    
    /* Ensure icons are visible */
    i[class*="fa-"] {
        display: inline-block !important;
        font-style: normal !important;
        font-variant: normal !important;
        text-rendering: auto !important;
        -webkit-font-smoothing: antialiased !important;
    }
    
    body {
        background: #f8f9fa;
    }
    
    main {
        padding: 0 !important;
    }
    
    .login-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        background: #f8f9fa;
    }
    
    .login-card {
        background: #ffffff;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        max-width: 440px;
        width: 100%;
        animation: slideUp 0.4s ease-out;
        border: 1px solid #e9ecef;
    }
    
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .login-header {
        padding: 50px 35px 40px;
        text-align: center;
        border-bottom: 1px solid #f0f0f0;
        position: relative;
    }
    
    .header-icon-wrapper {
        width: 70px;
        height: 70px;
        margin: 0 auto 20px;
        background: linear-gradient(135deg, rgba(28, 24, 108, 0.1) 0%, rgba(28, 24, 108, 0.05) 100%);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid rgba(28, 24, 108, 0.1);
    }
    
    .header-icon {
        font-size: 32px;
        color: #1c186c;
    }
    
    .login-header h2 {
        margin: 0 0 10px 0;
        font-size: 28px;
        font-weight: 700;
        letter-spacing: -0.5px;
        color: #1a1a1a;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    
    .login-header h2 .title-icon {
        font-size: 24px;
        color: #1c186c;
    }
    
    .login-header p {
        margin: 0;
        color: #6c757d;
        font-size: 14px;
        font-weight: 400;
    }
    
    .login-body {
        padding: 35px;
    }
    
    .alert-success {
        background: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
        padding: 12px 16px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .alert-success i {
        color: #155724;
        font-size: 16px;
    }
    
    .form-group {
        margin-bottom: 22px;
        position: relative;
    }
    
    .form-group label {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 10px;
        color: #2d3748;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.2px;
    }
    
    .form-group label .label-icon {
        font-size: 14px;
        color: #1c186c;
    }
    
    .input-wrapper {
        position: relative;
    }
    
    .input-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #1c186c;
        font-size: 18px;
        z-index: 1;
        transition: all 0.2s ease;
    }
    
    .input-wrapper:focus-within .input-icon {
        color: #1c186c;
        transform: translateY(-50%) scale(1.1);
    }
    
    .form-control {
        width: 100%;
        padding: 14px 16px 14px 50px;
        border: 2px solid #e5e7eb;
        border-radius: 10px;
        font-size: 15px;
        transition: all 0.3s ease;
        background-color: #fafbfc;
        color: #1a1a1a;
        font-weight: 500;
    }
    
    .form-control:focus {
        outline: none;
        border-color: #1c186c;
        background-color: #fff;
        box-shadow: 0 0 0 4px rgba(28, 24, 108, 0.1);
        transform: translateY(-1px);
    }
    
    .form-control.is-invalid {
        border-color: #dc3545;
        background-color: #fff5f5;
    }
    
    .invalid-feedback {
        display: block;
        margin-top: 6px;
        color: #dc3545;
        font-size: 12px;
        font-weight: 500;
    }
    
    .back-to-login {
        text-align: center;
        margin-bottom: 25px;
        margin-top: 10px;
        padding-top: 15px;
        border-top: 1px solid #f0f0f0;
    }
    
    .back-to-login-link {
        color: #1c186c !important;
        text-decoration: none !important;
        font-size: 14px !important;
        font-weight: 600 !important;
        transition: all 0.2s ease;
        display: inline-flex !important;
        align-items: center;
        gap: 8px;
        padding: 8px 16px;
        border-radius: 6px;
        background: rgba(28, 24, 108, 0.05);
    }
    
    .back-to-login-link .link-icon {
        font-size: 14px !important;
        color: #1c186c !important;
    }
    
    .back-to-login-link:hover {
        color: #15135a !important;
        background: rgba(28, 24, 108, 0.1);
        text-decoration: none !important;
        transform: translateX(-3px);
    }
    
    .btn-login {
        width: 100%;
        padding: 15px;
        background: #1c186c;
        border: none;
        border-radius: 10px;
        color: white;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        box-shadow: 0 4px 15px rgba(28, 24, 108, 0.3);
    }
    
    .btn-login .btn-icon {
        font-size: 16px;
    }
    
    .btn-login:hover {
        background: #15135a;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(28, 24, 108, 0.4);
    }
    
    .btn-login:active {
        transform: translateY(0);
        box-shadow: 0 2px 10px rgba(28, 24, 108, 0.3);
    }
    
    .btn-login:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }
    
    .btn-login .spinner {
        display: none;
    }
    
    .btn-login.loading .spinner {
        display: inline-block;
    }
    
    .btn-login.loading .btn-text,
    .btn-login.loading .btn-icon {
        opacity: 0.8;
    }
    
    @media (max-width: 576px) {
        .login-container {
            padding: 20px 15px;
        }
        
        .login-header {
            padding: 35px 25px 25px;
        }
        
        .login-header h2 {
            font-size: 22px;
        }
        
        .login-body {
            padding: 25px;
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="header-icon-wrapper">
                <i class="header-icon fas fa-envelope"></i>
            </div>
            <h2>
                <i class="title-icon fas fa-key"></i>
                {{ __('Reset Password') }}
            </h2>
            <p>{{ __('Enter your email to receive reset link') }}</p>
        </div>
        
        <div class="login-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check-circle"></i>
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}" id="emailForm">
                @csrf

                <div class="form-group">
                    <label for="email">
                        <i class="label-icon fas fa-envelope"></i>
                        {{ __('Email Address') }}
                    </label>
                    <div class="input-wrapper">
                        <i class="input-icon fas fa-envelope"></i>
                        <input 
                            id="email" 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required 
                            autocomplete="email" 
                            autofocus
                            placeholder="{{ __('Enter your email') }}"
                        >
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong><i class="fas fa-exclamation-circle"></i> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="back-to-login">
                    <a href="{{ route('login') }}" class="back-to-login-link">
                        <i class="link-icon fas fa-arrow-left"></i>
                        {{ __('Back to Login') }}
                    </a>
                </div>

                <button type="submit" class="btn-login" id="emailBtn">
                    <span class="spinner">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    <i class="btn-icon fas fa-paper-plane"></i>
                    <span class="btn-text">{{ __('Send Password Reset Link') }}</span>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Form submission loading state
    document.getElementById('emailForm').addEventListener('submit', function() {
        const btn = document.getElementById('emailBtn');
        btn.classList.add('loading');
        btn.disabled = true;
    });
    
    // Remove loading state if form validation fails
    document.getElementById('emailForm').addEventListener('invalid', function(e) {
        const btn = document.getElementById('emailBtn');
        btn.classList.remove('loading');
        btn.disabled = false;
    }, true);
</script>
@endsection
