@extends('frontend/layouts/master')
@section('content')
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-8">
                            @foreach($last_one_features as $featured)
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="{{route('details.post',$featured->slug)}}"><img src="{{asset($featured->image)}}" alt="" height="330"></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{route('category.post',$featured->relCategory->slug)}}" class="post-catagory">{{$featured->relCategory->name}}</a>
                                    <a href="{{route('details.post',$featured->slug)}}" class="post-title">
                                        <h6>{{$featured->title}}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">{{$featured->relAuthor->name}}</a></p>
                                        <p class="post-excerp">{{$featured->description}}</p>
                                        <!-- Post Like & Post Comment -->

                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>


                        <div class="col-12 col-lg-4">
                        @foreach($first_two_features as $features )
                            <!-- Single Featured Post -->
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="{{route('details.post',$features->slug)}}"><img src="{{asset($features->image)}}" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{route('category.post',$features->relCategory->slug)}}" class="post-catagory">{{$features->relCategory->name}}</a>
                                    <div class="post-meta">
                                        <a href="{{route('details.post',$features->slug)}}" class="post-title">
                                            <h6>{{$features->title}}</h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->

                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <!-- Single Featured Post -->
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                @foreach($recent_posts as $recent_post)
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="{{route('details.post',$recent_post->slug)}}"><img src="{{asset($recent_post->image)}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{route('category.post',$recent_post->relCategory->slug)}}" class="post-catagory">{{$recent_post->relCategory->name}}</a>
                            <div class="post-meta">
                                <a href="{{route('details.post',$recent_post->slug)}}" class="post-title">
                                    <h6>{{$recent_post->title}}</h6>
                                </a>
                                <p class="post-date"><span>{{$recent_post->created_at}}</span> </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Single Featured Post -->
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Sports News</h6>
                    </div>

                    <div class="row">
                        @foreach($sports as $sport)
                        <div class=" col-lg-6">

                            <div class="single-blog-post style-3">

                                <div class="post-thumb">
                                    <a href="{{route('details.post',$sport->slug)}}"><img src="{{asset($sport->image)}}" alt=""></a>
                                </div>
                                <div class="post-data">
{{--                                    <a href="#" class="post-catagory">2Finance</a>--}}
                                    <a href="{{route('details.post',$sport->slug)}}" class="post-title">
                                        <h6>{{$sport->title}}</h6>
                                    </a>

                                </div>

                            </div>
                        </div>
                    @endforeach
                    </div>
                    <div class="section-heading">
                        <h6>Health</h6>
                    </div>

                    <div class="row">
                        @foreach($health_news as $health)
                            <div class=" col-lg-6">

                                <div class="single-blog-post style-3">

                                    <div class="post-thumb">
                                        <a href="{{route('details.post',$health->slug)}}"><img src="{{asset($health->image)}}" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        {{--                                    <a href="#" class="post-catagory">2Finance</a>--}}
                                        <a href="{{route('details.post',$health->slug)}}" class="post-title">
                                            <h6>{{$health->title}}</h6>
                                        </a>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Info</h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3>4 Most Popular News</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            @foreach($popular_post as $posts)
                                <div class="single-popular-post">
                                    <a href="{{route('details.post',$posts->slug)}}"><img src="{{asset($posts->image)}}" alt="">
                                        <h6> {{$posts->title}}</h6>
                                    </a>
                                    <p>{{$posts->published_date}}</p>
                                </div>
                                @endforeach
                        </div>
                        <!-- Single Popular Blog -->
                    </div>

                    <!-- Newsletter Widget -->

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay" style="background-image: url(images/travel.jpg);">
        <div class="container">

            <div class="row justify-content-center">
                <!-- Single Video Post --> @foreach($travels as $travel)
                <div class="col-lg-3">
                    <div class="single-video-post">

                        <a href="{{route('details.post',$travel->slug)}}"><img src="{{asset($travel->image)}}" alt="">
                            <h6> {{$travel->title}}</h6>
                        </a>
                        <p>{{$travel->published_date}}</p>

                    </div>

                </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- ##### Video Post Area End ##### -->

    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>Business</h6>
                    </div>

                    <div class="row">

                        <!-- Single Post -->
                        @foreach($business_news as $business)
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="{{route('details.post',$business->slug)}}"><img src="{{asset($business->image)}}" alt=""></a>
                                </div>
                                <div class="post-data">
{{--                                    <a href="{{route('category.post',$business->relCategory->slug)}}" class="post-catagory">{{$business->relCategory->name}}</a>--}}

                                    <a href="{{route('details.post',$business->slug)}}" class="post-title">
                                        <h6>{{$business->title}}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <div class="post-date"><a href="{{route('details.post',$business->slug)}}">{{$business->created_at}}</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="editors-pick-post-area section-padding-80-50">
                        <div class="section-heading">
                            <h6>Politics</h6></div>
                        <div class="row">

                        @foreach($politics_news as $politics)
                            <div class="col-12 col-lg-4">
                                <div class="single-blog-post">
                                    <div class="post-thumb">
                                        <a href="{{route('details.post',$politics->slug)}}"><img src="{{asset($politics->image)}}" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        {{--                                    <a href="{{route('category.post',$business->relCategory->slug)}}" class="post-catagory">{{$business->relCategory->name}}</a>--}}

                                        <a href="{{route('details.post',$politics->slug)}}" class="post-title">
                                            <h6>{{$politics->title}}</h6>
                                        </a>
                                        <div class="post-meta">
                                            <div class="post-date"><a href="{{route('details.post',$politics->slug)}}">{{$politics->created_at}}</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        </div>
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>World News</h6>
                    </div>
@foreach($international_news as $international)
                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="{{route('details.post',$international->slug)}}"><img src="{{asset($international->image)}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{route('details.post',$international->slug)}}" class="post-title">
                                <h6>{{$international->title}}</h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><a href="{{route('details.post',$international->slug)}}">{{$international->created_at}}</a></div>
                            </div>
                        </div>
                    </div>
@endforeach
                    <!-- Single Post -->


                    <!-- Single Post -->


                    <!-- Single Post -->


                    <!-- Single Post -->


                </div>
            </div>
        </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->
    <div class="footer-add-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-add">
                        @foreach($ads_footer as $ad)
                        <a href="{{$ad->url}}"><img src="{{url($ad->image)}}" alt=""></a>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Footer Add Area End ##### -->

@endsection