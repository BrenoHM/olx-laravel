<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&family=Open+Sans:ital@0;1&family=Oswald:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/myAccountStyle.css" />
    <title>B7Store - Minha Conta</title>
  </head>

  <body>
    <x-base.header />
    <main>
    <div class="my-account-page">
        <x-base.sidebar />
        <div class="profile-area">
          <h3 class="profile-title">Meu perfil</h3>
          @session('success')
            <div class="alert alert-success">{{ session('success') }}</div>
          @endsession
          <form method="POST" action="{{ route('action.my_account') }}">
              @csrf
              <div class="name-area">
                <div class="name-label">Nome</div>
                <input
                    type="text"
                    name="name"
                    placeholder="Digite o seu nome"
                    value="{{$user->name}}"
                />
                @error('name')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>
              <div class="email-area">
                <div class="email-label">E-mail</div>
                <input
                    type="email"
                    name="email"
                    placeholder="Digite o seu e-mail"
                    value="{{$user->email}}"
                />
                @error('email')
                  <div class="error">{{ $message }}</div>
                @enderror
              </div>
              <div class="state-area">
                <div class="state-label">Estado</div>
                <select class="states" name="state_id">
                    @foreach ($states as $state)
                      <option value="{{ $state->id }}" @selected($user->state_id == $state->id)>{{ $state->name }}</option>
                    @endforeach
                </select>
              </div>
              <button class="save-button">Salvar</button>
          </form>
        </div>
    </div>
    </main>
    <x-base.footer />
  </body>
</html>