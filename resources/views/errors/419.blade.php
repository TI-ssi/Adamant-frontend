@extends('base_template', ['slug' => ''])

@section('body')
    <header class="heading landing-status">
        <div class="row">
            <div class="small-centered large-8 column">
                <svg class="icon icon-error">
                    <use xlink:href="#icon-error" />
                </svg>
                <h1>{!! __('general.error.expired_csrf') !!}</h1>
                <p>{!! __('general.error.try_again') !!}</p>
            </div>
        </div>
    </header>
@endsection
