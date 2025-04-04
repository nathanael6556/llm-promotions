@extends('layout')
@section('title', $promotion->title . ' | ' . config('app.name'))
@section('content')
<div class="w-full md:w-2/3 mx-auto p-5 mt-10 mb-10">
    <a class="text-gray-500 hover:text-gray-200" href="{{ route('promotions.index') }}">Back</a>
    <div class="rounded-xl mb-3 overflow-hidden max-h-[300px] mt-3">
        <img src="{{ $promotion->image }}" class="object-cover w-full" alt="{{ $promotion->title }}">
    </div>
    <h2 class="text-2xl font-bold">{{ $promotion->title }}</h2>
    <p class="text-gray-200 whitespace-pre-wrap mb-3">{{ $promotion->description }}</p>
    <a class="text-gray-500 hover:text-gray-200" href="{{ route('promotions.edit', $promotion) }}">Edit</a>
</div>
@endsection