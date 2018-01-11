@extends('layouts.app')

@section('content')
<div class="bg" id="logout">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 form-center grey-blue">
                <div class="col-md-12">
                    <p class="text-orange">Thank you for using our application. You have successfully logged out.</p>        
                    <div class="col-md-6 col-md-offset-3">
                        <a href="{{ route('homepage') }}" class="btn btn-form orange text-white">
                            <span class="fa fa-home fa-fw"></span>
                            Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
