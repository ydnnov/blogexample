@extends('layouts.app')

@section('content')
    <div class="flex bg-gray-300 h-[200px] justify-center items-center">
        <div class="text-[50px] text-gray-400 font-mono">
            &lt;Слайдер на главной&gt;
        </div>
    </div>
    <div class="py-4">
        <div class="w-[800px] justify-self-center">
            <livewire:article.articles-list :count="6" layout="cards" />
        </div>
    </div>
@endsection
