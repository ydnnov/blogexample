<div class="flex flex-col bg-white rounded-lg overflow-hidden shadow-md shadow-gray-500">
    <div class="relative pt-[66.67%] rounded-t-lg">
        <img
            src="{{ $article->imageUrl }}"
            class="absolute object-cover top-0 left-0 w-full h-full"
            alt="{{ $article->title }}"
        >
    </div>
    <div class="flex flex-col px-4 h-full">
        <div class="flex pt-2">
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
        <h5 class="pt-2">
            {{ $article->title }}
        </h5>
        <p class="mt-2">
            {{ Str::limit($article->content, 100) }}
        </p>
        @if ($article->tags->count())
            <div class="pt-4 flex flex-wrap gap-2">
                @foreach ($article->tags as $tag)
                    <div
                        class="rounded-[100px] bg-gray-300 px-2 py-1 text-[80%] whitespace-nowrap"
                    >{{ $tag->label }}</div>
                @endforeach
            </div>
        @endif
        <div class="flex mt-auto border-black border-[px]">
            <a
                class="ml-auto my-4 text-blue-700 hover:underline"
                href="{{ route('articles.show', $article->slug) }}"
            >Читать дальше</a>
        </div>
    </div>
</div>
