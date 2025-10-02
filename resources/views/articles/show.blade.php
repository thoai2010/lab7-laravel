@extends('layouts.app')
@section('title', 'Chi tiết bài viết')

@section('content')
<h2>Chi tiết bài viết #{{ $article->id }}</h2>
<p><strong>Tiêu đề:</strong> {{ $article->title }}</p>
<p><strong>Nội dung:</strong> {{ $article->body }}</p>
<a href="{{ route('articles.index') }}">Quay lại danh sách</a>
@endsection