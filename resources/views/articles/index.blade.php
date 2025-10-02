@extends('layouts.app')
@section('title','Danh sách bài viết')

@section('content')
<h2 class="text-xl mb-4">Danh sách bài viết</h2>

@if(session('success'))
  <x-alert type="success">{{ session('success') }}</x-alert>
@endif

<table class="border-collapse w-full">
  <thead>
    <tr><th>ID</th><th>Tiêu đề</th><th>Hành động</th></tr>
  </thead>
  <tbody>
    @foreach($articles as $a)
      <tr>
        <td>{{ $a->id }}</td>
        <td>{{ $a->title }}</td>
        <td>
          <a href="{{ route('articles.show', $a->id) }}">Xem</a> |
          <a href="{{ route('articles.edit', $a->id) }}">Sửa</a> |
          <form action="{{ route('articles.destroy', $a->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button onclick="return confirm('Xoá?')">Xoá</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
