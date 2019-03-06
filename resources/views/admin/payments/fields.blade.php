<!-- Booking ID Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('booking_id', 'Booking ID:') !!}--}}
    {{--{!! Form::number('booking_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group col-sm-12">
    <label for="booking_id">Booking ID:</label>
    <select id="booking_id" name="booking_id" class="form-control" width="100%">
        <option value=”” disabled selected>Select Booking . . .</option>
        @foreach($bookings as $key => $booking)
            <option value="{{$booking->id}}">
                {{$booking->booking_code}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$booking->status}}
            </option>
        @endforeach
    </select>
</div>

<!-- Booking Code Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('booking_code', 'Booking Code:') !!}--}}
    {{--{!! Form::number('booking_code', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group col-sm-12">
    <label for="booking_code">Booking Code:</label>
    <select id="booking_code" name="booking_code" class="form-control" width="100%">
        <option value=”” disabled selected>Select Booking . . .</option>
        @foreach($bookings as $key => $booking)
            <option value="{{$booking->booking_code}}">
                {{$booking->booking_code}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$booking->status}}
            </option>
        @endforeach
    </select>
</div>
<!-- Payment Field -->
<div class="form-group col-sm-12">
    {!! Form::label('payment', 'Payment:') !!}
    {!! Form::number('payment', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Date -->
<div class="form-group col-sm-12">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    {!! Form::date('payment_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.payments.index') !!}" class="btn btn-default">Cancel</a>
</div>
