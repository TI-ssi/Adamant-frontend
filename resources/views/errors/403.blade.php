@extends('base_template', ['slug' => ''])

@section('body')
    <header class="heading landing-status">
        <div class="row">
            <div class="small-centered large-8 column">
                <h1>{{ __('general.error.sorry') }}</h1>
                <p>{{ $exception->getMessage() }}</p>
            </div>
        </div>
    </header>
@endsection
