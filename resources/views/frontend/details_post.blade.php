@extends('frontend/layouts/master')
@section('content')
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset($details->image)}}" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="{{route('category.post',$details->relCategory->slug)}}" class="post-catagory">{{$details->relCategory->name}}</a>
                                <a href="#" class="post-title">
                                    <h3>{{$details->title}}</h3>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#">{{$details->relAuthor->name}}</a></p>
                                    <p>{{$details->description}}</p>
                                    {{--                                    <a href="#" class="related--post">Related: Facebook announces changes to combat election meddling</a>--}}
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->


                                        <!-- Post Like & Post Comment -->
{{--                                        <div class="d-flex align-items-center post-like--comments">--}}
{{--                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>--}}
{{--                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Author -->
                        <div class="blog-post-author d-flex">
                            <div class="author-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <a href="#" class="author-name">{{$details->relAuthor->name}}, <span>The Author</span></a>
                                <p>{{$details->relAuthor->description}}</p>
                            </div>
                        </div>

                        <div class="section-heading">
                            <h6>Related</h6>
                        </div>
                        <div class="row">
                            <!-- Single Post -->
                            @foreach($related_posts as $related)
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="{{route('details.post',$related->slug)}}"><img src="{{asset($related->image)}}" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="{{route('category.post',$related->relCategory->id)}}" class="post-catagory">{{$related->relCategory->name}}</a>
                                        <a href="{{route('details.post',$related->slug)}}" class="post-title">
                                            <h6>{{$related->short_description}}</h6>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Comment Area Start -->


                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>

                            <!-- Reply Form -->
                            <div id="disqus_thread"></div>
                            <script>

                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://disquslaravel-16.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">
                        <div class="popular-news-widget mb-50">
                            <h3>Recent News</h3>
                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
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
                                            <h6>{{$recent_post->short_description}}</h6>
                                        </a>
                                        <p class="post-date"><span>{{$recent_post->created_at}}</span></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <!-- Single Featured Post -->
                        </div>
                        </div>
                        <!-- Popular News Widget -->

                        <div class="popular-news-widget mb-50">
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

                        <!-- Newsletter Widget -->

                        <!-- Latest Comments Widget -->

                    </div>
                </div>
            </div>
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

@endsection
