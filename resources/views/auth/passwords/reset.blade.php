@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 form-center grey-blue" id="reset">
                <h3 class="text-orange caps">New Password</h3>
                    <form autocomplete="off" class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="email" class="text-orange">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-envelope-o fa-fw"></span>
                                    </span>
                                    <input id="email" type="email" placeholder="Your email" class="form-control" aria-describedby="basic-addon1" name="email" value="{{ $email or old('email') }}" required autofocus>
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
                                <label for="password" class="text-orange">New Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2">
                                        <span class="fa fa-key fa-fw"></span>
                                    </span>
                                    <input id="password" type="password" placeholder="Your new password" class="form-control" aria-describedby="basic-addon2" name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="password-confirm" class="text-orange">Confirm New Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon3">
                                        <span class="fa fa-key fa-fw"></span>
                                    </span>
                                    <input aria-describedby="basic-addon3" placeholder="Confirm your new password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group no-margin">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-form orange text-white">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
