@extends('Frontend.Layouts.auth')

@section('title', 'Login Page')

@section('content')
    <div class="auth-container bg-white">
        <div class="card">
            <div class="
                card-header
                bg-transparent
                font-weight-500
                border-0
                text-dark
                text-center">
                <h3 class="font-weight-bold">Sign In</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email"
                               class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp"
                               placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div class="input-group mb-3 border" style="border-radius: 8px;">
                            <input type="password"
                                   placeholder="Password"
                                   id="exampleInputPassword1"
                                   class="w-75 border-0"
                                   style="padding: 0.375rem 0.75rem; outline: none;">
                            <div class="input-group-append bg-transparent w-25">
                                <span class="input-group-text bg-transparent border-0 w-100">
                                    <a href="#" class="text-right w-75 mr-2">Forgot?</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <small
                        id="emailHelp"
                        class="form-text text-muted pt-2 pb-3">
                        We'll never share your email with anyone else.
                    </small>
                    <div>
                        <button type="submit"
                                class="btn btn-primary btn-block w-100">
                            Sign In
                        </button>
                    </div>
                    <div class="text-right pt-3">
                        <span class="pt-3">
                            New to CV?
                            <a href="#" class="font-weight-bold"> Sign Up Free</a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
