@extends('layouts.task-manager')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-header">
                Welcome to Envoy Task Manager
            </div>
            <div class="card-body">
                <form method="POST" action="/auth/login" class="form-horizontal">
                    {{ csrf_field() }}
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
                            <input type="password" name="password" id="password" class="form-control">
                            <small class="form-text text-danger">{{ $errors->default->first('password') }}</small>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                Sign In 
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
          <div class="card-body">
            <p class="card-text">Sign up for an account by clicking button below</p>
            <a href="/auth/register" class="btn btn-primary">Sign Up</a>
          </div>
        </div>

    </div>

@endsection