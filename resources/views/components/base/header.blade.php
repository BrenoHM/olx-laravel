<header>
    <div class="header-area">
      <a href="{{ route('home') }}" class="header-area-left">B7Store</a>
      <div class="header-area-right">
        @auth
          <a href="{{ route('my_account') }}" class="my-account">
            <img src="/assets/icons/userIcon.png" />
            Minha Conta
          </a>
        @endauth
        @guest
          <a href="{{ route('login') }}" class="my-account">
            <img src="/assets/icons/userIcon.png" />
            Login
          </a>
        @endguest
        <a href="{{ route('ad.create') }}" class="announce-now">Anunciar agora →</a>
        <img class="menu-icon" src="assets/icons/menuIcon.png" alt="Menu" />
        <div class="menu-mobile">
          <a href="myAccount.html" class="my-account-mobile">
            <img src="/assets/icons/userIcon.png" alt="Ícone do usuário" />
            Minha Conta
          </a>
          <a class="my-account-mobile" href="/index.html"
            ><img src="/assets/icons/logoutIcon.png" /> Sair</a
          >
        </div>
      </div>
    </div>
</header>