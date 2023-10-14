@extends('layouts.frontend.app')
@section('title', 'Form')

@section('css')
    <style>
        .container {
            text-align: center;
            margin-right: 0px;
            margin-left: 0px;
            margin-top: 50px;
            margin-bottom: 200px;
        }

        /* Style the buttons */
        .btn {
            display: inline-block;
            width: 200px;
            /* Set a fixed width for both buttons */
            height: 60px;
            /* Set a fixed height for both buttons */
            margin: 10px;
            /* Add margin to separate the buttons */
            font-size: 18px;
            background-color: #625BF6;
            /* Button background color */
            color: #fff;
            /* Button text color */
            border: none;
            border-color: #0074d900;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #000;
            /* Button background color */
        }

        /* Style the "Instant Quote" button differently */
        .instant-quote {
            border: none;
            background-color: #2ecc7000;
            /* Different background color for this button */
            color: #625BF6;
            transition: .3s;
        }

        .instant-quote:hover {
            transition: .3s;
            background-color: #ffffff31;
            /* Different background color for this button */
            color: #000000;
        }
    </style>
@endsection

@section('content')

    <section class="section--overflow" id="our-services">
        <div class="layout">
            <div class="layout__row   ">
                <div class="layout__col-12 layout__col-xs-12 ">
                    <div class="hero-text hero-text--center ">
                        <h3>Thank you!
                        </h3>
                        <p>Thank you for considering TranslationsX for your translation needs. A member of our team will
                            be promptly in touch with you.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <a href="{{ route ('home') }}">
            <button class="btn">Explore</button>
        </a>
        <a href="{{ route ('instantQuote') }}">
            <button class="btn instant-quote">Instant Quote</button>
        </a>
    </div>


@endsection

@section('script')

@endsection
