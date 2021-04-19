@extends('frontend/layouts/master')
@section('content')

    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-lg-2">
                    <div class="blog-posts-area">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="{{route('details.post',$post->slug)}}"><img src="{{asset($post->image)}}" alt=""></a>
                            </div>
                            <div class="post-data">
{{--                                <a href="{{route('category.post',$post->relCategory->slug)}}" class="post-catagory">{{$post->relCategory->name}}</a>--}}
                                <a href="{{route('details.post',$post->slug)}}" class="post-title">
                                    <h> {{$post->title}}</h>
                                </a>

{{--                                <div class="post-meta">--}}
{{--                                    <p class="post-author">By <a href="#">{{$post->relAuthor->name}}</a></p>--}}
{{--                                    <p class="post-excerp">{{$post->short_description}}</p>--}}

{{--                                    <a href="{{route('details.post',$post->slug)}}">View Details</a>--}}

{{--                                </div>--}}

                            </div>
                        </div>


                    </div>
                </div>
            @endforeach


        </div>
    </div>


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


{{--    like comment--}}
{{--            <div class="d-flex align-items-center">--}}
{{--               <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
{{--               <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
{{--           </div>--}}
@endsection
{{--@foreach($posts as $post)--}}
{{--    <div class="col-12 col-lg-2">--}}
{{--        <div class="blog-posts-area">--}}
{{--            <!-- Single Featured Post -->--}}
{{--            <div class="single-blog-post featured-post mb-30">--}}
{{--                <div class="post-thumb">--}}
{{--                    <a href="{{route('details.post',$post->slug)}}"><img src="{{asset($post->image)}}" alt=""></a>--}}
{{--                </div>--}}
{{--                <div class="post-data">--}}
{{--                    --}}{{--                                  <a href="{{route('category.post',$post->relCategory->slug)}}" class="post-catagory">{{$post->relCategory->name}}</a>--}}
{{--                    <a href="{{route('details.post',$post->slug)}}" class="post-title">--}}
{{--                        <h> {{$post->title}}</h>--}}
{{--                    </a>--}}
{{--                    --}}{{--                                  <div class="post-meta">--}}
{{--                    --}}{{--                                      <p class="post-author">By <a href="#">{{$post->relAuthor->name}}</a></p>--}}
{{--                    --}}{{--                                      <p class="post-excerp">{{$post->short_description}}</p>--}}
{{--                <!-- Post Like & Post Comment -->--}}
{{--                    --}}{{--                                      <a href="{{route('details.post',$post->slug)}}">View Details</a>--}}

{{--                    --}}{{--                                  </div>--}}

{{--                </div>--}}
{{--            </div>--}}


{{--        </div>--}}
{{--    </div>--}}
{{--@endforeach--}}
