<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');

Route::get('edit', function () {
        return view('admin.edit');
    })->name('admin.edit');
    

Route::get('about', function () {
        return view('other.about');
    })->name('other.about');


Route::get('post/{id}', function ($id) {
    if ($id == 1) {
        $post = [
            'title' => 'Learning Laravel',
            'content' => 'This blog post will get you right on track with Laravel!'
        ];
    } else {
        $post = [
            'title' => 'Something else',
            'content' => 'Some other content'
        ];
    }

    if ($id == 2) {
        $post = [
            'title' => 'The next Steps',
            'content' => 'This blog post will get you right on track with Laravel!'
        ];
    } else {
        $post = [
            'title' => 'Something else',
            'content' => 'Some other content'
        ];
    }


    if ($id == 3) {
        $post = [
            'title' => 'Laravel 5.3',
            'content' => 'Though announced as a "minor release", Laravel 5.3 ships with somer very interesting additions and features.'
        ];
    } else {
        $post = [
            'title' => 'Something else',
            'content' => 'Some other content'
        ];
    }

    return view('blog.post', ['post' => $post]);
})->name('blog.post');
