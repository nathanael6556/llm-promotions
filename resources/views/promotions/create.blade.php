@extends('layout')
@section('title', 'Create | ' . config('app.name'))
@section('content')
<div class="w-full md:w-2/3 mx-auto p-5 mt-10 mb-10">
    <h1 class="text-2xl font-bold mb-5">Create new LLM</h1>
    <form action="{{ route('promotions.store') }}" method="post">
        @csrf

        <label for="input-title">Title</label>
        <input required id="input-title" type="text" maxlength="255" name="title" value="{{ old('title') }}" class="border-2 border-gray-300 rounded-lg p-2 mb-4 w-full" placeholder="Title">

        <label for="input-description">Description</label>
        <textarea required id="input-description" type="text" name="description" class="border-2 border-gray-300 rounded-lg p-2 mb-4 w-full" placeholder="Description">{{ old('description') }}</textarea>

        <label for="input-image">Image URL</label>
        <input required id="input-image" type="url" maxlength="255" name="image" value="{{ old('image') }}" class="border-2 border-gray-300 rounded-lg p-2 mb-4 w-full" placeholder="Image URL">

        <a class="text-gray-500 hover:text-gray-100" href="{{ route('promotions.index') }}">Cancel</a>
        <button class="font-bold float-right text-gray-300 hover:text-gray-100 cursor-pointer" type="submit">Create</button>
    </form>
</div>
@endsection