@extends('layouts.app')

@section('title', 'Giới thiệu khóa học')

@section('content')
<h2 class="text-xl font-bold mb-4">Giới thiệu khóa học</h2>

<div class="bg-white shadow rounded p-4">
    <p><strong>Tên học phần:</strong> {{ $course['name'] }}</p>
    <p><strong>Giảng viên:</strong> {{ $course['teacher'] }}</p>
    <p><strong>Mô tả:</strong> {{ $course['description'] }}</p>
</div>
@endsection
