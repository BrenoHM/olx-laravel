<section class="hero-area">
    <h3 class="subtitle">Aqui você encontra o que tanto procura!</h3>
    <h1 class="title">O que você está procurando?</h1>
    <form class="search-area" action="{{route('ad.list')}}">
      <input
        class="search-text"
        name="s"
        type="text"
        placeholder="Estou procurando por..."
      />
      <select name="c" class="categories-options">
        <option selected hidden disabled value="">Categoria</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
      <select name="st" class="states">
        <option selected hidden disabled value="">Estado</option>
        @foreach ($states as $state)
          <option value="{{ $state->id }}">{{ $state->name }}</option>
        @endforeach
      </select>
      <button type="submit" class="search-button">Procurar</button>
    </form>
</section>