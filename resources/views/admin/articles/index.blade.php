@extends('layouts.admin')

@section('admin-content')
<h2 class="text-xl font-bold mb-3">Danh sách bài viết (Admin)</h2>

<table class="table-auto w-full border">
    <thead class="bg-gray-300">
        <tr>
            <th class="px-2">ID</th>
            <th class="px-2">Tiêu đề</th>
            <th class="px-2">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $a)
        <tr>
            <td class="border px-2">{{ $a->id }}</td>
            <td class="border px-2">{{ $a->title }}</td>
            <td class="border px-2">
                <a href="{{ route('articles.edit', $a->id) }}" class="text-blue-600">Sửa</a> |
                <form action="{{ route('articles.destroy', $a->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Xoá?')" class="text-red-600">Xoá</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
