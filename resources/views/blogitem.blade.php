@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{$blog->title}}
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/blog.css') }}">
    <!--end of page level css-->

    <meta property="og:url"           content="{{ URL::to('blogitem/'.$blog->slug) }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{ $blog->title }}" />
    <meta property="og:description"   content="{{ $blog->content }}" />
    <meta property="og:image"         content="{{ URL::to('/uploads/blog/'.$blog->image)  }}" />
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
                    <a href="#">Blog Item</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="doc-landscape" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Blog Item
            </div>
        </div>
    </div>
@stop


{{-- Page content --}}
@section('content')

    <section class="section-30 section-md-40 section-lg-66 section-xl-bottom-90 bg-gray-dark page-title-wrap" style="background-image: url({{asset('assets/images/notebook5.jpg')}}); ">
        <div class="container">
            <div class="page-title">
                <h2>{{$blog->title}}</h2>
            </div>
        </div>
    </section>
    <!-- Container Section Start -->
    <div class="container" style="text-align: center;">
        <div class="row content ">
            <!-- Business Deal Section Start -->
            <div class="col-sm-12 col-md-12">
                <div class=" thumbnail featured-post-wide img">
                    @if($blog->image)
                        <br/><br/><br/>
                         <img src="{{ URL::to('uploads/blog/'.$blog->image)  }}" class="img-responsive" style="height: 600px" alt="Image">
                @endif
                <!-- /.blog-detail-image -->
                    <div class=" no-border blog-detail-content " style="background: #FBF9FC; font-weight: 400;">
                        <p class="additional-post-wrap">
                            <span class="additional-post">
                                    <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i> by&nbsp;<a href="#">{{$blog->author->first_name . ' ' . $blog->author->last_name}}</a>
                                </span>
                            <span class="additional-post">
                                    <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> {{$blog->created_at->diffForHumans()}} </a>
                                </span>
                            <span class="additional-post">
                                    <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> {{$blog->comments->count()}} comments</a>
                                </span>
                        </p>
                        <p class="text-justify ">
                            {!! $blog->content !!}
                        </p>
                        <div class="blog-detail-image" style="height: 100%">
                            @if(!empty($blog->summernote_image))
                                <img src="{{URL::to('public/uploads/blog/'.$blog->summernote_image)}}"  class="height-fill" alt="Image">
                            @endif
                        </div>
                        <p>
                            <strong>Tags: </strong>
                            @forelse($blog->tags as $tag)
                                <a href="{{ URL::to('blog/'.mb_strtolower($tag).'/tag') }}">{{ $tag }}</a>,
                            @empty
                                No Tags
                            @endforelse
                        </p>
                            @php($url=url('blogitem/'.$blog->slug))
                            <a href="javascript:void(0);" onclick="fb_share('{{ $url }}')" class="fbBtm col-md-4">
                                <img src="{{ asset('assets/images/facebook-share.png') }}" alt="facebook-share" style="width: 80%; margin-left: -20px;">
                            </a>
                            <div id="fb-root"></div>
                    </div>
                </div>
                <script>
                    (function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id))
                            return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=2134712883464179";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                    function fb_share(dynamic_link,dynamic_title) {
                        var app_id = '2134712883464179';
                        var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
                        var w = 600;
                        var h = 400;
                        var left = (screen.width / 2) - (w / 2);
                        var top = (screen.height / 2) - (h / 2);
                        window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
                        return false;
                    }
                </script>
                <!-- /the.box .no-border -->
                <!-- Media left section start -->
                <h3 class="comments">{{$blog->comments->count()}} Comments</h3><br />
                <ul class="media-list">
                    @foreach($blog->comments as $comment)
                        <li class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><i>{{$comment->name}}</i></h4>
                                <p>{{$comment->comment}}</p>
                                <p class="text-danger">
                                    <small> {!! $comment->created_at!!}</small>
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <!-- //Media left section End -->
                <!-- Comment Section Start -->
                <h3>Leave a Comment</h3>
                {!! Form::open(array('url' => URL::to('blogitem/'.$blog->id.'/comment'), 'method' => 'post', 'class' => 'bf', 'files'=> true)) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::text('name', null, array('class' => 'form-control input-lg','required' => 'required', 'placeholder'=>'Your name')) !!}
                    <span class="help-block">{{ $errors->first('name', ':message') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::text('email', null, array('class' => 'form-control input-lg','required' => 'required', 'placeholder'=>'Your email')) !!}
                    <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                </div>
                <div class="form-group {{ $errors->has('website') ? 'has-error' : '' }}">
                    {!! Form::text('website', null, array('class' => 'form-control input-lg', 'placeholder'=>'Your website')) !!}
                    <span class="help-block">{{ $errors->first('website', ':message') }}</span>
                </div>
                <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                    {!! Form::textarea('comment', null, array('class' => 'form-control input-lg no-resize','required' => 'required', 'style'=>'height: 200px', 'placeholder'=>'Your comment')) !!}
                    <span class="help-block">{{ $errors->first('comment', ':message') }}</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-md">
                        <i class="livicon" data-name="comment" data-c="#FFFFFF" data-hc="#FFFFFF" data-size="18" data-loop="true"></i>
                        Submit
                    </button>
                </div>
            {!! Form::close() !!}
            <!-- //Comment Section End -->
            </div>
            <!-- //Business Deal Section End -->
            <!-- /.col-sm-9 -->
            <!-- Recent Posts Section Start -->

            <!-- //Recent Posts Section End -->
            <!-- /.col-sm-3 -->
        </div>
    </div>
    <!-- //Conatainer Section End -->
@stop