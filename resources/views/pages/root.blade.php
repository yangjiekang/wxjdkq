@extends('layouts.app')
@section('title', '首页')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex justify-content-center align-items-center">
                <div class="banner-content col-lg-9 col-md-12 justify-content-center">
                    <h6 class="text-uppercase">专科 专业 实力展现</h6>
                    <h1>
                        技精求嘉  信诺立德
                    </h1>
                    <p class="text-white mx-auto">
                        优质服务贯穿诊疗全程，专业技术只为让您绽放更美丽的笑容。
                    </p>
                    <a href="#" class="primary-btn header-btn text-uppercase mt-10">预 约</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!-- Start open-hour Area -->
    <section class="open-hour-area">
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
                @foreach($services as $service)
                <div class="col-lg-3 col-md-6">
                    <div class="single-service">
                        <img class="img-fluid" src="{{ asset('img/s1.jpg') }}" alt="">
                        <a href="#"><h4>{{ $service->title }}</h4></a>
                        <p>
                            {{ make_excerpt($service->content, 150) }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End service Area -->

    <!-- Start home-about Area -->
    <section class="home-about-area section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-lg-6 no-padding home-about-right">
                    <h1 class="text-white">
                        嘉德口腔 <br>
                        服务至上
                    </h1>
                    <p>
                        贴心服务颠覆传统口腔医疗，把看牙变成一种体验、愉悦式的新诊疗模式，也势必是以后医患诊疗的模式。嘉德口腔服务宗旨是贴心、舒适、恰当！从您进入网站开始，一直伴您左右，在您需要的时候为您提供您需要的服务。
                    </p>
                    <div class="row no-gutters">
                        <div class="single-services col col-md-5">
                            <span class="lnr lnr-diamond"></span>
                            <a href="#">
                                <h4 class="text-white">牙齿治疗</h4>
                            </a>
                            <p>
                                医生会根据设计的治疗方案进行具体治疗，这个过程中需要医患信任，治疗者配合医生实施治疗方案。
                            </p>
                        </div>
                        <div class="single-services col col-md-6">
                            <span class="lnr lnr-phone"></span>
                            <a href="#">
                                <h4 class="text-white">术后服务</h4>
                            </a>
                            <p>
                                您的满意是对嘉德口腔较大的肯定，嘉德口腔会与患者签订治疗协议，为您的术后治疗结果负责，跟进治疗效果，您能拥有一口健康的牙。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End home-about Area -->

    <!-- Start testomial Area -->
    {{--<section class="testomial-area section-gap">--}}
        {{--<div class="container">--}}
            {{--<div class="row d-flex justify-content-center">--}}
                {{--<div class="menu-content pb-60 col-lg-8">--}}
                    {{--<div class="title text-center">--}}
                        {{--<h1 class="mb-10">来自客户的评价</h1>--}}
                        {{--<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="active-testimonial-carusel">--}}
                    {{--<div class="single-testimonial item">--}}
                        {{--<img class="mx-auto" src="img/t1.png" alt="">--}}
                        {{--<p class="desc">--}}
                            {{--Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End testomial Area -->

    <!-- Start team Area -->
    {{--<section class="team-area section-gap" id="team">--}}
        {{--<div class="container">--}}
            {{--<div class="row d-flex justify-content-center">--}}
                {{--<div class="menu-content pb-70 col-lg-8">--}}
                    {{--<div class="title text-center">--}}
                        {{--<h1 class="mb-10">Our Consultants</h1>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row justify-content-center d-flex align-items-center">--}}
                {{--<div class="col-lg-3 col-md-6 single-team">--}}
                    {{--<div class="thumb">--}}
                        {{--<img class="img-fluid" src="img/t1.jpg" alt="">--}}
                        {{--<div class="align-items-end justify-content-center d-flex">--}}
                            {{--<p>--}}
                                {{--inappropriate behavior--}}
                            {{--</p>--}}
                            {{--<h4>Andy Florence</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 single-team">--}}
                    {{--<div class="thumb">--}}
                        {{--<img class="img-fluid" src="img/t2.jpg" alt="">--}}
                        {{--<div class="align-items-end justify-content-center d-flex">--}}
                            {{--<p>--}}
                                {{--inappropriate behavior--}}
                            {{--</p>--}}
                            {{--<h4>Andy Florence</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 single-team">--}}
                    {{--<div class="thumb">--}}
                        {{--<img class="img-fluid" src="img/t3.jpg" alt="">--}}
                        {{--<div class="align-items-end justify-content-center d-flex">--}}
                            {{--<p>--}}
                                {{--inappropriate behavior--}}
                            {{--</p>--}}
                            {{--<h4>Andy Florence</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-3 col-md-6 single-team">--}}
                    {{--<div class="thumb">--}}
                        {{--<img class="img-fluid" src="img/t4.jpg" alt="">--}}
                        {{--<div class="align-items-end justify-content-center d-flex">--}}
                            {{--<p>--}}
                                {{--inappropriate behavior--}}
                            {{--</p>--}}
                            {{--<h4>Andy Florence</h4>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    <!-- End team Area -->

    <!-- Start feature Area -->
    <section class="feature-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">嘉德口腔种植牙优势</h1>
                        <p>采用高精齿科技术，真正实现分型诊疗，
                            制定个性化的治疗方案，让您舒适安全的治疗牙齿问题。</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-paw"></span>
                        </div>
                        <div class="details">
                            <h4>生态环保</h4>
                            <p>
                                选用原生态环保材质，能与口腔环境融合，消除健康隐患
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-heart-pulse"></span>
                        </div>
                        <div class="details">
                            <h4>微创安全</h4>
                            <p>
                                微创技术完成植入过程，需1～2毫米微小切口，将创伤降低
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-chart-bars"></span>
                        </div>
                        <div class="details">
                            <h4>精准定位</h4>
                            <p>
                                智能X射线影像系统及计算机导航种植，三维立体扫描，电脑计算出精确数据分析定位
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-rocket"></span>
                        </div>
                        <div class="details">
                            <h4>快速种植</h4>
                            <p>
                                即拔即种，避免了传统种植牙漫长等待过程中的二次伤害，减小了患者的痛苦
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-bug"></span>
                        </div>
                        <div class="details">
                            <h4>坚固耐用</h4>
                            <p>
                                纯钛种植体，咀嚼受力原理与真牙类似，具有真牙般咀嚼承受力
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-feature d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-users"></span>
                        </div>
                        <div class="details">
                            <h4>自然美观</h4>
                            <p>
                                根据患者脸型、肤色及口腔比例等数据，定制舒适和美观的牙冠，形态色泽与真牙类似
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start appoinment Area -->
    <section class="appoinment-area section-gap relative">
        <div class="container">
            <div class="row align-items-center justify-content-end" style="height: 200px;">
            </div>
        </div>
    </section>
    <!-- End appoinment Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">近期资讯</h1>
                        <p>牙齿、口腔相关文章资讯.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($articles as $article)
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <p class="date">{{ $article->created_at }}</p>
                    <a href="{{ route('articles.show', ['product'=>$article->product->slug,'article' =>$article->id]) }}"><h4>{{ $article->title }}</h4></a>
                    <p>
                        {{ make_excerpt($article->content,150) }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End blog Area -->
@stop