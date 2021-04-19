@extends('frontend/layouts/master')
@section('content') <div class="featured-post-area">
    {{--    {{dd($featureds)}}--}}
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-8">
                <div class="row">
                @foreach($all_posts as $all_post )
                    <!-- Single Featured Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="{{route('details.post',$all_post->slug)}}"><img src="{{asset($all_post->image)}}"   alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="{{route('category.post',$all_post->relCategory->id)}}" class="post-catagory">{{$all_post->relCategory->name}}</a>
                                    <a href="{{route('details.post',$all_post->slug)}}" class="post-title">
                                        <h>{{$all_post->title}}</h>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">{{$all_post->relAuthor->name}}</a></p>
                                        <p class="post-excerp">{{$all_post->short_description}}</p>
                                        <!-- Post Like & Post Comment -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div>
                        <h2>Featured News</h2>
                        @foreach($featureds as $featured)
                            <div class="col-lg-3">
                                <a href="{{route('details.post',$featured->slug)}}"><img src="{{asset($featured->image)}}" alt="">
                                    <h6> {{$featured->title}}</h6>
                                </a>
                                <p>{{$featured->published_date}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <h3>Recent News</h3>
                <!-- Single Featured Post -->
                @foreach($recent_posts as $recent_post)
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="{{route('details.post',$recent_post->slug)}}"><img src="{{asset($recent_post->image)}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="{{route('category.post',$recent_post->relCategory->id)}}" class="post-catagory">{{$recent_post->relCategory->name}}</a>
                            <div class="post-meta">
                                <a href="{{route('details.post',$recent_post->slug)}}" class="post-title">
                                    <h6>{{$recent_post->short_description}}</h6>
                                </a>
                                <p class="post-date"><span>{{$recent_post->created_at}}</span></p>
                            </div>
                        </div>
                    </div>

            @endforeach
            <!-- Single Featured Post -->

                <!-- Popular News Widget -->
                <div class="popular-news-widget mb-30">
                    <h3>4 Most Popular News</h3>

                @foreach($popular_post as $posts)
                    <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="{{route('details.post',$posts->slug)}}"><img src="{{asset($posts->image)}}" alt="">
                                <h6> {{$posts->title}}</h6>
                            </a>
                            <p>{{$posts->published_date}}</p>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</div>

<!-- ##### Featured Post Area End ##### -->

<!-- ##### Popular News Area Start ##### -->

@endsection
