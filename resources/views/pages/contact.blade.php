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
                        联系我们
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('root') }}">首页 </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('contact') }}"> 联系我们</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container">
            <div class="row">
                <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>江苏, 无锡市</h5>
                            <p>
                                新明西路520号(广益佳苑二期南门东200米)
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>0510-82026158</h5>
                            <p>周一到周日 09:00 ~ 18:00</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>server@wxjdkq.com</h5>
                            <p>欢迎您的咨询!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form-area " id="myForm" action="" method="post" class="contact-form text-right">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="内容" onfocus="this.placeholder = ''" onblur="this.placeholder = '内容'" required=""></textarea>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="姓名" onfocus="this.placeholder = ''" onblur="this.placeholder = '姓名'" class="common-input mb-20 form-control" required="" type="text">

                                <input name="email" placeholder="电话" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = '电话'" class="common-input mb-20 form-control" required="" type="text">

                                <button class="genric-btn primary circle" style="float: right;">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->
@stop
<style>
    .BMap_cpyCtrl,.anchorBL{display:none;}
</style>
@section('scriptsAfterJs')
    <!-- BEGIN: PAGE SCRIPTS -->
    <script src="http://api.map.baidu.com/api?v=2.0&ak=Yx8KOzAZoF1zgICXxli9Aa1pGVapCekK" type="text/javascript"></script>
    <script>
        // 百度地图API功能
        var map = new BMap.Map("map");    // 创建Map实例
        map.centerAndZoom(new BMap.Point(120.347759,31.602937),15);  // 初始化地图,设置中心点坐标和地图级别
        map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
        map.addOverlay(new BMap.Marker(new BMap.Point(120.347759,31.602937)));
        map.addControl(new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT}));
        map.addControl(new BMap.NavigationControl());
    </script>
@stop