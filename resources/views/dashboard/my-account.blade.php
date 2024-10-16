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
        <div class="sidebar">
        <div class="sidebar-top">
            <a href="/myAccount.html" class="config"
            ><img src="/assets/icons/configIcon.png" /> Configurações</a
            >
            <a href="/myAds.html"
            ><img src="/assets/icons/layersIonGray.png" /> Meus Anúncios</a
            >
        </div>
        <div class="sidebar-bottom">
            <a href="/index.html"
            ><img src="/assets/icons/logoutIcon.png" /> Sair</a
            >
        </div>
        </div>
        <div class="profile-area">
        <h3 class="profile-title">Meu perfil</h3>
        <form>
            <div class="name-area">
            <div class="name-label">Nome</div>
            <input
                type="text"
                placeholder="Digite o seu nome"
                value="Bonieky Lacerda"
            />
            </div>
            <div class="email-area">
            <div class="email-label">E-mail</div>
            <input
                type="email"
                placeholder="Digite o seu e-mail"
                value="suporte@b7web.com"
            />
            </div>
            <div class="password-area">
            <div class="password-label">Senha</div>
            <div class="password-input-area">
                <input
                type="password"
                placeholder="Digite a sua senha"
                value="123456789"
                />
                <img src="/assets/icons/eyeIcon.png" />
            </div>
            </div>
            <div class="state-area">
            <div class="state-label">Estado</div>
            <select class="states">
                <option value="PB">Paraíba</option>
                <option value="PE">Pernambuco</option>
                <option value="RJ" selected>Rio de Janeiro</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="SP">São Paulo</option>
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