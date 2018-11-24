@extends('layouts.app')
@section('title', $article->title)

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        文章资讯
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('root') }}">首页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('articles.index') }}"> 文章资讯</a><span class="lnr lnr-arrow-right"></span> <a href="{{ route('articles.show', [$article->product->slug, $article->id]) }}"> {{ $article->title }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <section class="sample-text-area">
        <div class="container">
            <h3 class="text-heading">{{ $article->title }}</h3>
            <div class="sample-text">
                {!! $article->content !!}
            </div>

        </div>
    </section>
@endsection