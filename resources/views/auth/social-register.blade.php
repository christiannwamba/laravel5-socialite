@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Credentials
                </div>
                <div class="panel-body">
                    @include('common.errors')
                    <form action="/auth/register" method="POST" class="form-horizontal">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$name}}" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" value="{{$email}}" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation" class="col-sm-3 control-label">Confirm Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection