@extends('admin/layouts/default')

@section('title')
Sms
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/select2/css/select2.min.css') }}" rel="stylesheet"/>
    {{--<link rel="stylesheet" href="https://select2.org/assets/a7be624d756ba99faa354e455aed250d.css">--}}
@stop

@section('content')
@include('core-templates::common.errors')
<section class="content-header">
    <h1>Sms</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>Sms</li>
        <li class="active">Create Sms </li>
    </ol>
</section>
<section class="content paddingleft_right15">
<div class="row col-md-2">
</div>
<div class="row col-md-8">
 <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <i class="livicon" data-name="message-flag" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                Send New  Sms
            </h4></div>
        <br />
        <div class="panel-body">
        {!! Form::open(['route' => 'admin.sms.store', 'id'=> 'addsmsnow']) !!}

            @include('admin.sms.fields')

        {!! Form::close() !!}
    </div>
  </div>
 </div>
</section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
    {{--<script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>--}}
    {{--<script src="{{ asset('assets/vendors/moment/js/moment.min.js') }}" ></script>--}}
    {{--<script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>--}}
    {{--<script src="{{ asset('assets/vendors/select2/js/select2.js') }}" type="text/javascript"></script>--}}
    <script src="{{ asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
    {{--<script src="{{ asset('assets/js/pages/addsms.js') }}"></script>--}}
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script src="{{ asset('assets/js/pages/addsms.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#cell_no').select2({

            });
        });
    </script>
@stop
