<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/style.css" />
    <link rel="stylesheet" href="/assets/myAccountStyle.css" />
    <link rel="stylesheet" href="/assets/myAdsStyle.css" />

    <title>B7Store - Meus anúncios</title>
  </head>

  <body>
    <x-base.header />
    <main>
      <div class="my-ads-page">
        <x-base.sidebar />
        <div class="myAds-area">
          <h3 class="myAds-title">Meus Anúncios</h3>
          <div class="myAds-ads-area">
            @foreach ($user->advertises as $avertise)
              <div class="my-ad-item">
                <div class="ad-image-area">
                  <div class="ad-buttons">
                    <div class="ad-button">
                      <img src="/assets/icons/deleteIcon.png" />
                    </div>
                    <div class="ad-button">
                      <img src="/assets/icons/editIcon.png" />
                    </div>
                  </div>
                  <div
                    class="ad-image"
                    style="background-image: url('{{$avertise->images[0]->url}}')"
                  ></div>
                </div>
                <div class="ad-title">{{$avertise->title}}</div>
                <div class="ad-price">R$ {{number_format($avertise->price, 2, ',', '.')}}</div>
              </div>
            @endforeach
            <div class="my-ad-item">
              <div class="ad-image-area">
                <div class="ad-buttons">
                  <div class="ad-button">
                    <img src="/assets/icons/deleteIcon.png" />
                  </div>
                  <div class="ad-button">
                    <img src="/assets/icons/editIcon.png" />
                  </div>
                </div>
                <div
                  class="ad-image"
                  style="background-image: url('/assets/myAds/game2.png')"
                ></div>
              </div>
              <div class="ad-title">Controle Xbox One S - Branco</div>
              <div class="ad-price">R$ 275,00</div>
            </div>
            <div class="my-ad-item">
              <div class="ad-image-area">
                <div class="ad-buttons">
                  <div class="ad-button">
                    <img src="/assets/icons/deleteIcon.png" />
                  </div>
                  <div class="ad-button">
                    <img src="/assets/icons/editIcon.png" />
                  </div>
                </div>
                <div
                  class="ad-image"
                  style="background-image: url('/assets/myAds/game3.png')"
                ></div>
              </div>
              <div class="ad-title">PlayStation 5 - Digital Edition</div>
              <div class="ad-price">R$ 4.898,96</div>
            </div>
            <div class="my-ad-item">
              <div class="ad-image-area">
                <div class="ad-buttons">
                  <div class="ad-button">
                    <img src="/assets/icons/deleteIcon.png" />
                  </div>
                  <div class="ad-button">
                    <img src="/assets/icons/editIcon.png" />
                  </div>
                </div>
                <div
                  class="ad-image"
                  style="background-image: url('/assets/myAds/game4.png')"
                ></div>
              </div>
              <div class="ad-title">Controle PS5 - Azul</div>
              <div class="ad-price">R$ 575,00</div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <x-base.footer />
  </body>
</html>
