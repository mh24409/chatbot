@extends('layouts.noNavBAr')

@section('content')
    <div class="layout">
        <!-- Start of Sign In -->
        <div class="main order-md-1">
            <div class="start">
                <div class="container">
                    <div class="col-md-12">
                        <div class="content">
                            <h1>Sign in to Chatbot</h1>

                            <p>or use your email account:</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input name="email" type="email" id="inputEmail" class="form-control"
                                        placeholder="Email Address" required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control"
                                        placeholder="Password" required>
                                    <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <button type="submit" class="btn button">Sign In</button>
                                <br>
                                <br>
                                <a href="forget.html">Forget password?</a>
                                <div class="callout">
                                    <span>Don't have account? <a href="sign-up.html">Create Account</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sign In -->
        <!-- Start of Sidebar -->
        <div class="aside order-md-2">
            <div class="container">
                <div class="col-md-12">
                    <div class="preference">
                        <h2>Hello, Friend!</h2>
                        <p>Enter your personal details and start your journey with chatbot today.</p>
                        <a href="sign-up.html" class="btn button">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->
    </div>
@endsection
