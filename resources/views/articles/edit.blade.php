@extends('layouts.app')
@section('title', 'Chỉnh sửa bài viết')

@section('content')
<h2 class="text-xl mb-4">Chỉnh sửa bài viết #{{ $article->id }}</h2>

<x-alert type="warning">Bạn đang chỉnh sửa bài viết</x-alert>

<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
    <x-input label="Tiêu đề" name="title" :value="$article->title" />
    <div class="mb-3">
        <label>Nội dung</label>
        <textarea name="body" class="border rounded w-full p-2">{{ old('body', $article->body) }}</textarea>
        @error('body')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Cập nhật</button>
</form>
@endsection
