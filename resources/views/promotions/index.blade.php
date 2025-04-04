@extends('layout')
@section('title', config('app.name'))
@section('content')
<div class="w-full md:w-2/3 mx-auto p-5 mt-10 mb-10">
    <h1 class="text-3xl font-bold pb-5">Large Language Models</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($promotions as $promotion)
        <a href="{{ route('promotions.show', $promotion) }}" class="shadow-2xl p-3 rounded-xl bg-gray-800 height-full">
            <img src="{{ $promotion->image }}" class="object-cover rounded-xl mb-3" width="100%" alt="{{ $promotion->title }}">
            <h2 class="text-lg font-bold">{{ $promotion->title }}</h2>
            <p class="text-gray-200">{{ $promotion->description }}</p>
        </a>
        @endforeach
    </div>
    <a href={{ route('promotions.create') }} class="fixed right-5 bottom-5 text-2xl text-gray-500 hover:text-gray-100 font-bold">+ Create</a>
</div>
@endsection