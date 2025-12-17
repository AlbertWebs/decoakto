@extends('layouts.app')

@section('content')
<!-- Font Awesome Backup -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />

<style>
    /* Hide navbar on login page */
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
    
    .password-toggle {
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(28, 24, 108, 0.05);
        border: none;
        color: #1c186c;
        cursor: pointer;
        font-size: 16px;
        padding: 8px;
        border-radius: 6px;
        z-index: 2;
        transition: all 0.2s ease;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .password-toggle:hover {
        background: rgba(28, 24, 108, 0.1);
        color: #1c186c;
        transform: translateY(-50%) scale(1.1);
    }
    
    .invalid-feedback {
        display: block;
        margin-top: 6px;
        color: #dc3545;
        font-size: 12px;
        font-weight: 500;
    }
    
    .remember-forgot {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .form-check {
        display: flex;
        align-items: center;
        gap: 8px;
    }
    
    .form-check-input {
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: #1c186c;
    }
    
    .form-check-label {
        margin: 0;
        cursor: pointer;
        font-size: 14px;
        color: #4a5568;
        user-select: none;
        font-weight: 500;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .form-check-label .check-icon {
        font-size: 12px;
        color: #1c186c;
    }
    
    .forgot-link {
        color: #1c186c;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    
    .forgot-link .link-icon {
        font-size: 12px;
    }
    
    .forgot-link:hover {
        color: #15135a;
        text-decoration: underline;
        transform: translateX(2px);
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
        
        .remember-forgot {
            flex-direction: column;
            align-items: flex-start;
        }
    }
</style>

<div class="login-container">
    <div class="login-card">
        <div class="login-header">
            <div class="header-icon-wrapper">
                <i class="header-icon fas fa-shield-alt"></i>
            </div>
            <h2>
                <i class="title-icon fas fa-user-lock"></i>
                {{ __('Login') }}
            </h2>
            <p>{{ __('Sign in to your account') }}</p>
        </div>
        
        <div class="login-body">
            <form method="POST" action="{{ route('login') }}" id="loginForm">
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

                <div class="form-group">
                    <label for="password">
                        <i class="label-icon fas fa-lock"></i>
                        {{ __('Password') }}
                    </label>
                    <div class="input-wrapper">
                        <i class="input-icon fas fa-lock"></i>
                        <input 
                            id="password" 
                            type="password" 
                            class="form-control @error('password') is-invalid @enderror" 
                            name="password" 
                            required 
                            autocomplete="current-password"
                            placeholder="{{ __('Enter your password') }}"
                        >
                        <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong><i class="fas fa-exclamation-circle"></i> {{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="remember-forgot">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            <i class="check-icon fas fa-check-circle"></i>
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    
                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">
                            <i class="link-icon fas fa-key"></i>
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>

                <button type="submit" class="btn-login" id="loginBtn">
                    <span class="spinner">
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                    <i class="btn-icon fas fa-sign-in-alt"></i>
                    <span class="btn-text">{{ __('Login') }}</span>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Password visibility toggle
    document.getElementById('passwordToggle').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
    
    // Form submission loading state
    document.getElementById('loginForm').addEventListener('submit', function() {
        const btn = document.getElementById('loginBtn');
        btn.classList.add('loading');
        btn.disabled = true;
    });
    
    // Remove loading state if form validation fails
    document.getElementById('loginForm').addEventListener('invalid', function(e) {
        const btn = document.getElementById('loginBtn');
        btn.classList.remove('loading');
        btn.disabled = false;
    }, true);
</script>
@endsection
