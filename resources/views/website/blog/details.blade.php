@extends('website.master')
@section('body')
    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('/website-assets/images/banner/banner1.jpg') }})">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">News</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">News</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">News Right sidebar</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">

                    <div class="post-content post-single">
                        <div class="post-media post-image">
                            <img loading="lazy" src="{{ asset($blog->image) }}" class="img-fluid" alt="post-image">
                        </div>

                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                <span class="post-author">
                  <i class="far fa-user"></i><a href="#"> {{ $blog->author }}</a>
                </span>
                                    <span class="post-cat">
                  <i class="far fa-folder-open"></i><a href="#"> {{ $blog->category->category_name }}</a>
                </span>
                                    <span class="post-meta-date"><i class="far fa-calendar"></i> {{ date('F d Y',strtotime($blog->custom_date))  }} </span>
                                    <span class="post-comment"><i class="far fa-comment"></i>{{ count($comments) }}<a href="#" class="comments-link">Comments</a></span>
                                </div>
                                <h2 class="entry-title">
                                    {{ $blog->blog_title}}
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <p>
                                    {{ $blog->description }}
                                </p>
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/G-rsmbK7gdY?si=quSfZYVVBmsLAQ8E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>

                            <div class="tags-area d-flex align-items-center justify-content-between">
                                <div class="post-tags">
                                    <a href="#">Construction</a>
                                    <a href="#">Safety</a>
                                    <a href="#">Planning</a>
                                </div>
                                <div class="share-items">
                                    <ul class="post-social-icons list-unstyled">
                                        <li class="social-icons-head">Share:</li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                        </div><!-- post-body end -->
                    </div><!-- post content end -->

                    <div class="author-box d-nlock d-sm-flex">
                        <div class="author-img mb-4 mb-md-0">
                            <img loading="lazy" src="{{ asset('') }}/website-assets/images/news/avator1.png" alt="author">
                        </div>
                        <div class="author-info">
                            <h3>Elton Themen<span>Site Engineer</span></h3>
                            <p class="mb-2">Lisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad vene minim
                                veniam, quis nostrud exercitation nisi ex ea commodo.</p>
                            <p class="author-url mb-0">Website: <span><a href="#">http://www.example.com</a></span></p>

                        </div>
                    </div> <!-- Author box end -->

                    <!-- Post comment start -->
                    <div id="comments" class="comments-area">
                        <h3 class="comments-heading">{{ count($comments) }} Comments</h3>

                        <ul class="comments-list">
                            <li>
                                @foreach($comments as $comment)
                                <div class="comment d-flex">
                                    <img loading="lazy" class="comment-avatar" alt="author" src="{{ asset('') }}/website-assets/images/news/avator1.png">
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment-author mr-3">{{ $comment->visitor->name }}</span>
                                            <span class="comment-date float-right">{{ date('F d Y g:i a') }}</span>
                                        </div>
                                        <div class="comment-content">
                                            <p> {{ $comment->comment }}</p>
                                        </div>
                                        <div class="text-left">
                                            <a class="comment-reply font-weight-bold" href="#">Reply</a>
                                        </div>
                                    </div>
                                </div><!-- Comments end -->
                                @endforeach
                            </li><!-- Comments-list li end -->
                        </ul><!-- Comments-list ul end -->
                    </div><!-- Post comment end -->

                    <div class="comments-form border-box">
                        <h3 class="title-normal">Add a comment</h3>
                        @if(Session::get('visitorId'))
                            <form action="{{ route('comment') }}" method="post">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <input type="hidden" name="visitor_id" value="{{ Session::get('visitorId') }}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="message">
                                                <textarea name="comment" class="form-control required-field"  placeholder="Your Comment" required></textarea>
                                            </label>
                                        </div>
                                    </div><!-- Col 12 end -->
                                </div><!-- Form row end -->
                                <div class="clearfix">
                                    <button class="btn btn-primary" type="submit" aria-label="post-comment">Post Comment</button>
                                </div>
                            </form><!-- Form end -->
                        @else
                            To comment please <b><a href="{{ route('sign.up') }}">Sign Up</a> or <a href="{{ route('sign.in') }}">Sign In</a></b>
                        @endif



                    </div><!-- Comments form end -->
                </div><!-- Content Col end -->

                <div class="col-lg-4">

                    <div class="sidebar sidebar-right">
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            <ul class="list-unstyled">
                                @foreach($blogs as $blog)
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="img" src="{{ asset($blog->image) }}"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">{{ $blog->blog_title }}</a>
                                        </h4>
                                    </div>
                                </li><!-- 1st post end-->
                                @endforeach


                            </ul>

                        </div><!-- Recent post end -->

                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                            <ul class="arrow nav nav-tabs">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Commercial</a></li>
                                <li><a href="#">Building</a></li>
                                <li><a href="#">Safety</a></li>
                                <li><a href="#">Structure</a></li>
                            </ul>
                        </div><!-- Categories end -->

                        <div class="widget">
                            <h3 class="widget-title">Archives </h3>
                            <ul class="arrow nav nav-tabs">
                                <li><a href="#">Feburay 2016</a></li>
                                <li><a href="#">January 2016</a></li>
                                <li><a href="#">December 2015</a></li>
                                <li><a href="#">November 2015</a></li>
                                <li><a href="#">October 2015</a></li>
                            </ul>
                        </div><!-- Archives end -->

                        <div class="widget widget-tags">
                            <h3 class="widget-title">Tags </h3>

                            <ul class="list-unstyled">
                                <li><a href="#">Construction</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Project</a></li>
                                <li><a href="#">Building</a></li>
                                <li><a href="#">Finance</a></li>
                                <li><a href="#">Safety</a></li>
                                <li><a href="#">Contracting</a></li>
                                <li><a href="#">Planning</a></li>
                            </ul>
                        </div><!-- Tags end -->


                    </div><!-- Sidebar end -->
                </div><!-- Sidebar Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->



@endsection
