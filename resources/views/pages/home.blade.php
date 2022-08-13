@extends('layouts.master')
@section('title', 'Home')
@section('content')


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero">

        <div class="s-hero__slider">

        @foreach ($sliders as $slider)

            <div class="s-hero__slide">

                <div class="s-hero__slide-bg" style="background-image: url({{asset('uploads/blogs/'.$slider->image)}})"></div>

                <div class="row s-hero__slide-content animate-this">
                    <div class="column">
                        <div class="s-hero__slide-meta">
                            <span class="cat-links">
                                <a href="#0">{{$slider->category->name}}</a>
                            </span>

                            <span class="byline">
                                Posted by
                                <span class="author">
                                    <a href="#0">{{$slider->user->username}}</a>
                                </span>
                            </span>
                        </div>
                        <h1 class="s-hero__slide-text">
                            <a href="#0">
                                {{$slider->title}}
                            </a>
                        </h1>
                    </div>
                </div>

            </div> <!-- end s-hero__slide -->
        @endforeach

        </div> <!-- end s-hero__slider -->

        <div class="nav-arrows s-hero__nav-arrows">
            <button class="s-hero__arrow-prev">
                <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M1.5 7.5l4-4m-4 4l4 4m-4-4H14" stroke="currentColor"></path></svg>
            </button>
            <button class="s-hero__arrow-next">
               <svg viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg" width="15" height="15"><path d="M13.5 7.5l-4-4m4 4l-4 4m4-4H1" stroke="currentColor"></path></svg>
            </button>
        </div> <!-- end s-hero__arrows -->

    </section> <!-- end s-hero -->


    <!-- content
    ================================================== -->
    <section class="s-content s-content--no-top-padding">


        <!-- masonry
        ================================================== -->
        <div class="s-bricks">

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
                            <a href="{{ route('blog',['id'=>$blog->id])}}" class="thumb-link">
                                <img src="{{asset('uploads/blogs/'.$blog->image)}}">
                            </a>
                        </div> <!-- end entry__thumb -->

                        <div class="entry__text">
                            <div class="entry__header">
                                <h1 class="entry__title"><a href="{{ route('blog',['id'=>$blog->id])}}">{{$blog->title}}</a></h1>

                                <div class="entry__meta">
                                    <span class="byline">By:
                                        <span class='author'>
                                            <a href="#">{{$blog->user->username}}</a>
                                        </span>
                                    </span>
                                    <span class="cat-links">
                                        <a href="#">{{$blog->user->designation}}</a>
                                    </span>
                                    <span class="cat-links" style="float: right; color:blueviolet">
                                        {{$blog->created_at->diffForHumans()}}
                                    </span>
                                </div>
                            </div>
                            <div class="entry__excerpt">
                                <p>{{Str::limit($blog->description, 100)}}</p>
                            </div>
                            <span>
                                <a class="entry__more-link" href="{{ route('blog',['id'=>$blog->id])}}">Learn More</a>
                                <code style="float: right"><i class="fa fa-eye"></i> {{$blog->view_count}}</code>
                            </span>
                        </div>

                    </article>

                    @endforeach

                </div>
            </div>

            {{ $blogs->links('includes.paginator') }}

        </div> <!-- end s-bricks -->

    </section> <!-- end s-content -->


@endsection
