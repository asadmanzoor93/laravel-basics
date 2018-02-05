

@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-2 margin-tb"></div>
        <div class="col-lg-10 margin-tb">
            <div class="">
                <h2>Items CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('item.create') }}"> Create New Item</a>
            </div>
            <div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <td>ID</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $key => $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->title }}</td>
                            <td>{{ $value->description }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('item.edit',$value->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['item.destroy', $value->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection