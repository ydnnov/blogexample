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
                <livewire:article.like-button :article="$article" />
                <div class="ml-1">
                    {{ $article->num_likes }}
                </div>
            </div>
        </div>
        <h5 class="pt-2">
            {{ $article->title }}
        </h5>
        <p class="mt-2">
            {{ Str::limit($article->content, 100) }}
        </p>
        <div class="flex mt-auto border-black border-[px]">
            <a
                class="ml-auto my-4 text-blue-700 hover:underline"
                href="{{ route('articles.show', $article->slug) }}"
            >Читать дальше</a>
        </div>
    </div>
</div>
