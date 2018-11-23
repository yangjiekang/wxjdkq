@extends('layouts.app')
@section('title', '门诊时间')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        门诊时间
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('root') }}">首页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('opening') }}"> 门诊时间</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start open-hour Area -->
    <section class="open-hour-area  section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 open-hour-wrap">
                    <h1>门诊时间</h1>
                    <p>
                        欢迎您随时到来！
                    </p>
                    <a class="open-btn" href="#"> <span class="circle"></span>正在服务</a>
                    <div class="date-list d-flex flex-row justify-content-center">
                        <ul class="colm-1">
                            <li>周一 - 周五</li>
                            <li>周六</li>
                            <li>周日</li>
                        </ul>
                        <ul class="colm-2">
                            <li><span>:</span>   09:00am ~ 05:30pm</li>
                            <li><span>:</span>   10:00am ~ 05:00pm</li>
                            <li><span>:</span>   10:00am ~ 05:00pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End open-hour Area -->
@stop