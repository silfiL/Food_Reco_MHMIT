@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 form-center grey-blue">
                <h3 class="text-orange center caps">Register Now</h3>
                    <div>
                        <form class="form-horizontal block-center" autocomplete="off" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="name" class="text-orange">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">
                                            <span class="fa fa-user-o fa-fw"></span>
                                        </span>
                                        <input id="name" type="text" placeholder="Your name" class="form-control" aria-describedby="basic-addon1" name="name" value="{{ old('name') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="email" class="text-orange">E-mail Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon2">
                                            <span class="fa fa-envelope-o fa-fw"></span>
                                        </span>
                                      <input id="email" type="email" class="form-control" placeholder="Your email address" aria-describedby="basic-addon2" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="password" class="text-orange">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon3">
                                            <span class="fa fa-key fa-fw"></span>
                                        </span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Your password" aria-describedby="basic-addon3" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="password-confirm" class="text-orange">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon4">
                                            <span class="fa fa-key fa-fw"></span>
                                        </span>
                                        <input id="password-confirm" type="password" class="form-control" placeholder="Confirm your password" aria-describedby="basic-addon4" name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group no-margin">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-form orange text-white">
                                    Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
