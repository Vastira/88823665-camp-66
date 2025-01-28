@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code')
<section class="content d-flex justify-content-center align-items-center vh-100" style="text-align: center;">
    <div class="error-page">
        <div class="d-flex align-items-center">
            <h2 class="headline text-danger me-4" style="font-size: 80px; ">500</h2>
            <div class="error-content text-start">
                <h3>
                    Oops! Something went wrong.
                </h3>
                <p>
                    We will work on fixing that right away.
                </p>
            </div>
        </div>
    </div>
</section>
@section('message', __('Server Error'))
