@extends('layouts.app')

@section('content')
    <h1 class="ml-4 mt-4">Статьи</h1>
    <div class="w-full mb-4 justify-self-center">
        <livewire:article.articles-list
            :count="10"
            layout="rows"
            :is-paginated="true"
        />
    </div>
@endsection
