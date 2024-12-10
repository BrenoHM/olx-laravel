<main>
    <div class="hero-area">
        <div class="search-area-adsList">
        <input
            wire:model.live.debounce.1000ms="textSearch"
            class="search-text"
            type="text"
            placeholder="Estou procurando por..."
        />
        <div class="options-area">
            <div class="categories-area">
            <p>Categoria</p>
            <select wire:model.live="categorySelected" class="categories-options">
                <option selected value="">Todas</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>    
                @endforeach
            </select>
            </div>
            <div class="states-area">
            <p>Estados</p>
            <select wire:model.live="stateSelected" class="states">
                <option selected value="">Todos</option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>
            </div>
            <button class="search-mobile-button">Procurar</button>
        </div>
        </div>
    </div>
    <div class="ads">
        <div class="ads-title">Anúncios recentes</div>
        <div class="ads-area">
            @foreach ($filteredAds as $ad)
                <div class="ad-item">
                    <div
                    class="ad-image"
                    style="background-image: url('{{ $ad->images[0]->url ?? 'https://via.placeholder.com/150' }}')"
                    ></div>
                    <div class="ad-title">{{ $ad->title }}</div>
                    <div class="ad-price">R$ {{ number_format($ad->price, 2, ',', '.') }}</div>
                </div>    
            @endforeach
        </div>
        <div class="mt-4">{{ $filteredAds->links() }}</div>
    </div>
</main>