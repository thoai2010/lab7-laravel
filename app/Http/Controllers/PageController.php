<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        // Truyền dữ liệu demo xuống view
        $course = [
            'name' => 'Lập trình mã nguồn mở - Laravel',
            'teacher' => 'Nguyễn Văn A',
            'description' => 'Học phần giới thiệu về framework Laravel, Blade, Eloquent ORM và RESTful.'
        ];

        return view('pages.about', compact('course'));
    }
}
