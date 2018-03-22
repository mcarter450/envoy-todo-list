@extends('layouts.task-manager')

@section('content')

	<div class="container">

        <div class="card">
            <div class="card-header">
                Register
            </div>
            <div class="card-body">
                <form method="POST" action="/auth/register" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Name</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                            <small class="form-text text-danger">{{ $errors->default->first('name') }}</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>

                        <div class="col-sm-6">
                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            <small class="form-text text-danger">{{ $errors->default->first('email') }}</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>

                        <div class="col-sm-6">
                            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                            <small class="form-text text-danger">{{ $errors->default->first('password') }}</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Confirm Password</label>

                        <div class="col-sm-6">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                Sign up 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection