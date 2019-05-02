<li><a href="/" @if ($slug == 'index') class="active" @endif role="menuitem">{{ __('general.menu.home') }}</a></li>
<li><a href="/contact" @if ($slug == 'contact') class="active" @endif role="menuitem">{{ __('general.menu.contact') }}</a></li>
@if(request()->user())
   @if(request()->user()->get('roles')->contains('name', 'admin'))
      <li><a href="{{ url('admin') }}">Admin</a></li>
   @endif               
@endif

