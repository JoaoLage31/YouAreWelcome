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


Route::get('a_home', function()
{

    $result =
    ['0'=>
            [
            'id' =>'0',
            'filter'=>'Rent',
            'name'=>'All for rent ',
            'items'=>[[
                'home'=>'Avenida da Républica Matosinhos',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'8',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'check_in'=>'10:00',
                'area'=>'240',
                'type'=>'2',
                'elevator'=>'Sim',
                'checkout'=>'09:00',
                'floor'=>'8',
                'adress'=>'Av. Dom Afonso Henriques 1196 - Esc. 203, 4450-012 Matosinhos',

                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png','front/media/img/saved/img_0.png']
                ]
            ]]];
    return view('front.pages.sub_page_Home.index', compact('result'));
});

