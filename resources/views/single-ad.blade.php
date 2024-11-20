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
    <link rel="stylesheet" href="/assets/adPageStyle.css" />
    <title>B7Store</title>
    <script>
      function callme(number) {
        window.location.href = `https://api.whatsapp.com/send?phone=55${number}`;
      }
    </script>
  </head>

  <body>
    <x-base.header />
    <main>
      <div class="ad-area">
        <livewire:gallery :images="$ad->images" />
        <div class="ad-area-right">
          <div class="categories-state">{{ $ad->state->name }} / {{ $ad->category->name }}</div>
          <div class="ad-page-title">{{ $ad->title }}</div>
          <div class="ad-page-date">Publicado em {{ $ad->created_at->format('d/m') }} às {{ $ad->created_at->format('H:i') }}</div>
          <div class="ad-page-price">R$ {{ number_format($ad->price, 2, ',', '.') }}</div>
          @if ($ad->negotiable)
            <div class="contact">
              <img src="/assets/icons/wppIcon.png" />
              <div class="contact-text">Negociável</div>
            </div>
            <div class="negociable">*Esse valor poderá ser negociado.</div>    
          @endif
          <div class="ad-page-text">
            {{ $ad->description }}
          </div>
          <button onclick="callme({{ $ad->contact }})" class="get-touch">Entrar em contato</button>
          <div class="views">
            <img src="/assets/icons/eyeGrayIcon.png" />
            <div class="views-text">{{ $ad->views }} Visualizações neste anúncio</div>
          </div>
        </div>
      </div>
      <div class="ads">
        <div class="ads-title">Anúncios relacionados</div>
        <div class="ads-area">
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca6.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 67 - Equipado</div>
            <div class="ad-price">R$ 33.990,00</div>
          </div>
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca7.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 67 - Extra</div>
            <div class="ad-price">R$ 36.900,00</div>
          </div>
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca8.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 68</div>
            <div class="ad-price">R$ 34.450,00</div>
          </div>
          <div class="ad-item">
            <div
              class="ad-image"
              style="background-image: url('/assets/adFusca/fusca9.png')"
            ></div>
            <div class="ad-title">Volkswagen Fusca 66</div>
            <div class="ad-price">R$ 35.450,00</div>
          </div>
        </div>
      </div>
    </main>
    <x-base.footer />
  </body>
</html>