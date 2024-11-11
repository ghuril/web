@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center align-items-center min-vh-100" style="background: linear-gradient(to right, #2b5876, #4e4376);">
        <div class="col-md-8 text-center">
            <div class="card shadow-lg border-0" style="border-radius: 20px; background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                <div class="card-header text-white" style="font-size: 2.5rem; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">
                    {{ __('Welcome to Your Dashboard') }}
                </div>

                <div class="card-body text-white" style="font-size: 1.1rem; line-height: 1.6;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="border-radius: 10px; animation: fadeIn 1s;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="mt-3">You're logged in!</h3>
                    <p class="mt-2">Explore the futuristic world with us. The possibilities are limitless!</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<style>
    /* Custom CSS */
    body {
        font-family: 'Arial', sans-serif;
        background: #1a1a1a;
        color: #ddd;
    }

    .card-header {
        background: rgba(0, 0, 0, 0.4);
        font-family: 'Roboto', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        padding: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .card-body {
        padding: 40px 20px;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
    }

    /* Animations */
    @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
    }

    .alert {
        animation: fadeIn 1s;
    }

    /* Adding hover effect to the card */
    .card:hover {
        transform: scale(1.05);
        transition: transform 0.3s ease;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    /* Modern button design */
    .btn-futuristic {
        background-color: #4e4376;
        color: white;
        border-radius: 30px;
        padding: 12px 25px;
        border: none;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .btn-futuristic:hover {
        background-color: #2b5876;
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
    }
</style>
@endsection
