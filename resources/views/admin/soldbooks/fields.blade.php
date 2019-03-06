<!-- Profit Field -->
<div class="form-group col-sm-12">
    {!! Form::label('profit', 'Profit:') !!}
    {!! Form::number('profit', null, ['class' => 'form-control']) !!}
</div>

{{--<!-- Buying Id Field -->--}}
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('user_id', 'User Id:') !!}--}}
    {{--{!! Form::select('user_id', ['' => ''], null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group col-sm-12">
    <label for="seller_id">Seller Name:</label>
    <select id="seller_id" name="seller_id" class="form-control" width="100%">
        <option value=”” disabled selected>Select Seller . . .</option>
        @foreach($users as $key => $user)
            <option value="{{$user->id}}">
                {{$user->first_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$user->last_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$user->cell_no}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{--{{ $user->id }}--}}
            </option>
        @endforeach
    </select>
</div>

{{--<!-- Seller Id Field -->--}}
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('seller_id', 'Seller Id:') !!}--}}
    {{--{!! Form::number('seller_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Seller Id Field -->
{{--<div class="form-group col-sm-12">--}}
{{--{!! Form::label('user_id', 'User Id:') !!}--}}
{{--{!! Form::select('user_id', ['' => ''], null, ['class' => 'form-control']) !!}--}}
{{--{!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['class' => 'form-control'])) !!}--}}
{{--{!! Form::select('user_id', $users->lists('name', 'id'), null, ['optional' => 'Select a user...']) !!}--}}
{{--</div>--}}

<!-- Buyer Id Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('buyer_id', 'Buyer Id:') !!}--}}
    {{--{!! Form::number('buyer_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group col-sm-12">
    <label for="buyer_id">Buyer Name:</label>
    <select id="buyer_id" name="buyer_id" class="form-control" width="100%">
        <option value=”” disabled selected>Select Buyer . . .</option>
        @foreach($users as $key => $user)
            <option value="{{$user->id}}">
                {{$user->first_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$user->last_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$user->cell_no}}
                {{--{{ $user->id }}--}}
            </option>
        @endforeach
    </select>
</div>

{{--<!-- Buying Id Field -->--}}
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('buying_id', 'Buying Id:') !!}--}}
    {{--{!! Form::select('buying_id', ['' => ''], null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Bookings Id Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('bookings_id', 'Bookings Id:') !!}--}}
    {{--{!! Form::number('bookings_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group col-sm-12">
    <label for="bookings_id">Booking Code:</label>
    <select id="bookings_id" name="bookings_id" class="form-control" width="100%">
        <option value=”” disabled selected>Select Booking . . .</option>
        @foreach($bookings as $key => $booking)
            <option value="{{$booking->id}}">
                {{$booking->booking_code}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$booking->status}}
            </option>
        @endforeach
    </select>
</div>

<!-- Form No Field -->
<div class="form-group col-sm-12">
    {!! Form::label('form_No', 'Form No:') !!}
    {!! Form::number('form_No', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.soldbooks.index') !!}" class="btn btn-default">Cancel</a>
</div>
