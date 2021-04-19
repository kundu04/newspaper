<!DOCTYPE html>
<html lang="en">
{{-- head start--}}
@include('frontend/layouts/_head')
{{--head end--}}

<body>
<!-- ##### Header Area Start ##### -->
@include('frontend/layouts/_header')

<!-- ##### Header Area End ##### -->
<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center">
                    <div class="news-title">
                        <p>Breaking News</p>
{{--                        {{dd($breaking_news)}}--}}

                    </div>

                    <div id="breakingNewsTicker" class="ticker">
                        <ul>
                            @foreach($breaking_news as $news)
                            <li><a href="{{route('details.post',$news->slug)}}">{{$news->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div>

                <!-- Breaking News Widget -->
                <div class="breaking-news-area d-flex align-items-center mt-15">
                    <div class="news-title title2">
                        <p>International</p>
                    </div>
                    <div id="internationalTicker" class="ticker">
                        <ul>
                            @foreach($International as $international)
                                <li><a href="{{route('details.post',$international->slug)}}">{{$international->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Hero Add -->
            <div class="col-12 col-lg-4">
                <div class="hero-add">
                    @foreach($ads_master as $ad)
                    <a href="{{$ad->url}}"><img src="{{url($ad->image)}}" alt=""></a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Featured Post Area Start ##### url('images/hero-add.gif')-->
@yield('content')



<!-- ##### Popular News Area End ##### -->

<!-- ##### Video Post Area Start ##### -->

<!-- ##### Video Post Area End ##### -->

<!-- ##### Editorial Post Area Start ##### -->

<!-- ##### Editorial Post Area End ##### -->

<!-- ##### Footer Add Area Start ##### -->

<!-- ##### Footer Add Area End ##### -->

<!-- ##### Footer Area Start ##### -->
@include('frontend/layouts/_footer')
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
{{--<script src="{{asset('frontend/asset/css/bootstrap.min.css')}}"></script>--}}
{{--<script src="{{asset('frontend/asset/css/nice-select.min.css')}}"></script>--}}
{{--<script src="{{asset('frontend/asset/css/owl.carousel.min.css')}}"></script>--}}
<script src="{{asset('frontend/asset/js/jquery/jquery-2.2.4.min.js')}}"></script>
<!-- Popper js -->
<script src="{{asset('frontend/asset/js/bootstrap/popper.min.js')}}"></script>
<!-- Bootstrap js -->
<script src="{{asset('frontend/asset/js/bootstrap/bootstrap.min.js')}}"></script>
<!-- All Plugins js -->
<script src="{{asset('frontend/asset/js/plugins/plugins.js')}}"></script>
<!-- Active js -->
<script src="{{asset('frontend/asset/js/active.js')}}"></script>
{{--<script src="{{asset('frontend/asset/css/animate.css')}}"></script>--}}
{{--<script src="{{asset('frontend/asset/css/owl.carousel.min.css')}}"></script>--}}
</body>

</html>


