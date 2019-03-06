@extends('admin/layouts/default')

@section('title')
Payments
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
     <h1>Payments Edit</h1>
     <ol class="breadcrumb">
         <li>
             <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                 Dashboard
             </a>
         </li>
         <li>Payments</li>
         <li class="active">Edit Payment </li>
     </ol>
    </section>
    <section class="content paddingleft_right15">
      <div class="row">
      <div class="panel panel-primary">
            <div class="panel-heading">
                <h4 class="panel-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Edit  Payment
                </h4></div>
            <br />
        <div class="panel-body">
            {{--<div class="form-group col-sm-12">--}}
                {{--<label for="tag_list">User Name:</label>--}}
                {{--<select id="tag_list" name="tag_list" class="form-control" width="100%">--}}
                    {{--<option value=”” disabled selected>Choose Booking . . .</option>--}}
                    {{--@foreach($bookings as $key => $booking)--}}
                        {{--<option value="{{$key}}">{{$booking->booking_code}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                            {{--{{$booking->id}}--}}
                        {{--</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
        {!! Form::model($payment, ['route' => ['admin.payments.update', collect($payment)->first() ], 'method' => 'patch']) !!}

        @include('admin.payments.fields')

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
    <script language="javascript" type="text/javascript" src="{{ asset('assets/vendors/select2/js/select2.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#booking_id').select2();
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#booking_code').select2();
        });
    </script>
@stop