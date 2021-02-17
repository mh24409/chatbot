@extends('layouts.noNavBar')
@section('content')
    <div class="layout">
        <div class="main order-md-1">
            <div class="start">
                <div class="container">
                    <div class="col-md-12">
                        <div class="content">
                            <h1>Reset password</h1>

                            <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                            <form>
                                <div class="form-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email Address"
                                        required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                <button type="submit" class="btn button" formaction="">Send Reset Link</button>
                                <br>
                                <br>
                                <div class="callout">
                                    <span>Don't have account? <a href="sign-up.html">Create Account</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    </div>
@endsection
