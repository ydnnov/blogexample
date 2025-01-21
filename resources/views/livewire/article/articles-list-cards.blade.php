<div class="grid grid-cols-3 gap-6 p-4">
    @foreach ($articles as $article)
        <livewire:article.article-item :article="$article" layout="cards" />
    @endforeach
</div>
