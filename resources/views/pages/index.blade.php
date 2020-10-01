@extends('base_template')

@section('body')
        <div class="row mt-4">
	    <div class="col centered text-justify">
		<h3 class="text-center font-weight-bold">{!! __('general.home.welcome') !!}</h3>
	    </div>
        </div>	    
        <div class="row mt-4 bg-light">
	       <div class="col text-justify p-3 m-1">
	           <div class="text-center"><h3>{{ __('general.home.hello_world') }}</h3></div>
		   <hr>
		   {!!  __('general.home.hello_world_post') !!}
		   <div>This line come from the api (if it work): {{ print_r($test_api) }}</div>	   
		   <div class="text-right">Adamant's Team</div>
           	   <div class="text-right"><small>{{ Carbon\Carbon::now()->format('d-m-Y H:i:s') }}</small></div>
	       </div>
        </div>	    
	<div class="m-2">&nbsp;</div>

@endsection
