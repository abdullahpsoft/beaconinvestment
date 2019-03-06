<!-- Cell No Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('cell_no', 'Cell No:') !!}--}}
    {{--{!! Form::number('cell_no', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}
<div class="form-group col-sm-12">
    <label for="cell_no">Cell No:</label>
    <select id="cell_no" name="cell_no" class="form-control" width="100%">
        <option value=”” disabled selected>Select Cell No . . .</option>
        @foreach($users as $key => $user)
            <option value="{{$user->cell_no}}">
                {{$user->first_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{$user->last_name}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
{{--                {{$user->cell_no}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--}}
                {{--{{ $user->id }}--}}
            </option>
        @endforeach
    </select>
</div>

<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Send SMS', ['class' => 'btn btn-primary']) !!}
    {{--<a href="{!! route('admin.sms.index') !!}" class="btn btn-default">Cancel</a>--}}
</div>
