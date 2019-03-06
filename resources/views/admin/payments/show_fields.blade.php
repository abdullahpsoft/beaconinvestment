<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $payment->id !!}</p>
    <hr>
</div>

<!-- Booking ID Field -->
<div class="form-group">
    {!! Form::label('booking_id', 'Booking ID:') !!}
    <p>{!! $payment->booking_id !!}</p>
    <hr>
</div>

<!-- Booking Code Field -->
<div class="form-group">
    {!! Form::label('booking_code', 'Booking Code:') !!}
    <p>{!! $payment->booking_code !!}</p>
    <hr>
</div>

<!-- Payment Field -->
<div class="form-group">
    {!! Form::label('payment', 'Payment:') !!}
    <p>{!! $payment->payment !!}</p>
    <hr>
</div>

<!-- Payment Date -->
<div class="form-group">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    <p>{!! $payment->created_at !!}</p>
    <hr>
</div>

