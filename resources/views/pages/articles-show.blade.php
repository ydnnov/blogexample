@extends('layouts.app')

@section('content')
    <img
        src="{{ asset($article->imageUrl) }}"
        class="object-cover top-0 left-0 w-full h-[300px]"
        alt="{{ $article->title }}"
    >
    <div class="flex flex-col p-4 h-full">
        <h5 class="">
            {{ $article->title }}
        </h5>
        <div class="flex pt-2 w-[200px]">
            <div class="flex items-center">
                <livewire:article.like-button :article="$article" />
                <div class="ml-1">
                    {{ $article->num_likes }}
                </div>
            </div>
            <div class="flex items-center ml-auto">
                <x-heroicon-o-eye class="size-[24px]" />
                <div class="ml-1">
                    {{ $article->num_views }}
                </div>
            </div>
        </div>
        <p class="my-2">
            {{ $article->content }}
        </p>
    </div>
@endsection
