@extends('layouts.frontend.app')
@section('title', 'Signup')

@section('css')

@endsection

@section('content')
    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Join the TranslationsX Family
                        </h3>
                        <p>At TranslationsX, every voice matters. Whether you’re a client seeking expert linguistic
                            services or a language professional ready to offer your skills, we've crafted a space for
                            collaboration, growth, and excellence. Become a member of our thriving community today.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container22" style="margin-bottom: 100px;">
        <form action="#">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your Full Name..">

            <label for="Email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your Email Address..">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Your Password..">

            <label for="password">Confirm Password</label>
            <input type="password" id="password" name="password" placeholder="Re-type Your Password..">


            <input type="submit" value="Login">
            <p>By signing up, you agree to our
                <a href="{{ route ('terms-and-conditions') }}" style="text-decoration: none; color: #625BF6;"> Terms of Service
                </a> and <a href="{{ route ('privacy-policy') }}" style="text-decoration: none; color: #625BF6;">Privacy Policy</a>.
            </p>
        </form>
    </div>
@endsection

@section('script')

@endsection
