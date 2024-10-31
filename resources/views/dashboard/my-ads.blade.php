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
              <x-basic-ad :avertise="$avertise" :canEdit="true" />
            @endforeach
          </div>
        </div>
      </div>
    </main>
    <x-base.footer />
  </body>
</html>
