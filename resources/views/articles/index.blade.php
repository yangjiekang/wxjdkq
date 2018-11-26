@extends('layouts.app')
@section('title', '文章资讯')

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
                    <p class="text-white link-nav">
                        <a href="{{ route('root') }}">首页 </a>
                        <span class="lnr lnr-arrow-right"></span>
                        <a href="{{ route('articles.index') }}"> 文章资讯</a>
                        @if(!empty($product))
                        <span class="lnr lnr-arrow-right"></span> <a href="{{ route('articles.category', $product->slug) }}"> {{ $product->title }}</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <section class="post-content-area">
        <div class="container">
            <div class="">
                <div class="posts-list">
                    @foreach($articles as $article)
                    <div class="single-post row">
                        <div class="col-md-3">
                             <img class="img-fluid" src="{{ $article->image_url }}" alt="">
                        </div>
                        <div class="col-md-9 ">
                            <a class="posts-title" href="{{ $article->link() }}"><h3>{{ $article->title }}</h3></a>
                            <p class="excert">
                                {{ make_excerpt($article->content, 230) }}
                            </p>
                            <a href="#" class="primary-btn">查看详细</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{ $articles->links() }}

        </div>
    </section>
@endsection