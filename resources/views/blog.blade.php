@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blog
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/blog.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="{{ route('blog') }}">Blog</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>
                {{--<a href="{{ route('blog-account')  }}">Blog</a>--}}
                <a href="{{ URL::to('admin/blog/create') }}">Blog</a>
            </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Strat -->
    <div class="container">
        <h2>Blog</h2>
        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    @forelse ($blogs as $blog)
                    <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail">
                        @if($blog->image)
                        {{--<img src="{{ URL::to('/uploads/blog/'.$blog->image)  }}" class="img-responsive" alt="Image">--}}
                            <img src="{{ URL::to('uploads/blog/'.$blog->image)  }}" style="border-radius: 30%; max-width: 300px" class="img-responsive" alt="Image">
                        @endif
                        <div class="featured-text relative-left">
                            <h3 class="primary"><a href="{{ URL::to('blogitem/'.$blog->slug) }}">{{$blog->title}}</a></h3>
                            <p>
                                {{--{!! str_limit($blog->content,$limit=10) !!}--}}
                                {!!  substr(strip_tags($blog->content), 0, 500) !!}
                            </p>
                            <p>
                                <strong>Tags: </strong>
                                @forelse($blog->tags as $tag)
                                    <a href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a>,
                                @empty
                                    No Tags
                                @endforelse
                            </p>
                            <p class="additional-post-wrap">
                                <span class="additional-post">
                                    <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i> by&nbsp;<a href="#">{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                                </span>
                                <span class="additional-post">
                                    <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> {{$blog->created_at->diffForHumans()}}</a>
                                </span>
                                <span class="additional-post">
                                    <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> {{$blog->comments->count()}} comments</a>
                                </span>
                            </p>
                            <hr>
                            <p class="text-right">
                                <a href="{{ URL::to('blogitem/'.$blog->slug) }}" class="btn btn-primary text-white">Read more</a>
                            </p>
                        </div>
                        <!-- /.featured-text -->
                    </div>
                    <!-- /.featured-post-wide -->
                    <!-- END FEATURED POST -->
                    @empty
                        <h3>No Posts Exists!</h3>
                    @endforelse
                    <ul class="pager">
                        {!! $blogs->render() !!}
                    </ul>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <!-- END POPULAR POST -->
                    <!-- Tabbable-Panel Start -->
                    <h3 class="martop">Tab Widget</h3>
                    <div class="tabbable-panel">
                        <!-- Tabbablw-line Start -->
                        <div class="tabbable-line">
                            <!-- Nav Nav-tabs Start -->
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                        Popular Posts </a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">
                                        Recent Posts </a>
                                </li>
                            </ul>
                            <!-- //Nav Nav-tabs End -->
                            <!-- Tab-content Start -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_default_1">
                                    <div class="the-box">
                                        <h3 class="small-heading text-center">Recent Posts</h3>
                                        @foreach($populars as $popular)
                                            <ul class="media-list media-xs media-dotted">
                                                <li class="media">
                                                    <a class="pull-left" href="{{ URL::to('blogitem/'.$popular->slug) }}">
                                                        <img src="{{ URL::to('public/uploads/blog/'.$popular->image)  }}" class="img-circle img-responsive pull-left" alt="riot">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading primary">
                                                            <a href="{{ URL::to('blogitem/'.$popular->slug) }}">{!! $popular->title !!}</a>
                                                        </h4>
                                                        <p class="date">
                                                            <small class="text-danger"><a href="{{ URL::to('blogitem/'.$popular->slug) }}"> {{$popular->created_at->diffForHumans()}}</small>
                                                        </p>
                                                        <p class="small">
                                                            {{--{!! $recent->content !!}--}}
                                                            {!!  substr(strip_tags($popular->content), 0, 150) !!}
                                                        </p>
                                                    </div>
                                                    <div class="text-right primary marbtm"><a href="{{ URL::to('blogitem/'.$popular->slug) }}">Read more</a></div>
                                                </li>
                                                <hr>
                                            </ul>
                                        @endforeach
                                    </div>
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left media-middle tab col-sm-12 col-xs-12">--}}
                                            {{--@forelse($populars as $popular)--}}
                                                {{--<a href="{{ URL::to('blogitem/'.$popular->slug) }}">--}}
                                                    {{--<a href="#">--}}
                                                        {{--@if($popular->image)--}}
                                                            {{--<img src="{{ URL::to('/uploads/blog/'.$popular->image)  }}" class="img-responsive" alt="Image">--}}
                                                        {{--@endif--}}
                                                    {{--</a>--}}
                                                {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="text-primary">{!! $popular->title !!}</h4>--}}
                                    {{--<p>--}}
                                        {{--{!! str_limit($popular->content) !!}--}}
                                        {{--{!!  substr(strip_tags($popular->content), 0, 150) !!}--}}
                                    {{--</p>--}}
                                    {{--<div class="text-right primary marbtm"><a href="{{ URL::to('blogitem/'.$popular->slug) }}">Read more</a>--}}
                                    {{--</div>--}}
                                    {{--@empty--}}
                                        {{--<h3>No Posts Exists!</h3>--}}
                                    {{--@endforelse--}}
                                </div>
                                <div class="tab-pane" id="tab_default_2">
                                    <div class="the-box">
                                        <h3 class="small-heading text-center">Recent Posts</h3>
                                        @foreach($recents as $recent)
                                            <ul class="media-list media-xs media-dotted">
                                                <li class="media">
                                                    <a class="pull-left" href="{{ URL::to('blogitem/'.$recent->slug) }}">
                                                        <img src="{{ URL::to('public/uploads/blog/'.$recent->image)  }}" class="img-circle img-responsive pull-left" alt="riot">
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading primary">
                                                            <a href="{{ URL::to('blogitem/'.$recent->slug) }}">{!! $recent->title !!}</a>
                                                        </h4>
                                                        <p class="date">
                                                            <small class="text-danger"><a href="{{ URL::to('blogitem/'.$recent->slug) }}"> {{$recent->created_at->diffForHumans()}}</small>
                                                        </p>
                                                        <p class="small">
                                                            {{--{!! $recent->content !!}--}}
                                                            {!!  substr(strip_tags($recent->content), 0, 150) !!}
                                                        </p>
                                                    </div>
                                                    <div class="text-right primary marbtm"><a href="{{ URL::to('blogitem/'.$recent->slug) }}">Read more</a></div>
                                                </li>
                                                <hr>
                                            </ul>
                                        @endforeach
                                    </div>
                                    {{--<div class="media">--}}
                                        {{--<div class="media-left media-middle tab col-sm-12 col-xs-12">--}}
                                            {{--@forelse($recents as $recent)--}}
                                            {{--<a href="{{ URL::to('blogitem/'.$recent->slug) }}">--}}
                                                    {{--<a href="#">--}}
                                                        {{--@if($recent->image)--}}
                                                            {{--<img src="{{ URL::to('/uploads/blog/'.$recent->image)  }}" class="img-responsive" alt="Image">--}}
                                                        {{--@endif--}}
                                                    {{--</a>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="text-primary">{!! $recent->title !!}</h4>--}}
                                    {{--<p>--}}
                                        {{--{!! $recent->content !!}--}}
                                        {{--{!!  substr(strip_tags($recent->content), 0, 150) !!}--}}
                                    {{--</p>--}}
                                    {{--<div class="text-right primary marbtm"><a href="{{ URL::to('blogitem/'.$recent->slug) }}">Read more</a>--}}
                                    {{--</div>--}}
                                    {{--@empty--}}
                                        {{--<h3>No Posts Exists!</h3>--}}
                                    {{--@endforelse--}}
                                </div>
                            </div>
                            <!-- //Tab-content End -->
                        </div>
                        <!-- //Tabbablw-line End -->
                    </div>
                    <!-- Tabbable_panel End -->
                    {{--<div class="the-box recent">--}}
                        {{--<h3 class="small-heading text-center">Recent Comments</h3>--}}
                        {{--<ul class="media-list media-xs media-dotted">--}}
                            {{--<li class="media">--}}
                                {{--<a class="pull-left" href="#">--}}
                                    {{--<img src="{{ asset('assets/images/authors/avatar.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">--}}
                                {{--</a>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading primary">--}}
                                                        {{--<a href="#">Elizabeth Owens at Duis autem vel eum iriure dolor in hendrerit in</a>--}}
                                                    {{--</h4>--}}
                                    {{--<p class="date">--}}
                                        {{--<small class="text-danger">2hours ago</small>--}}
                                    {{--</p>--}}
                                    {{--<p class="small">--}}
                                        {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<hr>--}}
                            {{--<li class="media">--}}
                                {{--<a class="pull-left" href="#">--}}
                                    {{--<img src="{{ asset('assets/images/authors/avatar1.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">--}}
                                {{--</a>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading primary">--}}
                                                        {{--<a href="#">Harold Chavez at Duis autem vel eum iriure dolor in hendrerit in</a>--}}
                                                    {{--</h4>--}}
                                    {{--<p class="date">--}}
                                        {{--<small class="text-danger">5hours ago</small>--}}
                                    {{--</p>--}}
                                    {{--<p class="small">--}}
                                        {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<hr>--}}
                            {{--<li class="media">--}}
                                {{--<a class="pull-left" href="#">--}}
                                    {{--<img src="{{ asset('assets/images/authors/avatar5.jpg') }}" class="img-circle img-responsive pull-left" alt="riot">--}}
                                {{--</a>--}}
                                {{--<div class="media-body">--}}
                                    {{--<h4 class="media-heading primary">--}}
                                                        {{--<a href="#">Mihaela Cihac at Duis autem vel eum iriure dolor in hendrerit in</a>--}}
                                                    {{--</h4>--}}
                                    {{--<p class="date">--}}
                                        {{--<small class="text-danger">10hours ago</small>--}}
                                    {{--</p>--}}
                                    {{--<p class="small">--}}
                                        {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    <div class="thumbnail">
                        <h3>Tags</h3>
                        <div class="primary text-center">
                            @forelse($tags as $tag)
                                <a href="{{ URL::to('blog/'.$tag.'/tag') }}">{{ $tag }}</a>,
                            @empty
                                No Tags
                            @endforelse
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
    </div>

@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
