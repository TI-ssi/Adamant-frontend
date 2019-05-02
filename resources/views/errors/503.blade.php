@extends('base_template', ['slug' => ''])

@section('body')
    <header class="heading landing-status error">
        <div class="row">
            <div class="small-centered large-8 column">
                <h1>{{ $exception->getMessage() }}</h1>
            </div>
        </div>
    </header>
@endsection

