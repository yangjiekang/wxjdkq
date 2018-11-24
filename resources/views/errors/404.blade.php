@extends('layouts.app')
@section('title', '404')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        页面不存在
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('root') }}">首页 </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start feature Area -->
    <section class="feature-area section-gap">
        <div class="container">
            页面丢失了
        </div>
    </section>
    <!-- End feature Area -->

@stop