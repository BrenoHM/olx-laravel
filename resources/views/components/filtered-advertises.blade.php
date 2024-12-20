<div class="ads">
  <div class="ads-title">Anúncios recentes</div>
  <div class="ads-area">
    @foreach ($advertiseList as $avertise)
      <x-basic-ad :avertise="$avertise" :myAds="@isset(auth()->user()->id) && $avertise->user_id == auth()->user()->id" />
    @endforeach
  </div>
</div>