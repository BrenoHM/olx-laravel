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
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />
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
          @if ($relatedAds->count() > 0)
            @foreach ($relatedAds as $ad)
              <a class="ad-item" href="{{ route('ad.show', $ad->slug) }}">
                <div
                  class="ad-image"
                  style="background-image: url('{{ $ad->images[0]->url ?? '' }}')"
                ></div>
                <div class="ad-title">{{ $ad->title }}</div>
                <div class="ad-price">R$ {{ number_format($ad->price, 2, ',', '.') }}</div>
              </a>
              <x-basic-ad :avertise="$ad" :myAds="@isset(auth()->user()->id) && $avertise->user_id == auth()->user()->id" />
            @endforeach
          @else
            <div class="no-ads">Nenhum anúncio relacionado</div>
          @endif
          
        </div>
      </div>
    </main>
    <x-base.footer />
  </body>
</html>
