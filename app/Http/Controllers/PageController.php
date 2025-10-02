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

    public function contact()
    {
        return view('pages.contact');
    }

    public function handleContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        // Ở đây bạn có thể lưu DB hoặc gửi mail, demo ta chỉ flash session
        return redirect()->route('contact')->with('success', 'Cảm ơn bạn đã gửi liên hệ!');
    }

}
