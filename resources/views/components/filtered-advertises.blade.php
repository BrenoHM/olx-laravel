<div class="categories-area">
    <div class="title">Categorias</div>
    <div class="buttons">
      @foreach ($categories as $category)
        <a href="{{route('ad.category', $category->slug)}}" class="category_button decoration-none" >
          <img src="assets/icons/{{$category->icon}}" alt="Ícone {{$category->name}}" />
          {{$category->name}}
        </a>
      @endforeach
      
      {{-- <button class="eletronics">
        <img
          src="assets/icons/eletronicsIcon.png"
          alt="Ícone Eletrônicos"
        />
        Eletrônicos
      </button>
      <button class="clothes">
        <img src="assets/icons/clothesIcon.png" alt="Ícone Roupas" />
        Roupas
      </button>
      <button class="sports">
        <img src="assets/icons/sportsIcon.png" alt="Ícone Esportes" />
        Esportes
      </button>
      <button class="babies">
        <img src="assets/icons/babiesIcon.png" alt="Ícone Bebês" />
        Bebês
      </button> --}}
    </div>
  </div>
  <div class="ads">
    <div class="ads-title">Anúncios recentes</div>
    <div class="ads-area">
      @foreach ($advertiseList as $avertise)
        <x-basic-ad :avertise="$avertise" :myAds="@isset(auth()->user()->id) && $avertise->user_id == auth()->user()->id" />
      @endforeach
    </div>
  </div>