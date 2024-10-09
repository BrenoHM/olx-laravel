<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>B7Store - Selecione seu estado</title>
  </head>

  <body>
    <a href="{{ route('login') }}" class="back-button">← Voltar</a>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <form method="POST" action="{{ route('state_action') }}">
          @csrf
          <div class="name-area">
            <div class="name-label">Selecione o seu estado</div>
            {{-- <input type="text" name="name" placeholder="Digite o seu nome" @error('name') class="is-invalid" @enderror /> --}}
            <select name="state" id="state" @error('state') class="is-invalid" @enderror>
              @foreach ($states => $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
              @endforeach
            </select>
            @error('state')
              <div class="error">{{ $message }}</div>
            @enderror
          </div>
          <button class="login-button">Selecionar</button>
        </form>
        {{-- <div class="register-area">
          Já tem cadastro? <a href="{{ route('login') }}">Fazer Login</a>
        </div> --}}
      </div>
      {{-- <div class="terms">
        Ao continuar, você concorda com os <a href="">Termos de Uso</a> e a
        <a href="">Política de Privacidade</a>, e também, em receber
        comunicações via e-mail e push de todos os nossos parceiros.
      </div> --}}
    </div>
    <x-base.footer />
  </body>
</html>
