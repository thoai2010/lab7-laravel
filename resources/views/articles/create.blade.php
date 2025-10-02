@extends('layouts.app')
@section('title', 'Tạo bài viết')

@section('content')
<h2 class="text-xl mb-4">Tạo bài viết mới</h2>

<x-alert type="info">Nhập thông tin bài viết</x-alert>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <x-input label="Tiêu đề" name="title" />
    <div class="mb-3">
        <label>Nội dung</label>
        <textarea name="body" class="border rounded w-full p-2">{{ old('body') }}</textarea>
        @error('body')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Lưu</button>
</form>
@endsection
