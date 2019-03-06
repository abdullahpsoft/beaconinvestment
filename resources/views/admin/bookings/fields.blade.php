<!-- User Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Booking Code Field -->
<div class="form-group col-sm-12">
    {!! Form::label('booking_code', 'Booking Code:') !!}
    {!! Form::text('booking_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Form No Field -->
<div class="form-group col-sm-12">
    {!! Form::label('form_no', 'Form No:') !!}
    {!! Form::text('form_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Block Field -->
<div class="form-group col-sm-12">
    {!! Form::label('block', 'Block:') !!}
    {!! Form::text('block', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('total_price', 'Total Price:') !!}
    {!! Form::number('total_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-12">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::text('size', null, ['class' => 'form-control']) !!}
</div>

<!-- Booking Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('booking_date', 'Booking Date:') !!}
    {!! Form::date('booking_date', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Date Plan Field -->--}}
<div class="form-group col-sm-12">
    {!! Form::label('date_plan', 'Date Plan:') !!}
    {{--{!! Form::number('seller_id', null, ['class' => 'form-control']) !!}--}}
    {!! Form::select('date_plan', ['0' => '1st of each month', '1' => 'Custom Date'], null, ['class' => 'form-control']) !!}
</div>

<!-- Total Installments Field -->
<div class="form-group col-sm-12">
    {!! Form::label('total_installments', 'Total Installments:') !!}
    {!! Form::number('total_installments', null, ['class' => 'form-control']) !!}
</div>

<!-- Installment Amount Field -->
<div class="form-group col-sm-12">
    {!! Form::label('installment_amount', 'Installment Amount:') !!}
    {!! Form::number('installment_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Society Field -->
<div class="form-group col-sm-12">
    {!! Form::label('society', 'Society:') !!}
    {!! Form::text('society', null, ['class' => 'form-control']) !!}
</div>

<!-- Confirmation After Field -->
<div class="form-group col-sm-12">
    {!! Form::label('confirmation_after', 'Confirmation After:') !!}
    {!! Form::number('confirmation_after', null, ['class' => 'form-control']) !!}
</div>

<!-- Booking Status Field -->
<div class="form-group col-sm-12">
{!! Form::label('status', 'Booking Status:') !!}
{{--{!! Form::number('seller_id', null, ['class' => 'form-control']) !!}--}}
{!! Form::select('status', ['1' => 'Active', '0' => 'Sold'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
