<div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
</div>    
<nav class="navbar navbar-expand-md {{ \Cookie::get('modeType')=='dark-mode'? 'navbar-dark bg-dark':'navbar-light bg-light'}} fixed-top">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">{{ __('app.HOME') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('history') }}">{{ __('app.HISTORY') }}</a>
                </li>
            </ul>
        </div>
        <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="{{ url('/') }}">{{ config('app.name') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="javascript:void" onclick="$('#logout-form').submit();">
                            {{ __('app.LOGOUT') }}
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>