@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-2 margin-tb"></div>
        <div class="col-lg-10 margin-tb">
            <div class="row">
                <div >
                    <h3>Edit Item Record</h3>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
                </div>
            </div>

            <div class="row">

                {!! Form::model($item, ['method' => 'PATCH','route' => ['item.update', $item->id]]) !!}
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Title:</strong>
                            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
                {!! Form::close() !!}


                {{--<div class="col-lg-6 margin-tb">--}}
                    {{--{{Form::open(['action' => 'ItemController@update'])}}--}}
                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('title', 'Title') }}--}}
                        {{--{{ Form::text('title',  null, ['class' => 'form-control']) }}--}}
                    {{--</div>--}}

                    {{--<div class="form-group">--}}
                        {{--{{ Form::label('description', 'Description') }}--}}
                        {{--{{ Form::text('description',  null, ['class' => 'form-control']) }}--}}
                        {{--{{ Form::hidden('invisible', 'secret') }}--}}
                    {{--</div>--}}


                    {{--{{ Form::submit('Create the Item!', array('class' => 'btn btn-primary')) }}--}}

                    {{--{{ Form::close() }}--}}
                {{--</div>--}}
                {{--<div class="col-lg-6 margin-tb"></div>--}}
            </div>
        </div>
    </div>


@endsection