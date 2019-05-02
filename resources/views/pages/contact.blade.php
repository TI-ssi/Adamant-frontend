@extends('base_template')

@section('body')
    <section class="l-vspacing-large">
        <div class="row justify-content-center">
	    <div class="large-8 columns">
		<h1>{{ __('general.menu.contact') }}</h1>

		@if ($errors->any())
		    @component('components.alert', ['alertType' => 'danger'])
			{{ __('general.error.wrong_or_missing_parameters') }}
		    @endcomponent
		@endif

		@if (Session::has('success'))
		    @component('components.alert', ['alertType' => 'success'])
			{{ __('general.success.message_sent') }}
		    @endcomponent
		@endif
		           
		
		<form action="{{ url('contact') }}" method="POST">
		    {{ csrf_field() }}
		    <div class="row">
			<div class="medium-6 columns">
			    <label>Nom</label>
			    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{ old('name') }}">
			</div>
			<div class="medium-6 columns">
			    <label>Courriel</label>
			    <input type="text" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}">
			</div>
		    </div>
		    <div class="row">
			<div class="medium-12 columns">
			    <label>Message</label>
			    <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message">{{ old('message') }}</textarea>
			</div>
		    </div>
		    <div class="d-flex justify-content-end">
			<input type="submit" class="button primary" value="{{ __('general.send') }}">
		    </div>
		</form>
	    </div>
        </div>
    </section>

@endsection
