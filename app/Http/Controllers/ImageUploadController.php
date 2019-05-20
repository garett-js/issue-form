<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{

    public function imageUpload() {
        return view('imageUpload');
    }

    public function imageUploadPost() {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('uploads'), $imageName);

        return back()
            ->with('Картинка успешно загружена')
            ->with('image',$imageName);
    }
}