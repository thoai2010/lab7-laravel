@extends('layouts.app')

@section('title', 'Admin - Quản trị hệ thống')

@section('content')
<div class="bg-gray-100 p-4 rounded">
    <h1 class="text-2xl font-bold mb-4">Khu vực Quản trị</h1>
    @yield('admin-content')
</div>
@endsection
