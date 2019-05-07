    <header class="header">
      <div class="main-menu top-menu" >
        <div class="flex-row flex-column">
          <div class="d-flex justify-content-lg-around justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                 <span>{{ __('general.title') }}</span>
	        </a>
            <nav role="navigation">
              <ul class="menu l-listing">
                 @include('partials/menu-items')
                 @if(request()->user())
                   <li><a href="/dashboard" role="menuitem" class="button primary">{{ __('general.menu.dashboard')  }}</a></li>
                   <li><a href="/logout" role="menuitem">{{ __('general.logout')  }}</a></li>

                 @else
                   <li><a href="/login" role="menuitem" class="button primary">{{ __('general.login')  }}</a></li>
                 @endif
                 <li><a href="/{{ (app()->getLocale() == 'en' ? 'fr' : 'en' ) }}" role="menuitem" id="lang">{{ __('general.menu.change_lang')  }}</a></li>
              </ul>
            </nav>
	        <button class="menu-toggle align-items-center" data-toggle="menu-mobile" aria-controls="menu-mobile" aria-haspopup="true" tabindex="0">
              <div class="menu-toggle-box">
                <div class="menu-toggle-inner"></div>
              </div>
            </button>
          </div>
        </div>
      </div>
    </header>

    <div class="overlay-menu">
      <nav class="l-valign">
        <ul class="menu">
          @include('partials/menu-items')
          @if(request()->user())
            <li><a href="/dashboard" role="menuitem" class="button primary">{{ __('general.menu.dashboard')  }}</a></li>
            <li><a href="/logout" role="menuitem">{{ __('general.logout')  }}</a></li>
          @else
            <li><a href="/login" role="menuitem" class="button primary">{{ __('general.login')  }}</a></li>
          @endif
          <li><a href="/{{ (app()->getLocale() == 'en' ? 'fr' : 'en' ) }}" role="menuitem" id="lang">{{ __('general.menu.change_lang')  }}</a></li>
        </ul>
      </nav>
    </div>
