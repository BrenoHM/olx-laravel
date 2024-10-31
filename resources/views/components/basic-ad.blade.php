<div class="my-ad-item">
    <div class="ad-image-area">
      @if (!empty($canEdit))
        <div class="ad-buttons">
          <div class="ad-button">
            <img src="/assets/icons/deleteIcon.png" />
          </div>
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