@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Our Project
    @parent
@stop

{{-- page level styles --}}
@section('content')
    <div class="page">
        <div class="page-loader page-loader-variant-1">
            <div><a class="brand brand-md brand-inverse" href="index.html"><img src="{{asset('assets/images/logo-light-beacon-145x30.png')}}" alt="" width="145" height="30"/></a>
                <div class="page-loader-body">
                    <div id="spinningSquaresG">
                        <div class="spinningSquaresG" id="spinningSquaresG_1"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_2"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_3"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_4"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_5"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_6"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_7"></div>
                        <div class="spinningSquaresG" id="spinningSquaresG_8"></div>
                    </div>
                </div>
            </div>
        </div>

        <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/bg-blog.jpg')}});">
            <div class="container">
                <div class="page-title">
                    <h2>Our Projects</h2>
                </div>
            </div>
        </section>

        <section class="section-50 section-md-75 section-xl-100">
            <div class="container">
                <div class="row row-30 justify-content-md-center justify-content-lg-start">
                    <div class="col-md-9 col-lg-6 height-fill">
                        <article class="post-block">
                            <div class="post-image"><img src="{{asset('assets/images/blog-grid-1-570x253.jpg')}}" alt="" width="570" height="253"/>
                            </div>
                            <div class="post-body">
                                <h4 class="post-header"><a href="{{ URL::to('csc') }}">Capital Smart City Islamabad</a></h4>
                                <ul class="post-meta">
                                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Beacon Investment</span></li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                                        <time datetime="2016-01-01">5 days ago</time>
                                    </li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                                        <ul class="list-tags-inline">
                                            <li><a href="#">Real Estate</a></li>
                                            <li><a href="#">Investment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-9 col-lg-6 height-fill">
                        <article class="post-block">
                            <div class="post-image"><img src="{{asset('assets/images/blog-grid-1-570x253.jpg')}}" alt="" width="570" height="253"/>
                            </div>
                            <div class="post-body">
                                <h4 class="post-header"><a href="{{ URL::to('eighteen') }}">Eighteen Islamabad</a></h4>
                                <ul class="post-meta">
                                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Beacon Investment</span></li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                                        <time datetime="2016-01-01">5 days ago</time>
                                    </li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                                        <ul class="list-tags-inline">
                                            <li><a href="#">Real Estate</a></li>
                                            <li><a href="#">Investment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-9 col-lg-6 height-fill">
                        <article class="post-block">
                            <div class="post-image"><img src="{{'assets/images/blog-grid-2-570x253.jpg'}}" alt="" width="570" height="253"/>
                            </div>
                            <div class="post-body">
                                <h4 class="post-header"><a href="maintenance.html">Royal Orchard Multan</a></h4>
                                <ul class="post-meta">
                                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Beacon Investment</span></li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                                        <time datetime="2016-01-01">5 days ago</time>
                                    </li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                                        <ul class="list-tags-inline">
                                            <li><a href="#">Real Estate</a></li>
                                            <li><a href="#">Investment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-9 col-lg-6 height-fill">
                        <article class="post-block">
                            <div class="post-image"><img src="{{asset('assets/images/cover_cantaurus_570x273.jpg')}}" alt="" width="570" height="253"/>
                            </div>
                            <div class="post-body">
                                <h4 class="post-header"><a href="{{ URL::to('taj') }}">Taj Residencia</a></h4>
                                <ul class="post-meta">
                                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Beacon Investment</span></li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                                        <time datetime="2016-01-01">1 days ago</time>
                                    </li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                                        <ul class="list-tags-inline">
                                            <li><a href="#">Real Estate</a></li>
                                            <li><a href="#">Investment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-9 col-lg-6 height-fill">
                        <article class="post-block">
                            <div class="post-image"><img src="{{asset('assets/images/palm-beach-citypage-1.jpg')}}" alt="" width="424" height="283"/>
                            </div>
                            <div class="post-body">
                                <h4 class="post-header"><a href="{{ URL::to('palm') }}">The Palm</a></h4>
                                <ul class="post-meta">
                                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Beacon Investment</span></li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                                        <time datetime="2019-01-01">1 days ago</time>
                                    </li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                                        <ul class="list-tags-inline">
                                            <li><a href="#">Real Estate</a></li>
                                            <li><a href="#">Investment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-9 col-lg-6 height-fill">
                        <article class="post-block">
                            <div class="post-image"><img src="{{asset('assets/images/front_view_570c273.jpg')}}" alt="" width="570" height="253"/>
                            </div>
                            <div class="post-body">
                                <h4 class="post-header"><a href="{{ URL::to('parkview') }}">Park View City</a></h4>
                                <ul class="post-meta">
                                    <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Beacon Investment</span></li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                                        <time datetime="2016-01-01">2 days ago</time>
                                    </li>
                                    <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                                        <ul class="list-tags-inline">
                                            <li><a href="#">Real Estate</a></li>
                                            <li><a href="#">Investment</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>

                    <!--
                    <div class="col-md-9 col-lg-6 height-fill">
                      <article class="post-block">
                        <div class="post-image"><img src="images/blog-grid-4-570x253.jpg" alt="" width="570" height="253"/>
                        </div>
                        <div class="post-body">
                          <h4 class="post-header"><a href="blog-post.html">Protecting Your Biggest Asset</a></h4>
                          <ul class="post-meta">
                            <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Julien Miro</span></li>
                            <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                              <time datetime="2016-01-01">5 days ago</time>
                            </li>
                            <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                              <ul class="list-tags-inline">
                                <li><a href="#">Protecting</a></li>
                                <li><a href="#">Insurance</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-9 col-lg-6 height-fill">
                      <article class="post-block">
                        <div class="post-image"><img src="images/blog-grid-4-570x253.jpg" alt="" width="570" height="253"/>
                        </div>
                        <div class="post-body">
                          <h4 class="post-header"><a href="blog-post.html">How to Purchase the Right Amount of Life Insurance </a></h4>
                          <ul class="post-meta">
                            <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Julien Miro</span></li>
                            <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                              <time datetime="2016-01-01">5 days ago</time>
                            </li>
                            <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                              <ul class="list-tags-inline">
                                <li><a href="#">Insurance</a></li>
                                <li><a href="#">Financial</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>
                    <div class="col-md-9 col-lg-6 height-fill">
                      <article class="post-block">
                        <div class="post-image"><img src="images/blog-grid-5-570x253.jpg" alt="" width="570" height="253"/>
                        </div>
                        <div class="post-body">
                          <h4 class="post-header"><a href="blog-post.html">A Lesson in Helping your Student Pay for College</a></h4>
                          <ul class="post-meta">
                            <li class="object-inline"><span class="text-style-2 text-white">by</span><span>Amelia Anderson</span></li>
                            <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-query_builder"></span>
                              <time datetime="2016-01-01">5 days ago</time>
                            </li>
                            <li class="object-inline"><span class="icon icon-xxs icon-white material-icons-loyalty"></span>
                              <ul class="list-tags-inline">
                                <li><a href="#">Lesson</a></li>
                                <li><a href="#">Student</a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </article>
                    </div>
                  -->>
                </div>
                <div class="pagination-custom-wrap text-center">
                    <ul class="pagination-custom">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <!--
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        -->
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </section>


    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__cent"></div>
                </div>
            </div>
        </div>
    </div>
    @stop