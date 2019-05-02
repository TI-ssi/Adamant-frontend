@extends('mail_template')

@section('body')
    <section class="l-content">
      <div class="row">
        <div class="large-6 columns l-side-space border">
          <h1>{{ $request->name }}</h1>
          <span><a href="mailto:{{ $request->email }}">{{ $request->email }}</a></span>
        </div>

        <div class="large-12 columns l-side-space border mt-3">
          {{ $request->message }}
        </div>
      </div>
    </section>
@endsection
    
