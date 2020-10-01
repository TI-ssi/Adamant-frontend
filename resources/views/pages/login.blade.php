@extends('base_template')

@section('body')
        <div class="row my-5">
	    <div class="col-12">
	    <div class="row">
			<div class="col-12 offset-lg-4 col-lg-4">

    @if ( $errors->any() )
		    @component('components.alert', ['alertType' => 'danger'])
			{{ __('general.error.wrong_or_missing_parameters') }}
		    @endcomponent
		@endif

        @if ( $login_error )
		    @component('components.alert', ['alertType' => 'danger'])
			{{ __('general.error.'.$login_error) }}
		    @endcomponent
		@endif

		@if ( Session::has('success'))
		    @component('components.alert', ['alertType' => 'success'])
			{{ __('general.success.register') }}
		    @endcomponent
		@endif
		           
</div>
</div>
		<form action="{{ url('login') }}" method="POST">
		    {{ csrf_field() }}
		    <div class="row">
			<div class="col-12 offset-lg-4 col-lg-4">
			    <label>Username</label>
			    <input type="text" class="form-control @if($errors->has('username')) is-invalid @endif" name="username" value="{{ old('username') }}">
			</div>
            </div>
		    <div class="row">
			<div class="col-12 col-lg-4 offset-lg-4">
			    <label>Password</label>
			    <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" name="password" value="">
			</div>
		    </div>
		    <div class="row">
			<div class="col-12 col-lg-4 offset-lg-4 text-center mt-3">
			<input type="submit" class="btn btn-primary" value="{{ __('general.login') }}">
			</div>
			</div>
		    <div class="row">
			<div class="col-12 col-lg-4 offset-lg-4 text-center mt-3">
<a href="{{ url('/register') }}">{{ __('general.register') }}</a>
			</div>
			</div>
		</form>
	    </div>
        </div>

@endsection
