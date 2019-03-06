<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
            | Account

    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/blog.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <!--end of global css-->
    <!--page level css-->
<!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!-- Icon Section Start -->
    <div class="icon-section" style="background-color: #224777">
        <div class="container">
            <ul class="list-inline">
                <li>
                    <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li>
                    <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                    </a>
                </li>
                <li class="pull-right">
                    <ul class="list-inline icon-position">
                        <li>
                            <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                            <label class="hidden-xs"><a href="mailto:" class="text-white">sales@beaconinvestment.org</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                            <label class="hidden-xs"><a href="tel:" class="text-white">+92 334 5054117</a></label>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- //Icon Section End -->
    <!-- Nav bar Start -->
    <nav class="navbar navbar-default container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"><i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="logo_position">
                {{--                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/bi_logo.png') }}" alt="logo" class="logo_position">--}}
            </a>
        </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav navbar-right">
                <li {!! (Request::is('/') ? 'class="active"' : '') !!}><a href="{{ route('home') }}"> Home</a>
                </li>
                {{--<li class="dropdown {!! (Request::is('typography') || Request::is('advancedfeatures') || Request::is('grid') ? 'active' : '') !!}">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Features</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="{{ URL::to('typography') }}">Typography</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('advancedfeatures') }}">Advanced Features</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('grid') }}">Grid System</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown {!! (Request::is('aboutus') || Request::is('timeline') || Request::is('faq') || Request::is('blank_page')  ? 'active' : '') !!}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Pages</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="{{ URL::to('aboutus') }}">About Us</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('timeline') }}">Timeline</a></li>--}}
                {{--<li><a href="{{ URL::to('price') }}">Price</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('404') }}">404 Error</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('500') }}">500 Error</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('faq') }}">FAQ</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('blank_page') }}">Blank</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown {!! (Request::is('products') || Request::is('single_product') || Request::is('compareproducts') || Request::is('category')  ? 'active' : '') !!}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Shop</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="{{ URL::to('products') }}">Products</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('single_product') }}">Single Product</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('compareproducts') }}">Compare Products</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('category') }}">Categories</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="dropdown {!! (Request::is('portfolio') || Request::is('portfolioitem') ? 'active' : '') !!}"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Portfolio</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li><a href="{{ URL::to('portfolio') }}">Portfolio</a>--}}
                {{--</li>--}}
                {{--<li><a href="{{ URL::to('portfolioitem') }}">Portfolio Item</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}


                {{--<li {!! (Request::is('blog') || Request::is('blogitem/*') ? 'class="active"' : '') !!}><a href="{{ URL::to('blog') }}"> Blog</a>--}}
                {{--</li>--}}
                <li {!! (Request::is('contact') ? 'class="active"' : '') !!}><a href="{{ URL::to('contact') }}">Contact</a>
                </li>

                <li {!! (Request::is('gallery') ? 'class="active"' : '') !!}><a href="{{ URL::to('gallery') }}">Gallery</a>
                </li>

                {{--based on anyone login or not display menu items--}}
                @if(Sentinel::guest())
                    <li><a href="{{ URL::to('login') }}">Login</a>
                    </li>
                    {{--<li><a href="{{ URL::to('http://blog.beaconinvestment.org/blog') }}">Blog</a>--}}
                    <li><a href="{{ URL::to('blog') }}">Blog</a>
                    </li>
                    <li {!! (Request::is('news') || Request::is('news/*') ? 'class="active"' : '') !!}><a
                                href="{{ URL::to('news') }}">News</a>
                    </li>
                @else
                    <li {{ (Request::is('my-account') ? 'class=active' : '') }}><a href="{{ URL::to('my-account') }}">My Account</a>
                    </li>
                    <li><a href="{{ URL::to('logout') }}">Logout</a>
                    </li>
                    {{--<li><a href="{{ URL::to('http://blog.beaconinvestment.org/blog') }}">Blog</a>--}}
                    <li><a href="{{ URL::to('blog') }}">Blog</a>
                    </li>
                    <li {!! (Request::is('news') || Request::is('news/*') ? 'class="active"' : '') !!}><a
                                href="{{ URL::to('news') }}">News</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <!-- Nav bar End -->
</header>

    <style>
        .full-width{
            display: block !important; /* I added this to see the modal, you don't need this */
        }

        /* Important part */
        .modal-dialog{
            overflow-y: initial !important
        }
        .modal-body{
            height: 450px;
            overflow-y: auto;
        }
    </style>
    {{-- Page content --}}
    
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            
            
        <hr class="content-header-sep">
        <div class="container">
            <div class="col-lg-12">

                <section class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav  nav-tabs ">
                                <li class="active">
                                    <a href="#tab1" data-toggle="tab">
                                        <i class="livicon" data-name="user" data-size="16" data-c="#000" data-hc="#000" data-loop="true"></i>
                                        My Profile</a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab">
                                        <i class="livicon" data-name="notebook" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                        Bookings</a>
                                </li>
                                                            </ul>
                            <div  class="tab-content mar-top">
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel">
                                                <div class="panel-heading">
                                                    {{--<h3 class="panel-title">--}}
                                                    {{--User Profile--}}
                                                    {{--</h3>--}}

                                                </div>
                                                <div class="container">
                                                    <div class="row margin_right_left">
                                                        <div class="row margin_right_left">
                                                            <div class="col-md-12">
                                                                <!--main content-->
                                                                <div class="position-center">
                                                                    <!-- Notifications -->
                                                                    <div id="notific">
                                                                        @include('notifications')
                                                                    </div>

                                                                    {{--<div>--}}
                                                                        {{--<h3 class="text-primary" id="title">Personal Information </h3>--}}
                                                                    {{--</div>--}}
                                                                    {!! Form::model($user, ['url' => URL::to('my-account'), 'method' => 'put', 'class' => 'form-horizontal','enctype'=>"multipart/form-data"]) !!}

                                                                    {{ csrf_field() }}
                                                                    <div class="form-group {{ $errors->first('pic', 'has-error') }}">
                                                                        <label class="col-md-2 control-label">Avatar:</label>
                                                                        <div class="col-md-10">
                                                                            <div class="container-fluid">
                                                                                {{--<div class="row">--}}
                                                                                    {{--<div class="col-md-12">--}}
                                                                                        <table class="table">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td class="col-md-8" style="border: 0">
                                                                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                                                                        <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                                                                                            @if($user->pic)
                                                                                                                @if((substr($user->pic, 0,5)) == 'https')
                                                                                                                    <img src="{{ $user->pic }}" alt="img"
                                                                                                                         class="img-responsive"/>
                                                                                                                @else
                                                                                                                    <img src="{!! url('/').'/uploads/users/'.$user->pic !!}" alt="img"
                                                                                                                         class="img-responsive"/>
                                                                                                                @endif
                                                                                                            @elseif($user->gender === "male")
                                                                                                                <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="..."
                                                                                                                     class="img-responsive"/>
                                                                                                            @elseif($user->gender === "female")
                                                                                                                <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="..."
                                                                                                                     class="img-responsive"/>
                                                                                                            @else
                                                                                                                <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="..."
                                                                                                                     class="img-responsive"/>
                                                                                                            @endif
                                                                                                        </div>
                                                                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                                                                        <div>
                                                                                                            <span class="btn btn-primary btn-file">
                                                                                                                <span class="fileinput-new">Select image</span>
                                                                                                                <span class="fileinput-exists">Change</span>
                                                                                                                <input type="file" name="pic" id="pic" />
                                                                                                            </span>
                                                                                                            <span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td style="border: 0">
                                                                                                    <div class="panel-body table-responsive">
                                                                                                        <table class="table"
                                                                                                               style="font-size: 80%">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td>Total Bookings</td>
                                                                                                                    <td>{{$counts}}</td>
                                                                                                                    {{--@foreach($books->booking as $key =>$book)--}}
                                                                                                                            {{--<td><a href="#tab2" data-toggle="tab">Total Bookings</a></td>--}}
                                                                                                                            {{--<td><a href="#tab2" data-toggle="tab">{{++$key}}</a></td>--}}
                                                                                                                    {{--@endforeach--}}
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <td>Total Investment</td>
                                                                                                                    <td>{{number_format($booking_sum)}}</td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    {{--</div>--}}
                                                                                {{--</div>--}}
                                                                            </div>

                                                                            <span class="help-block">{{ $errors->first('pic', ':message') }}</span>
                                                                        </div>
                                                                        {{--<div class="col-md-3">--}}
                                                                            {{--<label for="booking details">Booking Details</label>--}}
                                                                            {{--<div class="col-md-12">--}}
                                                                                {{--<label for="booking details">Total Bookings</label>--}}
                                                                                {{--@foreach($books->booking as $index =>$book)--}}
                                                                                    {{--<tr>--}}
                                                                                        {{--<td>{{$book->count()}}</td>--}}
                                                                                    {{--</tr>--}}
                                                                                {{--@endforeach--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                    <div class="form-group {{ $errors->first('first_name', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            First Name:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " name="first_name" id="uf-name"
                                                                                       class="form-control" value="{!! old('first_name',$user->first_name) !!}">
                                                                            </div>
                                                                            <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('last_name', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            Last Name:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " name="last_name" id="ul-name"
                                                                                       class="form-control"
                                                                                       value="{!! old('last_name',$user->last_name) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('email', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            Email:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="mail" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " id="email" name="email" class="form-control"
                                                                                       value="{!! old('email',$user->email) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('cnic', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            CNIC:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="pencil" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder="00000-0000000-0" id="cnic" name="cnic" class="form-control"
                                                                                       value="{!! old('cnic',$user->cnic) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('cnic', ':message') }}</span>
                                                                        </div>

                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('cell_no', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            Cell No:
                                                                            <span class='require'>*</span>
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="phone" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder="Cell No" id="cell_no" name="cell_no" class="form-control"
                                                                                       value="{!! old('cell_no',$user->cell_no) !!}"></div>
                                                                            <span class="help-block">{{ $errors->first('cell_no', ':message') }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group {{ $errors->first('dob', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label">
                                                                            DOB:
                                                                        </label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="calendar" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                @if($user->dob === '')
                                                                                    {!!  Form::text('dob', null, array('id' => 'datepicker','class' => 'form-control'))  !!}
                                                                                @else
                                                                                    {!!  Form::text('dob', old('dob',$user->dob), array('id' => 'datepicker','class' => 'form-control', 'data-date-format'=> 'YYYY-MM-DD'))  !!}
                                                                                @endif
                                                                            </div>
                                                                            <span class="help-block">{{ $errors->first('dob', ':message') }}</span>
                                                                        </div>
                                                                    </div>

                                                                    {{--<div class="form-group">--}}
                                                                        {{--<label class="col-lg-2 control-label">Gender: </label>--}}
                                                                        {{--<div class="col-lg-6">--}}
                                                                            {{--<div class="radio">--}}
                                                                                {{--<label>--}}
                                                                                    {{--<input type="radio" name="gender" value="male" @if($user->gender === "male") checked="checked" @endif />--}}
                                                                                    {{--Male--}}
                                                                                {{--</label>--}}
                                                                            {{--</div>--}}
                                                                            {{--<div class="radio">--}}
                                                                                {{--<label>--}}
                                                                                    {{--<input type="radio" name="gender" value="female" @if($user->gender === "female") checked="checked" @endif />--}}
                                                                                    {{--Female--}}
                                                                                {{--</label>--}}
                                                                            {{--</div>--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}

                                                                    <div class="form-group {{ $errors->first('city', 'has-error') }}">
                                                                        <label class="col-lg-2 control-label" for="city">City:</label>
                                                                        <div class="col-lg-6">
                                                                            <div class="input-group">
                                                                                <span class="input-group-addon">
                                                                                    <i class="livicon" data-name="plus-alt" data-size="16" data-loop="true" data-c="#418bca" data-hc="#418bca"></i>
                                                                                </span>
                                                                                <input type="text" placeholder=" " id="city" class="form-control" name="city"
                                                                                       value="{!! old('city',$user->city) !!}"/>
                                                                            </div>
                                                                        </div>
                                                                        <span class="help-block">{{ $errors->first('city', ':message') }}</span>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <div class="col-lg-offset-2 col-lg-10">
                                                                            <button class="btn btn-primary" type="submit">Save</button>
                                                                        </div>
                                                                    </div>

                                                                    </form>{{--{!!  Form::close()  !!}--}}

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--Start of Booking tab--}}
                                <div id="tab2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="col-md-12 pd-top">
                                            <div class="panel panel-info filterable">
                                                <div class="panel-heading clearfix" style="background-color: #224777; color: white">
                                                    <h3 class="panel-title pull-left">
                                                        <i class="livicon" data-name="list" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Payment Schedule
                                                    </h3>
                                                </div>

                                                <div class="panel-body table-responsive">
                                                    <table class="table table-striped" id="rowReorder"
                                                           style="font-size: 95%">
                                                        <thead>
                                                        <tr>
                                                            <th>Sr.no.</th>
                                                            <th>Reference ID</th>
                                                            <th>Society Name</th>
                                                            <th>Size</th>
                                                            <th>Total Amount</th>
                                                            <th>Booking Date</th>
                                                            <th>Payment Schedule</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($books->booking as $index =>$book)
                                                            <tr>
                                                                <td>{{$index+1}}</td>
                                                                <td>{{$book->booking_code}}</td>
                                                                <td>{{$book->society}}</td>
                                                                <td>{{$book->size}}</td>
                                                                <td>{{$book->total_price}}</td>
                                                                <td>{{$book->booking_date}}</td>
                                                                <td>
                                                                @if($book->status == 0 || $book->status == '')
                                                                    {{--<button class="btn btn-block btn-danger disabled" data-toggle="modal"--}}
                                                                    {{--data-href="#full-width" onclick="showdetail({{$book->id}})">Sold--}}
                                                                    {{--</button>--}}
                                                                    <button class="btn btn-block btn-danger" data-toggle="modal"
                                                                            data-target="#modal-21">Sold
                                                                    </button>
                                                                    {{--<button class="btn btn-raised btn-info " data-toggle="modal"--}}
                                                                    {{--data-target="#modal-21">Sold</button>--}}
                                                                @else
                                                                    <button class="btn btn-block btn-primary " data-toggle="modal" data-href="#full-width"
                                                                            href="#full-width" onclick="showdetail({{json_encode($book->booking_code)}})" style="background-color: #224777">
                                                                            {{--href="#full-width" onclick="showdetail({{$book->id}})" style="background-color: #224777">--}}
                                                                        View Payments Schedule
                                                                    </button>
                                                                @endif

                                                                {{--<a class="btn btn-primary btn-info btn-large" data-toggle="modal"--}}
                                                                {{--data-href="#full-width" href="#full-width">View</a>--}}
                                                            </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{--End of Booking tab --}}
                                {{--Start of Blogs tab --}}

                                {{--End of Blogs tab --}}
                            </div>
                        </div>
                    </div>
            </div>
            {{--Start of Payment Schedule Model--}}
            <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Payment Schedule</h4>
                        </div>
                        <div class="modal-body">
                            {{--<h5 style=" margin: 0 0 0 2%"><strong>{{"REF ID: ".$book->booking_code}}</strong></h5>--}}
                            <div class="panel-body table-responsive table-striped">

                                <table class="table table-striped" id="table2" style="font-size: 90%; margin: -3% 0 0 0">

                                </table>
                            <!--    <table class="table table-striped" id="table2"  style="font-size: 90%">

                                    <thead>
                                    <tr>
                                        <th style="width: 8%">Sr. No.</th>
                                        <th>Due Date</th>
                                        <th style="width: 20%">Installment Amount</th>
                                        <th>Paid</th>
                                        <th>Balance</th>
                                        <th>Payment Date</th>
                                    </tr>
                                    </thead>
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                    {{--<th style="width: 8%">Sr. No.</th>--}}
                                    {{--<th>Due Date</th>--}}
                                    {{--<th>Installment Amount</th>--}}
                                    {{--<th>Paid</th>--}}
                                    {{--<th>Balance</th>--}}
                                    {{--<th>Payment Date</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody class="table-hover">--}}

                                    {{--</tbody>--}}
                                </table> -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                            {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                         </div>
                    </div>
                </div>
            </div>
            {{--End of Payment Schedule Model--}}
            {{--</section>--}}
            <div class="modal fade tossing" id="modal-21" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content ">
                        <div class="modal-header bg-info" style="background-color: #224777">
                            <h4 class="modal-title" id="Modallabel3dslit" style="color: white">Booking Details</h4>
                        </div>
                        <div class="modal-body" style="max-height: 15%">
                            <h3 style="text-align: center">
                                <b>This Booking no longer belongs to you.</b>
                            </h3>
                        </div>
                        <div class="modal-footer">
                            <button class="btn  btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>


                            // function showdetail(b_id) {
            function showdetail(booking_code) {

                // $.get('/my-account/get_payments?b_id='+b_id, function(data){
                $.get('/my-account/get_payments?booking_code='+booking_code, function(data){
                        $("#table2").empty();
                        let var1 = JSON.parse(JSON.stringify(data));
                        var payments = var1[0];
                        var p_date = var1[1];
                        var b_date = var1[2];
                        var confirm_after = var1[3];
                        var i_amounts = var1[4];
                        var t_row = var1[5];
                        var ins_amount = var1[6];
                        var datePlan = var1[8];
                        // alert(ins_amount);
                        // console.log(JSON.stringify(var2))
                        {{--var b_date = {!! json_encode($b_date) !!};--}}
                        {{--var t_row = {!! json_encode($t_rows) !!};--}}
                        {{--var i_amounts = {!! json_encode($i_amount) !!};--}}
                        {{--var payments = {!! json_encode($payments) !!};--}}
                        {{--var p_date = {!! json_encode($p_date) !!};--}}
                        {{--var confirm_after = {!! json_encode($confirm_after) !!};--}}


                        //Date Function start
                        var d = new Date(b_date);
                        // Month name function
                        var month_name = function(dt){
                            mlist = [ "JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC" ];
                            return mlist[dt.getMonth()];
                        };  // Month name function end
                        var month_array = [];

                        if (datePlan == 0){
                        var m_ys = "01-"+month_name(d) + "-" + d.getFullYear();
                        month_array[0]= m_ys;
                        }else if (datePlan == 1){
                            month_array[0]= d.getDate()+ "-" +month_name(d) + "-" + d.getFullYear();
                        }

                        //if (confirm_after == 3) {
                        var a = parseInt(confirm_after );
                        d.setMonth(d.getMonth() + a);

                        // var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                        // month_array[1]= m_yss;

                        if (datePlan == 0){
                            // var m_y = "01-" + month_name(objDate) + "-" + year;
                            var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                            month_array[1]= m_yss;
                            // month_array.push(m_y);
                        }else if (datePlan == 1) {
                            m_yss = d.getDate()+ "-" +month_name(d) + "-" + d.getFullYear();
                            month_array[1]= m_yss;
                        }
                        

                        for (var ii = 2; ii < t_row; ii++) {
                            d.setMonth(d.getMonth() + 3);
                            var objDate = new Date(d);
                            var year = objDate.getFullYear();

                            if (datePlan == 0){
                                var m_y = "01-" + month_name(objDate) + "-" + year;
                                //month_array.push(m_y);
                            }else if (datePlan == 1) {
                                m_y = d.getDate()+ "-" +month_name(objDate) + "-" + d.getFullYear();
                            }

                            // var m_y = "01-" + month_name(objDate) + "-" + year;
                            month_array.push(m_y);
                        }//Date Function end
                        
                        
                        // }
                        /* else if (confirm_after == 1){
                             d.setMonth(d.getMonth() + 1);
                             var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                             month_array[1]= m_yss;
                             for (var ii = 2; ii < t_row; ii++) {
                                 d.setMonth(d.getMonth() + 3);
                                 var objDate = new Date(d);
                                 var year = objDate.getFullYear();
                                 var m_y = "01-" + month_name(objDate) + "-" + year;
                                 month_array.push(m_y);
                             }//Date Function end
                         }
                         else if (confirm_after == 4){
                             d.setMonth(d.getMonth() + 4);
                             var m_yss = "01-"+month_name(d) + "-" + d.getFullYear();
                             month_array[1]= m_yss;
                             for (var ii = 2; ii < t_row; ii++) {
                                 d.setMonth(d.getMonth() + 3);
                                 var objDate = new Date(d);
                                 var year = objDate.getFullYear();
                                 var m_y = "01-" + month_name(objDate) + "-" + year;
                                 month_array.push(m_y);
                             }//Date Function end
                         }*/

                        //Installment Amount Function start
                        // var i_amount = i_amounts;
                        var amount_array = [];
                        amount_array[0]=[i_amounts*10/100];
                        amount_array[1]=[i_amounts*10/100];
                        for (var im=2; im<=t_row; im++){
                            // if (ins_amount[im] !== undefined) {
                            //     amount_array.push(ins_amount[im]);
                            // }else{
                            //     amount_array.push('nil');
                            // }
                            amount_array.push(ins_amount);
                        }//Installment Amount Function end

                        //Payments Function start
                        var payments_array = [];
                        for (var iip = 0; iip < t_row; iip++) {
                            if (payments[iip] !== undefined) {
                                payments_array.push(payments[iip]);
                            }else{
                                payments_array.push('nil');
                            }
                        }//Payments Function end

                        //Payments Date Function start
                        var pay_data_array = [];
                        for (var iiip = 0; iiip < t_row; iiip++) {
                            if (p_date[iiip] !== undefined) {
                                pay_data_array.push(p_date[iiip]);
                            }else{
                                pay_data_array.push('nil');
                            }
                        }//Payments Date Function end

                        //Balance Amount Start
                        var balance_array = [];
                        var balance;
                        for (var iiip = 0; iiip < t_row; iiip++) {
                            if (payments[iiip] !== undefined) {
                                i_amounts -= payments[iiip];
                                balance_array.push(i_amounts);
                            }else{
                                balance_array.push('nil');
                            }
                        }//Balance Amount End

                        var  table1 = document.getElementById("table2");

                        var header = table1.createTHead();
                        var row = header.insertRow(0);
                        var cell = row.insertCell(0);
                        cell.innerHTML = "<b>Sr. No.</b>";
                        var cell1 = row.insertCell(1);
                        cell1.innerHTML = "<b>Due Date</b>";
                        var cell2 = row.insertCell(2);
                        cell2.innerHTML = "<b>Installment Amount</b>";
                        var cell3 = row.insertCell(3);
                        cell3.innerHTML = "<b>Paid</b>";
                        var cell4 = row.insertCell(4);
                        cell4.innerHTML = "<b>Balance</b>";
                        var cell5 = row.insertCell(5);
                        cell5.innerHTML = "<b>Payment Date</b>";



                        // Table Generator
                                {{--var t_row = {!! ($t_rows) !!};--}}
                        for (var p = 0; p<t_row; p++){
                            var array = [[[p+1],month_array[p],amount_array[p],payments_array[p],balance_array[p],pay_data_array[p]]],
                                table = document.getElementById("table2");
                            for (var i=0; i<array.length; i++)
                            {
                                var newRow = table.insertRow(table.length);

                                for (var j=0; j<array[i].length; j++)
                                {
                                    var cell = newRow.insertCell(j);
                                    cell.innerHTML = array[i][j];
                                }
                            }}
                    });

                }

            </script>
        </div>


<footer>
    <div class="container footer-text">
        <!-- About Us Section Start -->
        <div class="col-sm-4">
            <h4>About Us</h4>
            <p>
                Our Investment Company, located in Islamabad, Pakistan, is a full service real estate company that provides acquisition, development and finance expertise for both commercial and multi-family projects.
                <br>
                <br>
                The mission of Beacon Investment is to provide our investors with the most honest, reliable and efficient real estate services in Pakistan. We will strive to meet all of your real estate needs and provide you with exceptional loyalty.
            </p>
            <hr id="hr_border2">
            <h4 class="menu">Follow Us</h4>
            <ul class="list-inline">
                <li>
                    <a href="https://www.facebook.com/beaconinvestment"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/beaconinvest"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="https://pk.linkedin.com/company/beacon-investment"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                    </a>
                </li>
                {{--<li>--}}
                {{--<a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
            </ul>
        </div>
        <!-- //About us Section End -->
        <!-- Contact Section Start -->
        <div class="col-sm-4">
            <h4>Contact Us</h4>
            <ul class="list-unstyled">
                <li>Office # 26, Third Floor,</li>
                <li>Al-Hameed Mall,Markaz</li>
                <li>G-11, Islamabad, Pakistan</li>
                <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Phone:+92 334 5054117</li>
                {{--<li><i class="livicon icon4 icon3" data-name="printer" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Fax:400 423 1456</li>--}}
                <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="text-success" style="cursor: pointer;">
                        sales@beaconinvestment.org</span>
                </li>
                <li><i class="livicon icon4 icon3" data-name="skype" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Skype:
                    <span class="text-success"  style="cursor: pointer;">Beacon</span>
                </li>
            </ul>
            <hr id="hr_border">
            <div class="news menu">
                <h4>News letter</h4>
                <p>subscribe to our newsletter and stay up to date with the latest news and deals</p>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="yourmail@mail.com" aria-describedby="basic-addon2">
                    <a href="#" class="btn btn-primary text-white" role="button">Subscribe</a>
                </div>
            </div>
        </div>
        <!-- //Contact Section End -->
        <!-- Recent post Section Start -->
        <div class="col-sm-4">
            <h4>We as a TEAM</h4>
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="{{ asset('assets/images/team-beacon-01-189x189.jpg') }}" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Tariq Iqbal Malik
                    </p>
                    <p class="pull-left"><i>Co-founder & CEO</i></p>
                </div>
            </div>

            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="{{ asset('assets/images/team-beacon-04-189x189.jpg') }}" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Sahban Tariq Malik
                    </p>
                    <p class="pull-left"><i>Chief Marketing Officer</i></p>
                </div>
            </div>
            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object img-circle" src="{{ asset('assets/images/team-beacon-03-189x189.jpg') }}" alt="image">
                    </a>
                </div>
                <div class="media-body">
                    <p class="media-heading">Zain Tariq
                    </p>
                    <p class="pull-left"><i>Chief Marketing Technology Officer</i></p>
                </div>
            </div>
        </div>
        <!-- //Recent Post Section End -->
    </div>
</footer>
<!-- //Footer Section End -->
<div class="copyright">
    <div class="container">
        <p>Copyright &copy; Beacon, 2018</p>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!--global js starts-->
{{--<script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>--}}
<script src="{{ asset('assets/js/app.js') }}" type="text/javascript"></script>
<!--global js end-->
<!-- begin page level js -->

<!-- end page level js -->
</body>

</html>
