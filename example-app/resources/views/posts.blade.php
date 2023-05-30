<!doctype>
<title>web sit</title>
<link rel="stylesheet" href="/app.css" >
<body>


@foreach($posts as $post)

    <article
        @if($loop->odd)
            style="background-color: #4a5568"

        @endif
    >
        {!! $post !!}
        $loop->even
    </article>
@endforeach


sdfdasd
{{--<article>--}}
{{--@foreach($posts as $post)--}}
{{--    <article>--}}
{{--        {!! $post->title !!}--}}
{{--     <h1> {!! $post->title !!}</h1>--}}
{{--    </article>--}}
{{--    @endforeach--}}
{{--</article>--}}
</body>
