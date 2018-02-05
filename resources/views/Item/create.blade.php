@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-2 margin-tb"></div>
        <div class="col-lg-10 margin-tb">
           <div class="row">
                <div >
                    <h3>Create New Item</h3>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('item.index') }}"> Back</a>
                </div>
           </div>

            <div class="row">
                <div class="col-lg-6 margin-tb">
                    {{Form::open(['action' => 'ItemController@store'])}}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title',  null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('description', 'Description') }}
                        {{ Form::text('description',  null, ['class' => 'form-control']) }}
                    </div>


                    {{ Form::submit('Create the Item!', array('class' => 'btn btn-primary')) }}

                    {{ Form::close() }}
                </div>
                <div class="col-lg-6 margin-tb"></div>
            </div>
        </div>
    </div>



@endsection