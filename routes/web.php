<?php

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('pages.home', [
        'title' => 'Kajava Furniture',
        'images' => Image::all(),
    ]);
})->name('home');

Route::get('/aboutus', function () {
    return view('pages.about', [
        'title' => 'About Kajava Furniture'
    ]);
})->name('about');

Route::get('/catalog', function () {
    return view('pages.catalog', [
        'title' => 'Catalog Kajava Furniture'
    ]);
})->name('catalog');

Route::get('/upload-images', function () {
    return view('pages.image', [
        'title' => 'Upload Images'
    ]);
});

Route::post('/upload-image', function (Request $request) {
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
    ]);

    $path = $request->file('image')->store('images', 'public');

    $image = new Image();
    $image->image = $path;
    $image->save();

    return back()->with('success', 'Image uploaded successfully.');
})->name('image.upload');
