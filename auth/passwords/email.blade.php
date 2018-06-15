<head>
	<link rel="stylesheet" type="text/css" href="video/main.css">
	<style>
	body {
		/*background-image:url("video/videoframe.jpg") !important;*/
		background-image:url("video/videoframe_new.png") !important;
		background-repeat: no-repeat;
		background-size: cover;   
	}
	
	#transparent {
		position:relative;
		background: rgb(204, 204, 204); /* Fallback for older browsers without RGBA-support */
		background: rgba(204, 204, 204, 0.7);
	}
	#panel-background {
		position:relative;
		background: rgb(204, 204, 204); /* Fallback for older browsers without RGBA-support */
		background: rgba(204, 204, 204, 0.0);
	}
	</style>
</head>


@extends('layouts.app')

@section('content')
<div class="container" style = "width:65%; margin-top:45px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
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
