<b-nav-item href="/" @if ($slug == 'index') active @endif >{{ __('general.menu.home') }}</b-nav-item>
<b-nav-item href="/contact" @if ($slug == 'contact') active @endif >{{ __('general.menu.contact') }}</b-nav-item>
@if(request()->user())
   @if(request()->user()->get('roles')->contains('name', 'admin'))
      <b-nav-item href="{{ url('admin') }}">Admin</b-nav-item>
   @endif               
@endif

