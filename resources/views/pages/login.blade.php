@extends('base_template')

@section('body')
    <section class="l-vspacing-large">
        <div class="row justify-content-center">
	    <div class="large-8 columns">
			<div class="medium-offset-3 medium-6">

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
		<form action="{{ url('login') }}" method="POST">
		    {{ csrf_field() }}
		    <div class="row">
			<div class="medium-offset-3 medium-6 columns">
			    <label>Username</label>
			    <input type="text" class="form-control @if($errors->has('username')) is-invalid @endif" name="username" value="{{ old('username') }}">
			</div>
            </div>
		    <div class="row">
			<div class="medium-offset-3 medium-6 columns">
			    <label>Password</label>
			    <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" name="password" value="">
			</div>
		    </div>
		    <div class="d-flex justify-content-center">
			<input type="submit" class="button primary" value="{{ __('general.login') }}">
			</div>
<div class="d-flex justify-content-center">
			
<a href="{{ url('/register') }}">{{ __('general.register') }}</a>
		    </div>
		</form>
	    </div>
        </div>
    </section>

@endsection
