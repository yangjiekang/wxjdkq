@extends('layouts.app')
@section('title', '产品列表')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        服务
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('root') }}">首页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('services') }}"> 我们的服务</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start service Area -->
    <section class="service-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10">我们为客户提供的齿科服务</h1>
                    <p>
                        医生会根据设计的治疗方案进行具体治疗，这个过程中需要医患信任，治疗者配合医生实施治疗方案.
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ $product->image_url }}" alt="">
                        <a href="#"><h4>{{ $product->title }}</h4></a>
                        <p>
                            {{ make_excerpt($product->content, 150) }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End service Area -->
@stop