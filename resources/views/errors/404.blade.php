@extends('base_template', ['slug' => ''])

@section('body')
    <header class="heading landing-status error">
        <div class="row">
            <div class="small-centered large-8 column">
                <h1>{{ __('general.error.sorry') }}</h1>
                <h3>404. Not Found</h3>
                <p>{!! $exception->getMessage() !!}</p>
            </div>
        </div>
    </header>
@endsection
