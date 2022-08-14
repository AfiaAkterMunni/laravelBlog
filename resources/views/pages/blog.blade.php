@extends('layouts.master')
@section('title', $blog->title)
@section('content')

    <!-- content
        ================================================== -->
    <section class="s-content">

        <div class="row">
            <div class="column large-12">

                <article class="s-content__entry format-standard">

                    <div class="s-content__media">
                        <div class="s-content__post-thumb">
                            <img src="{{ asset('uploads/blogs/' . $blog->image) }}">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class="s-content__entry-header">
                        <h1 class="s-content__title s-content__title--post">{{ $blog->title }}</h1>
                    </div> <!-- end s-content__entry-header -->

                    <div class="s-content__primary">

                        <div class="s-content__entry-content lead">
                                {!! $blog->description !!}

                        </div> <!-- end s-entry__entry-content -->

                        <div class="s-content__entry-meta">

                            <div class="entry-author meta-blk">
                                <div class="author-avatar">
                                    @if ($blog->user->image == null)
                                        <img class="avatar" src="{{ asset('images/nophoto.png') }}" alt="">
                                    @else
                                        <img class="avatar" src="{{ asset('uploads/users/' . $blog->user->image) }}"
                                            alt="">
                                    @endif
                                </div>
                                <div class="byline">
                                    <span class="bytext">Posted By</span>
                                    <a href="#0">{{ $blog->user->username }}</a>
                                </div>
                            </div>

                            <div class="meta-bottom">

                                <div class="entry-cat-links meta-blk">
                                    <div class="cat-links">
                                        <span>In</span>
                                        <a href="#0">{{ $blog->user->designation }}</a>
                                    </div>

                                    <span>On</span>
                                    {{ $blog->created_at->format('M d, Y') }}
                                </div>

                                <div class="entry-tags meta-blk">
                                    <span class="tagtext">Categories</span>
                                        <a href="#">{{ $blog->category->name }}</a>
                                </div>

                            </div>

                        </div> <!-- s-content__entry-meta -->

                        <div class="s-content__pagenav">
                            <div class="prev-nav">
                                <a href="#" rel="prev">
                                    <span>Previous</span>
                                    Tips on Minimalist Design
                                </a>
                            </div>
                            <div class="next-nav">
                                <a href="#" rel="next">
                                    <span>Next</span>
                                    A Practical Guide to a Minimalist Lifestyle.
                                </a>
                            </div>
                        </div> <!-- end s-content__pagenav -->

                    </div> <!-- end s-content__primary -->
                </article> <!-- end entry -->

            </div> <!-- end column -->
        </div> <!-- end row -->

        <!-- comments
            ================================================== -->
        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="column large-12" id="allComments">

                    <h3>{{ count($blog->comments) }} Comments</h3>

                    <!-- START commentlist -->
                    <ol class="commentlist">

                        @foreach ($blog->comments as $comment)
                            <li class="depth-1 comment" id="comment-{{$comment->id}}">

                                <div class="comment__avatar">
                                    @if ($comment->user->image == null)
                                        <img class="avatar" src="{{ asset('images/nophoto.png') }}" alt=""
                                            width="50" height="50">
                                    @else
                                        <img class="avatar" src="{{ asset('uploads/users/' . $comment->user->image) }}"
                                            alt="" width="50" height="50">
                                    @endif
                                </div>

                                <div class="comment__content">

                                    <div class="comment__info">
                                        <div class="comment__author">{{ $comment->user->username }}</div>

                                        <div class="comment__meta">
                                            <div class="comment__time">{{ $comment->created_at->format('M d, Y') }}</div>
                                            <div class="comment__reply">
                                                <a class="comment-reply-link" href="#" onclick="replyForm({{$comment->id}})">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment__text">
                                        <p>{{ $comment->comment }}</p>
                                    </div>
                                    <div id="comment{{$comment->id}}"></div>

                                </div>
                                @if (count($comment->replies) > 0)
                                    @foreach ($comment->replies as $reply)
                                        <ul class="children">

                                            <li class="depth-2 comment">

                                                <div class="comment__avatar">
                                                    @if ($reply->user->image == null)
                                                        <img class="avatar" src="{{ asset('images/nophoto.png') }}"
                                                            alt="" width="50" height="50">
                                                    @else
                                                        <img class="avatar"
                                                            src="{{ asset('uploads/users/' . $reply->user->image) }}"
                                                            alt="" width="50" height="50">
                                                    @endif
                                                </div>

                                                <div class="comment__content">

                                                    <div class="comment__info">
                                                        <div class="comment__author">{{ $reply->user->username }}</div>

                                                        <div class="comment__meta">
                                                            <div class="comment__time">
                                                                {{ $reply->created_at->format('M d, Y') }}</div>
                                                        </div>
                                                    </div>

                                                    <div class="comment__text">
                                                        <p>{{ $reply->reply }}</p>
                                                    </div>

                                                </div>
                                            </li>

                                        </ul>
                                    @endforeach
                                @endif

                            </li> <!-- end comment level 1 -->
                        @endforeach




                    </ol>
                    <!-- END commentlist -->

                </div> <!-- end col-full -->
            </div> <!-- end comments -->


            <div class="row comment-respond">

                <!-- START respond -->
                <div id="respond" class="column">

                    <h3>
                        Add Comment
                        <span>Your email address will not be published.</span>
                    </h3>

                    <form name="contactForm" id="contactForm" method="post" action="{{ route('comment.store') }}"
                        autocomplete="off">
                        @csrf
                        <fieldset>
                            <div class="message form-field">
                                @error('message')
                                    <p class="alert-box--error">{{ $message }}</p>
                                @enderror
                                <textarea name="message" id="cMessage" class="h-full-width" placeholder="Write Your Comment Here..."
                                    style="min-height: 15rem"></textarea>
                            </div>
                            {{-- pick the blog id --}}
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <br>
                            <input id="submit" class="btn btn--primary btn-wide btn--large h-full-width"
                                value="Add Comment" type="submit">

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->

    </section> <!-- end s-content -->

<script>
    function replyForm(id){
        event.preventDefault();
        document.getElementById('comment' + id).innerHTML = `
        <form name="contactForm" id="reply" method="post" action="{{route('reply.store')}}" autocomplete="off">
            @csrf
            <fieldset>
                <div class="message form-field">
                    @error('reply')
                        <p class="alert-box--error">{{ $message }}</p>
                    @enderror
                    <textarea name="reply" class="h-full-width" placeholder="Write Your Reply Here..." style="min-height: 10rem"></textarea>
                </div>
                {{-- pick the comment id---}}
                <input type="hidden" name="comment_id" value= "${id}">

                <input id="submit" class="btn" value="Reply" type="submit">
                <input class="btn" value="Cancel" type="button" onclick="document.getElementById('comment${id}').innerHTML = ''">
            </fieldset>
        </form>

        `;
    }
</script>
@endsection
