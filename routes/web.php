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


Route::get('a_home0', function()
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
                    'description'=>' The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.   The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.',
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
                    'wifi_hispeed'=>['front/media/icons/home/wifi.svg','High speed Internet'],
                    'air_condicioned'=>['front/media/icons/home/air-conditioner.svg','AC'],
                    'shower'=>['front/media/icons/home/shower.svg','Electric shower'],
                    'hair_dryer'=>['front/media/icons/home/secador.svg','Hair Dryer'],
                    'kitchen'=>['front/media/icons/home/kitchen.svg','Equipped kitchen'],
                    'towel'=>['front/media/icons/home/toalha.svg','Towels'],
                    'utensils'=>['front/media/icons/home/utensils.svg','Kitchen Utensils'],
                    'tv'=>['front/media/icons/home/TV.svg','TV'],
                    'laundry'=>['front/media/icons/home/laundry.svg','Laundry'],
                    'park'=>['front/media/icons/home/park.svg','Parking'],
                    'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png','front/media/img/saved/img_0.png']
                    ]
                ]]];
        return view('front.pages.sub_home_types.sub_page_home-buy.index', compact('result'));
    });


Route::get('a_home1', function()
    {
        $form_title = ['0'=>
        [
        'items'=>[ [
            'title'=>'Have an important question? Fill out the form below to get a quick response from a real representative.',
    ]
    ]]];
    
    $result =
    ['0'=>
            [
            'id' =>'0',
            'filter'=>'Rent',
            'name'=>'All for rent ',
            'items'=>[[
                'home'=>'Avenida da Républica Matosinhos',
                'subhome'=>'CAMPANHÃ',
                'description'=>' The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.   The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.The prices shown are the “net effective rent” when you receive one-month free rent on your 12+ month lease (lease must start by 3/29). Only applicable to new residents who are applying to live with Bungalow. Paid via PayPal 30 days after occupancy.',
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
                'wifi_hispeed'=>['front/media/icons/home/wifi.svg','High speed Internet'],
                'air_condicioned'=>['front/media/icons/home/air-conditioner.svg','AC'],
                'shower'=>['front/media/icons/home/shower.svg','Electric shower'],
                'hair_dryer'=>['front/media/icons/home/secador.svg','Hair Dryer'],
                'kitchen'=>['front/media/icons/home/kitchen.svg','Equipped kitchen'],
                'towel'=>['front/media/icons/home/toalha.svg','Towels'],
                'utensils'=>['front/media/icons/home/utensils.svg','Kitchen Utensils'],
                'tv'=>['front/media/icons/home/TV.svg','TV'],
                'laundry'=>['front/media/icons/home/laundry.svg','Laundry'],
                'park'=>['front/media/icons/home/park.svg','Parking'],
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png','front/media/img/saved/img_0.png']
                ]
            ]]];
    return view('front.pages.sub_home_types.sub_page_home-rent.index', compact('result'));
});
Route::get('a_home2', function()
    {
        $form_title = ['0'=>
        [
        'items'=>[ [
            'title'=>'Have an important question? Fill out the form below to get a quick response from a real representative.',
    ]
    ]]];
    
    $result =
    ['0'=>
            [
            'id' =>'0',
            'filter'=>'Rent',
            'name'=>'All for rent ',
            'items'=>[[
                'home'=>'Avenida da Républica Matosinhos',
                'subhome'=>'CAMPANHÃ',
                'description'=>['Avenida da Républica Matosinhos','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum.'],

                'description2'=>['Avenida da Républica Matosinhos','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum.'],

                'description3'=>['Avenida da Républica Matosinhos','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum.'],

                'description4'=>['Avenida da Républica Matosinhos','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                culpa qui officia deserunt mollit anim id est laborum.'],

                'documents'=>['Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod ',
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 2',
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 3',
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 4',
                            'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 5'],

                'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']
                ]
            ]]];

    return view('front.pages.sub_home_types.sub_page_home-invest.index', compact('result'));
});


Route::get('invest_us', function()
    {
    $result = ['0'=>
        [
        'items'=>[[
            'title'=>'Love where you live, and who you live with',
            'description'=>'Move-in ready homes and a built-in community so you can feel at home, together—wherever you are.',
        ]
        ]]];

        return view('front.pages.sub_page_invest.index', compact('result'));
});


Route::get('ourteam', function()
    {
        return view('front.pages.sub_page_ourteam.index');
});

Route::get('whatweoffer', function()
    {
        return view('front.pages.sub_page_whatweoffer.index');
});

Route::get('buywithus', function()
    {
        return view('front.pages.sub_page_buyWithUs.index');
});


Route::get('help', function()
    {
        return view('front.pages.sub_page_help.index');
});

Route::get('contacts', function()
    {
        return view('front.pages.sub_page_contacts.index');
});