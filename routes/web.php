<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

/*
 | Advanced routes (ví dụ trong lab)
*/

// 1. Route có tham số động (number) và named route
Route::get('/articles/page/{page}', function ($page) {
    return "Trang bài viết số: " . (int)$page;
})->whereNumber('page')->name('articles.page');

// 2. Tham số tùy chọn + regex slug
Route::get('/articles/slug/{slug?}', function ($slug = 'khong-co-slug') {
    return "Slug: " . $slug;
})->where('slug', '[a-z0-9-]+');

// 3. Route group với prefix
Route::prefix('admin')->group(function () {
    Route::get('/articles', fn() => 'Quản trị bài viết')->name('admin.articles.index');
});

// 4. Resource routes cho Article
Route::resource('articles', ArticleController::class);

