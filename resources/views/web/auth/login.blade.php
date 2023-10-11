@extends('layouts.frontend.app')
@section('title', 'Login')

@section('css')

@endsection

@section('content')
<section class="section--overflow" id="our-services">
    <div class="layout">
        <div class="layout__row   ">
            <div class="layout__col-12 layout__col-xs-12 ">
                <div class="hero-text hero-text--center ">
                    <h3>Welcome Back to TranslationsX
                    </h3>
                    <p>Whether you’re here to collaborate on a project or seek linguistic solutions, your journey
                        with us continues. Log in to your account to manage requests, offer services, or dive deeper
                        into our community.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container22" style="margin-bottom: 100px;">
    <form action="#">
        <label for="email">Username or Email</label>
        <input type="text" id="username" name="username" placeholder="Your Username or Email..">

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Your Password..">

        <input type="submit" value="Login">
        <p><a href="#" style="text-decoration: none; color: #625BF6;">Forgot Password?</a></p>
    </form>
</div>
@endsection

@section('script')

@endsection
