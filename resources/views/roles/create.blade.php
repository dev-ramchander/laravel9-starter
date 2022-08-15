@extends('layouts.app')


@section('content')
    @include('layouts.common.jubotron')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create new role</h3>
                            </div>

                        </div>
                    </div>
                    <div class="card-header border-0">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        {!! Form::open(['route' => 'roles.store', 'method' => 'POST']) !!}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                @foreach ($permission as $key => $value)
                                    <div class="custom-control custom-checkbox mb-3 role-permission-dev">
                                        {{ Form::checkbox('permission[]', $value->id, false, ['class' => 'name custom-control-input', 'id' => $key]) }}
                                        <label
                                            class="custom-control-label"for="{{ $key }}">{{ $value->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="com-md-2">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
