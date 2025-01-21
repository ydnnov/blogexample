<div class="grid grid-cols-1 gap-6 p-4">
    @foreach ($articles as $article)
        <livewire:article.article-item :article="$article" layout="rows" />
    @endforeach
</div>
