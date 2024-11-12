@extends('website.master')
@section('body')
    <div id="banner-area" class="banner-area" style="background-image:url({{ asset('') }}/website-assets/images/banner/banner1.jpg)">
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

                <div class="col-lg-8 offset-lg-2 mb-5 mb-lg-0">
                    <div class="comments-form border-box">
                        <h3 class="title-normal">Sign In Form</h3>
                        {{ session('message') }}

                        <form action="{{ route('sign.in') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name"><input class="form-control" name="user_name" placeholder="Your User Name" type="text" required></label>
                                    </div>
                                </div><!-- Col 4 end -->

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><input class="form-control" name="password" placeholder="Your Password" type="password" required></label>
                                    </div>
                                </div>

                            </div><!-- Form row end -->
                            <div class="clearfix">
                                <button class="btn btn-primary" type="submit" aria-label="post-comment">Sign In</button>
                            </div>
                        </form><!-- Form end -->
                    </div><!-- Comments form end -->
                </div><!-- Content Col end -->

            </div><!-- Main row end -->

        </div><!-- Conatiner end -->
    </section><!-- Main container end -->



@endsection
