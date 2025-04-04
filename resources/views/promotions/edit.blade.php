@extends('layout')
@section('title', 'Edit | ' . config('app.name'))
@section('content')
<div class="w-full md:w-2/3 mx-auto p-5 mt-10 mb-10">
    <h1 class="text-2xl font-bold mb-5">Edit</h1>
    <form action="{{ route('promotions.update', $promotion) }}" method="post">
        @csrf

        <label for="input-title">Title</label>
        <input required id="input-title" type="text" name="title" value="{{ $promotion->title }}" class="border-2 border-gray-300 rounded-lg p-2 mb-4 w-full" placeholder="Title">

        <label for="input-description">Description</label>
        <textarea required id="input-description" type="textarea" name="description" class="border-2 border-gray-300 rounded-lg p-2 mb-4 w-full" placeholder="Description">{{ $promotion->description }}</textarea>

        <label for="input-image">Image URL</label>
        <input required id="input-image" type="url" name="image" value="{{ $promotion->image }}" class="border-2 border-gray-300 rounded-lg p-2 mb-4 w-full" placeholder="Image URL">

        <a class="text-gray-500 hover:text-gray-100" href="{{ route('promotions.show', $promotion) }}">Cancel</a>
        <button class="font-bold float-right text-gray-300 hover:text-gray-100 cursor-pointer" type="submit">Save</button>
    </form>
</div>
@endsection