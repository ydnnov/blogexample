@pushonce('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('articleComponent', (numLikes, isLiked) => ({
                numLikes,
                isLiked,
                async incrementLikes(articleId) {
                    if (this.isLiked) {
                        return;
                    }
                    await client.article.incrementLikes(articleId);
                    this.numLikes++;
                    this.isLiked = true;
                },
            }));
        });
    </script>
@endpushonce

<div
    x-data="articleComponent(@js($article->num_likes), false)"
    class="flex"
>
    <div
        class="cursor-pointer group relative"
        @click="incrementLikes(@js($article->id))"
    >
        <x-heroicon-s-heart
            class="size-[24px] transition-opacity duration-300 opacity-0 group-hover:opacity-100 absolute top-0"
            ::class="{ 'opacity-100': isLiked, 'opacity-0 group-hover:opacity-100': !isLiked }"
        />
        <x-heroicon-o-heart
            class="size-[24px] transition-opacity duration-300 group-hover:opacity-0"
            ::class="{ 'opacity-0': isLiked, 'group-hover:opacity-0': !isLiked }"
        />
    </div>
    <div class="ml-1 select-none" x-text="numLikes">
        {{ $article->num_likes }}
    </div>
</div>
