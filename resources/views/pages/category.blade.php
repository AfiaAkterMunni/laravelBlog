@extends('layouts.master')
@section('content')

    <!-- content
    ================================================== -->
    <section class="s-content">


        <!-- page header
        ================================================== -->
        <div class="s-pageheader">
            <div class="row">
                <div class="column large-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type">Category</span>
                        {{ $category }}
                    </h1>
                </div>
            </div>
        </div> <!-- end s-pageheader-->


        <!-- masonry
        ================================================== -->

        @if(count($blogs)>0)
            <div class="s-bricks s-bricks--half-top-padding">

                <div class="masonry">
                    <div class="bricks-wrapper h-group">

                        <div class="grid-sizer"></div>

                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        @foreach ($blogs as $blog)
                        <article class="brick entry" data-aos="fade-up">

                            <div class="entry__thumb">
                                <a href="{{route('blog', ['id' => $blog->id])}}" class="thumb-link">
                                    <img src="{{asset('uploads/blogs/'.$blog->image)}}">
                                </a>
                            </div> <!-- end entry__thumb -->

                            <div class="entry__text">
                                <div class="entry__header">
                                    <h1 class="entry__title"><a href="{{route('blog', ['id' => $blog->id])}}">{{ $blog->title }}</a></h1>

                                    <div class="entry__meta">
                                        <span class="byline">By:
                                            <span class='author'>
                                                <a href="https://www.dreamhost.com/r.cgi?287326">{{ $blog->user->username }}</a>
                                            </span>
                                        </span>
                                        <span class='cat-links' style="float: right; color:blueviolet">
                                            {{$blog->created_at->diffForHumans()}}
                                        </span>
                                    </div>
                                </div>
                                <div class="entry__excerpt">
                                    <p>{{ Str::limit($blog->description, 100) }}</p>
                                </div>
                                <a class="entry__more-link" href="{{route('blog', ['id' => $blog->id])}}">Learn More</a>
                            </div> <!-- end entry__text -->

                        </article> <!-- end article -->
                        @endforeach



                    </div> <!-- end brick-wrapper -->

                </div> <!-- end masonry -->

                {{-- <div class="row">
                    <div class="column large-12">
                        <nav class="pgn">
                            <ul>
                                <li>
                                    <span class="pgn__prev" href="#0">
                                        Prev
                                    </span>
                                </li>
                                <li><a class="pgn__num" href="#0">1</a></li>
                                <li><span class="pgn__num current">2</span></li>
                                <li><a class="pgn__num" href="#0">3</a></li>
                                <li><a class="pgn__num" href="#0">4</a></li>
                                <li><a class="pgn__num" href="#0">5</a></li>
                                <li><span class="pgn__num dots">…</span></li>
                                <li><a class="pgn__num" href="#0">8</a></li>
                                <li>
                                    <span class="pgn__next" href="#0">
                                        Next
                                    </span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}

            </div> <!-- end s-bricks -->
        @else
        <h6 style="text-align: center; padding-bottom: 100px;">There is no blog available in this category.</h6>
        @endif
    </section> <!-- end s-content -->

@endsection
