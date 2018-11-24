<header id="header" >
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
                    <a href="{{ route('root') }}"><img src="{{ asset('img/logo.png') }}" alt="" title="" /></a>
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                    <a class="btns" href="tel:+86 0510-82026158">+86 0510-82026158</a>
                    <a class="btns" href="mailto:server@wxjdkq.com">server@wxjdkq.com</a>
                    <a class="icons" href="tel:+86 15861465911">
                        <span class="lnr lnr-phone-handset"></span>
                    </a>
                    <a class="icons" href="mailto:server@wxjdkq.com">
                        <span class="lnr lnr-envelope"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('root') }}">首页</a></li>
                    <li><a href="{{ route('about') }}">关于我们</a></li>
                    <li><a href="{{ route('services') }}">服务项目</a></li>
                    <li><a href="{{ route('opening') }}">门诊时间 </a></li>
                    <li class="menu-has-children"><a href="{{ route('articles.index') }}">文章资讯</a>
                        <ul>
                            @foreach(\App\Models\Product::all() as $product)
                            <li><a href="{{ route('articles.category', $product->slug) }}">{{ $product->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="http://p.qiao.baidu.com/cps/chat?siteId=12832735&userId=26867593" target="_blank">牙齿矫正</a></li>
                    <li><a href="http://p.qiao.baidu.com/cps/chat?siteId=12832735&userId=26867593" target="_blank">牙齿种植</a></li>
                    <li><a href="http://p.qiao.baidu.com/cps/chat?siteId=12832735&userId=26867593" target="_blank">牙齿美容</a></li>
                    <li><a href="{{ route('contact') }}">联系我们</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->