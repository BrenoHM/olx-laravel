<div class="sidebar">
    <div class="sidebar-top">
        <a href="{{ route('my_account') }}" class="{{ request()->is('dashboard/my-account') ? 'config' : ''}}">
            @if(request()->is('dashboard/my-account')) 
                <img src="/assets/icons/configIcon.png" />
            @else
                <img src="/assets/icons/configIconGray.png" />
            @endif Configurações
        </a>
        <a href="{{ route('my_ads') }}" class="{{ request()->is('dashboard/my-ads') ? 'config' : ''}}">
            @if(request()->is('dashboard/my-ads')) 
                <img src="/assets/icons/layersIcon.png" />
            @else
                <img src="/assets/icons/layersIconGray.png" />
            @endif Meus Anúncios
        </a>
    </div>
    <div class="sidebar-bottom">
        <a href="{{ route('logout') }}"><img src="/assets/icons/logoutIcon.png" /> Sair</a>
    </div>
</div>