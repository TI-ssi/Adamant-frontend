<div class="row">
  <b-navbar class="col" toggleable="lg" type="dark" variant="dark">
    <b-navbar-brand href="/">{{ __('general.title') }}</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav class="ml-auto">
         @include('partials/menu-items')

	 @if(request()->user())
	     <b-nav-item-dropdown text="User">	 
                   <b-dropdown-item href="/dashboard" role="menuitem" class="button primary">{{ __('general.menu.dashboard')  }}</b-dropdown-item>
                   <b-dropdown-item href="/logout" role="menuitem">{{ __('general.logout')  }}</b-dropdown-item>
	     </b-nav-item-dropdown>
         @else
             <b-nav-item href="/login" role="menuitem" class="button primary">{{ __('general.login')  }}</b-nav-item>
         @endif


        <b-nav-item-dropdown v-if="bilingual" text="Lang" right>
          <b-dropdown-item href="/en">EN</b-dropdown-item>
          <b-dropdown-item href="/fr">FR</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
