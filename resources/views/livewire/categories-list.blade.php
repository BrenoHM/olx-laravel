<div class="categories-area">
    <div class="title">Categorias</div>
    <div class="buttons">
      @foreach ($categories as $category)
        <a href="{{route('ad.category', $category->slug)}}" class="category_button decoration-none" >
          <img src="assets/icons/{{$category->icon}}" alt="Ícone {{$category->name}}" />
          {{$category->name}}
        </a>
      @endforeach
    </div>
</div>