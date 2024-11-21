<div class="ad-area-left">
    <div
      class="main-photo"
      style="background-image: url('{{ $featuredUrl }}')"
    ></div>
    <div class="secundary-photos">
      @foreach ($images as $image)
      <div
        wire:click="changeFeatured('{{ $image->url }}')"
        class="secundary-image"
        style="background-image: url('{{ $image->url }}'); opacity: {{ $featuredUrl == $image->url ? '1' : '0.5' }}"
      ></div>
      @endforeach
    </div>
  </div>
