@extends('layouts.app')

@section('content')
<div class="bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 form-center grey-blue" id="reset">
                <h3 class="text-orange caps">Reset Your Password</h3>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form autocomplete="off" class="form-horizontal block-center" method="POST" action="{{ route('password.email') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <label for="email" class="text-orange">Write down your email address and we’ll send you a link to reset your password.</label>
                                    <input id="email" type="email" placeholder="Your email adress here.." aria-describedby="basic-addon1" class="form-control" name="email" value="{{ old('email') }}" required>
                                    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-form orange text-white">
                                        <span class="fa fa-send"></span>
                                        Send
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
