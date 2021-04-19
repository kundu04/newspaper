
    <div class="classynav">

    <ul>
        <li class="active"><a href="{{url('/')}}">Home</a></li>
{{--        <li><a href="https://www.prothomalo.com/">Pages</a></li>--}}
{{--            <ul class="dropdown">--}}
{{--                <li><a href="single-post.html">page1</a></li>--}}
{{--                <li><a href="#">page2</a>--}}
{{--                    <ul class="dropdown">--}}

{{--                        <li><a href="single-post.html">page1.1</a></li>--}}
{{--                        <li><a href="about.html">page1.2</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}

        @foreach($categories as $category)

            <li><a href="{{route('category.post',[$category->slug])}}">{{$category->name}}</a></li>

        @endforeach

{{--        <li><a href="#">Politics</a></li>--}}
{{--        <li><a href="#">Breaking News</a></li>--}}
{{--        <li><a href="#">Business</a></li>--}}
{{--        <li><a href="#">Technology</a></li>--}}
{{--        <li><a href="#">Health</a></li>--}}
{{--        <li><a href="#">Travel</a></li>--}}
{{--        <li><a href="#">Sports</a></li>--}}
{{--        <li><a href="#">Contact</a></li>--}}
    </ul>

</div>
