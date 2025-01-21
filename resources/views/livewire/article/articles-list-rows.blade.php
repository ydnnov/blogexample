<div class="p-4">
    @if ($isPaginated)
        <div class="mb-4">
            {{ $articles->links() }}
        </div>
    @endif
    <div class="grid grid-cols-1 gap-6">
        @foreach ($articles as $article)
            <livewire:article.article-item
                :article="$article"
                layout="rows"
                :key="'article-item-' . $article->id"
            />
        @endforeach
    </div>
    @if ($isPaginated)
        <div class="mt-6">
            {{ $articles->links() }}
        </div>
    @endif
</div>
