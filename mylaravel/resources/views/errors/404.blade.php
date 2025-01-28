@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code')
<section class="content d-flex justify-content-center align-items-center vh-100" style="text-align: center;">
    <div class="error-page">
        <div class="d-flex align-items-center">
            <h2 class="headline text-warning me-4" style="font-size: 80px; ">404</h2>
            <div class="error-content text-start">
                <h3>
                    Oops! Page not found.
                </h3>
                <p>
                    We could not find the page you were looking for.
                </p>
            </div>
        </div>
    </div>
</section>
@section('message', __('Not Found'))
