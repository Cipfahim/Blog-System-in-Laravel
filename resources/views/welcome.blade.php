@extends('layouts.frontend.app')

@section('title','Login')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="main-slider">
        <div class="swiper-container position-static" data-slide-effect="slide" data-autoheight="false"
             data-swiper-speed="500" data-swiper-autoplay="10000" data-swiper-margin="0" data-swiper-slides-per-view="4"
             data-swiper-breakpoints="true" data-swiper-loop="true" >
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img src="images/category-1-400x250.jpg" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>BEAUTY</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img src="images/category-2-400x250.jpg" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>SPORT</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img src="images/category-3-400x250.jpg" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>HEALTH</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img src="images/category-4-400x250.jpg" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>DESIGN</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img src="images/category-5-400x250.jpg" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>MUSIC</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

                <div class="swiper-slide">
                    <a class="slider-category" href="#">
                        <div class="blog-image"><img src="images/category-6-400x250.jpg" alt="Blog Image"></div>

                        <div class="category">
                            <div class="display-table center-text">
                                <div class="display-table-cell">
                                    <h3><b>MOVIE</b></h3>
                                </div>
                            </div>
                        </div>

                    </a>
                </div><!-- swiper-slide -->

            </div><!-- swiper-wrapper -->

        </div><!-- swiper-container -->

    </div><!-- slider -->

    <section class="blog-area section">
        <div class="container">

            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="images/marion-michele-330691.jpg" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

                            <div class="blog-info">

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-info -->
                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="images/audrey-jackson-260657.jpg" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

                            <div class="blog-info">
                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="images/pexels-photo-370474.jpeg" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="images/averie-woodard-319832.jpg" alt="Profile Image"></a>

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                        Concepts in Physics?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-8 col-md-12">
                    <div class="card h-100">
                        <div class="single-post post-style-2">

                            <div class="blog-image"><img src="images/brooke-lark-194251.jpg" alt="Blog Image"></div>

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="images/dmitri-popov-326976.jpg" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="images/averie-woodard-319832.jpg" alt="Profile Image"></a>

                            <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                        Concepts in Physics?</b></a></h4>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->
                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-2 post-style-3">

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="single-post post-style-1">

                            <div class="blog-image"><img src="images/ben-o-sullivan-382817.jpg" alt="Blog Image"></div>

                            <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>

                            <div class="blog-info">
                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>
                            </div><!-- blog-info -->

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-4">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                        <div class="single-post">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">

                        <div class="single-post post-style-4">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                        <div class="single-post">

                            <div class="display-table">
                                <h4 class="title display-table-cell"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>
                            </div>

                            <ul class="post-footer">
                                <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                <li><a href="#"><i class="ion-eye"></i>138</a></li>
                            </ul>

                        </div><!-- single-post -->

                    </div><!-- card -->
                </div><!-- col-lg-4 col-md-6 -->

                <div class="col-lg-8 col-md-12">
                    <div class="card h-100">
                        <div class="single-post post-style-2">

                            <div class="blog-image"><img src="images/icons8-team-355990.jpg" alt="Blog Image"></div>

                            <div class="blog-info">

                                <h6 class="pre-title"><a href="#"><b>HEALTH</b></a></h6>

                                <h4 class="title"><a href="#"><b>How Did Van Gogh's Turbulent Mind Depict One of the Most Complex
                                            Concepts in Physics?</b></a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                                <div class="avatar-area">
                                    <a class="avatar" href="#"><img src="images/icons8-team-355979.jpg" alt="Profile Image"></a>
                                    <div class="right-area">
                                        <a class="name" href="#"><b>Lora Plamer</b></a>
                                        <h6 class="date" href="#">on Sep 29, 2017 at 9:48am</h6>
                                    </div>
                                </div>

                                <ul class="post-footer">
                                    <li><a href="#"><i class="ion-heart"></i>57</a></li>
                                    <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                                    <li><a href="#"><i class="ion-eye"></i>138</a></li>
                                </ul>

                            </div><!-- blog-right -->

                        </div><!-- single-post extra-blog -->

                    </div><!-- card -->
                </div><!-- col-lg-8 col-md-12 -->

            </div><!-- row -->

            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section><!-- section -->
@endsection

@push('js')
    <script src="{{ asset('assets/frontend/js/swiper.js') }}"></script>
@endpush