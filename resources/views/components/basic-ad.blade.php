<style>
  .my-ad-item {
    position: relative;
  }
  .my-ad-item span.pill {
    padding: 5px 10px;
    border-radius: 5px;
    color: #fff;
    background: teal;
    font-size: 12px;
  }
  .my-ad-item span.my-ad-pill {
    position: absolute;
    top: 5px;
    right: 5px;
  }
</style>

<div class="my-ad-item">
    <div class="ad-image-area">
      @if (!empty($myAds)) <span class="pill my-ad-pill">Meu Anúncio</span> @endif
      @if (!empty($canEdit))
        <div class="ad-buttons">
          <a href="{{ route('ad.delete', $avertise->id) }}" class="ad-button">
            <img src="/assets/icons/deleteIcon.png" />
          </a>
          <div class="ad-button">
            <img src="/assets/icons/editIcon.png" />
          </div>
        </div>
      @endif
      <div
        class="ad-image"
        style="background-image: url('{{$avertise->images[0]->url}}')"
      ></div>
    </div>
    <div class="ad-title">{{$avertise->title}}</div>
    <div class="ad-price">R$ {{number_format($avertise->price, 2, ',', '.')}}</div>
</div>