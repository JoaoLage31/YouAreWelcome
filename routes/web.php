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
    return view('front.pages.home.index');
});


Route::get('StayWithUs', function()
{

$result = ['0'=>
    [
    'items'=>[[
        'title'=>'Love where you live, and who you live with',
        'description'=>'Move-in ready homes and a built-in community so you can feel at home, together—wherever you are.',
]
    ]]];

    return view('front.pages.sub_page_stayWithUs.index', compact('result'));
});