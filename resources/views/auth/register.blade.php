@extends('layouts.noNavBAr')

@section('content')


    <div class="layout">
        <!-- Start of Sign Up -->
        <div class="main order-md-2">
            <div class="start">
                <div class="container">
                    <div class="col-md-12">
                        <div class="content">
                            <h1>Create Account</h1>

                            <p>or use your email for registration:</p>
                            <form class="signup" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- **** User Name  ***** -->
                                <div class="form-group">
                                    <input type="text" id="first_name" name="first_name" class="form-control"
                                        placeholder="First Name" required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input type="text" id="last_name" name="last_name" class="form-control"
                                        placeholder="Last Name" required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-parent">

                                    <div class="form-group">
                                        <input type="number" id="phone" name="phone" class="form-control"
                                            placeholder="phone" required>
                                        <button class="btn icon"><i class="material-icons">person_outline</i></button>
                                    </div>
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <!-- **** Birthdate ***** -->
                                    <div class="form-group">
                                        <select name="gender" class="form-control" required>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <button class="btn icon"><i class="material-icons">person_outline</i></button>
                                    </div>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- ***Birthdate ***-->
                                <div class="form-group">
                                    <input type="date" id="inputEmail" name="birthdate" class="form-control"
                                        placeholder="Birthdat " required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                @error('birthdate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <input type="text" id="address" name="address" class="form-control"
                                        placeholder="Address" required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- **** E-mail ***** -->
                                <div class="form-group">
                                    <input type="email" id="inputEmail" name="email" class="form-control"
                                        placeholder="Email Address" required>
                                    <button class="btn icon"><i class="material-icons">mail_outline</i></button>
                                </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <!-- **** Password ***** -->
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
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="inputPassword"
                                        class="form-control" placeholder="Re-Enter Password" required>
                                    <button class="btn icon"><i class="material-icons">lock_outline</i></button>
                                </div>
                                <button type="submit" class="btn button">Sign Up</button>
                                <div class="callout">
                                    <span>Already a member? <button>Sign In</button></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sign Up -->
        <!-- Start of Sidebar -->
        <div class="aside order-md-1">
            <div class="container">
                <div class="col-md-12">
                    <div class="preference">
                        <h2>Welcome Back!</h2>
                        <p>To keep connected with our chatbot please login with your personal info.</p>
                        <a href="sign-in.html" class="btn button">Sign In</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->
    </div>
@endsection
