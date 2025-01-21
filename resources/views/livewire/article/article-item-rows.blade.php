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
                <livewire:article.like-button :article="$article" />
                <div class="ml-1">
                    {{ $article->num_likes }}
                </div>
            </div>
        </div>
        <p class="mt-2">
            {{ Str::limit($article->content, 100) }}
        </p>
        <div class="flex mt-auto">
            <a
                class="ml-auto my-4 text-blue-700 hover:underline"
                href="{{ route('articles.show', $article->slug) }}"
            >Читать дальше</a>
        </div>
    </div>
</div>
