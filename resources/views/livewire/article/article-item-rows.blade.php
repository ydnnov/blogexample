<div class="flex bg-white rounded-lg overflow-hidden shadow-md shadow-gray-500">
    <div class="relative rounded-t-lg">
        <img
            src="{{ $article->imageUrl }}"
            class="object-cover top-0 left-0 w-full h-full"
            alt="{{ $article->title }}"
        >
    </div>
    <div class="grow flex flex-col px-4">
        <h5 class="pt-2">
            {{ $article->title }}
        </h5>
        <div class="flex w-[200px] pt-2">
            <div class="flex items-center">
                <x-heroicon-o-eye class="size-[24px]" />
                <div class="ml-1">
                    {{ $article->num_views }}
                </div>
            </div>
            <div class="flex ml-auto items-center">
                <livewire:article.likes-control :article="$article" />
            </div>
        </div>
        <p class="mt-2">
            {{ Str::limit($article->content, 100) }}
        </p>
        <div class="flex mt-auto mb-2">
            @if ($article->tags->count())
                <div class="flex flex-wrap gap-2 mb-2">
                    @foreach ($article->tags as $tag)
                        <div
                            class="rounded-[100px] bg-gray-300 px-2 py-1 text-[80%] whitespace-nowrap"
                        >{{ $tag->label }}</div>
                    @endforeach
                </div>
            @endif
            <div class="flex ml-auto mt-2">
                <a
                    class="text-blue-700 hover:underline"
                    href="{{ route('articles.show', $article->slug) }}"
                >Читать дальше</a>
            </div>
        </div>
    </div>
</div>
