@extends('layouts.app')

@push('scripts')
    <script>
        setTimeout(() => {
            client.article.incrementViews(@js($article->id));
        }, 5000);
    </script>
@endpush

@section('content')
    <img
        src="{{ asset($article->imageUrl) }}"
        class="object-cover top-0 left-0 w-full h-[300px]"
        alt="{{ $article->title }}"
    >
    <div class="flex flex-col p-4 h-full">
        <h1 class="">
            {{ $article->title }}
        </h1>
        <div class="flex pt-2 w-[200px]">
            <div class="flex items-center">
                <livewire:article.likes-control :article="$article" />
            </div>
            <div class="flex items-center ml-auto">
                <x-heroicon-o-eye class="size-[24px]" />
                <div class="ml-1">
                    {{ $article->num_views }}
                </div>
            </div>
        </div>
        @if ($article->tags->count())
            <div class="flex flex-wrap gap-2 my-4">
                @foreach ($article->tags as $tag)
                    <div
                        class="rounded-[100px] bg-gray-300 px-2 py-1 text-[80%] whitespace-nowrap"
                    >{{ $tag->label }}</div>
                @endforeach
            </div>
        @endif
        <p class="my-2">
            {{ $article->content }}
        </p>
    </div>
@endsection
