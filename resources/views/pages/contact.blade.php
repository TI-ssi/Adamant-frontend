@extends('base_template')

@section('body')
        <div class="row my-5">
	    <div class="col-12 col-lg-8 offset-lg-2">
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
			<div class="col-12 col-lg-6">
			    <label>Nom</label>
			    <input type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{ old('name') }}">
			</div>
			<div class="col-12 col-lg-6">
			    <label>Courriel</label>
			    <input type="text" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}">
			</div>
		    </div>
		    <div class="row">
			<div class="col-12">
			    <label>Message</label>
			    <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message">{{ old('message') }}</textarea>
			</div>
		    </div>
		    <div class="row mt-3">
		    	 <div class="col-12 text-right">
				<input type="submit" class="btn btn-primary" value="{{ __('general.send') }}">
			</div>
		    </div>
		</form>
	    </div>
        </div>

@endsection
