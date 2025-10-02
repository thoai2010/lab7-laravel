@extends('layouts.app')

@section('title', 'Liên hệ')

@section('content')
<h2 class="text-xl font-bold mb-4">Form Liên hệ</h2>

@if(session('success'))
    <x-alert type="success">{{ session('success') }}</x-alert>
@endif

<form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-4 rounded shadow w-1/2">
    @csrf
    <x-input label="Họ tên" name="name" />
    <x-input label="Email" name="email" type="email" />

    <div class="mb-3">
        <label>Nội dung</label>
        <textarea name="message" class="border rounded w-full p-2">{{ old('message') }}</textarea>
        @error('message')
            <div class="text-red-600 text-sm">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Gửi</button>
</form>
@endsection
