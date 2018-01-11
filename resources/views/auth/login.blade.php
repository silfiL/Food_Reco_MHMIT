@extends('layouts.app')

@section('content')
<div class="bg" style="height:auto">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 form-center grey-blue">
                <h3 class="text-orange center caps">Login Here</h3>
                <div>
                    <form class="form-horizontal block-center" method="POST" autocomplete="off" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <label for="email" class="text-orange">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">
                                        <span class="fa fa-envelope-o fa-fw"></span>
                                    </span>
                                    <input id="email" type="email" placeholder="Your Email" class="form-control" name="email" aria-describedby="basic-addon1" value="{{ old('email') }}" required autofocus>
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
                                    <span class="input-group-addon" id="basic-addon2">
                                        <span class="fa fa-key fa-fw"></span>
                                    </span>
                                    <input id="password" type="password" placeholder="Your Password" class="form-control" name="password" aria-describedby="basic-addon2" required>                              
                                </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group no-margin">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-form orange text-white">
                                    <span class="fa fa-sign-in"></span>
                                    Login
                                </button>
                            </div>
                            <div class="col-md-12">
                                <a class="btn btn-link text-orange pull-right" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
