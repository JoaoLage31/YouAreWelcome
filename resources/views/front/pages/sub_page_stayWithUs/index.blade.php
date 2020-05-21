@extends('front.layout.app_menu_2')

@section('content')

@php
    $result = ['0'=>
    [
    'items'=>[[
        'title'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.',
        'subtitle'=>'',
    ]  
    ]]];
@endphp

@include('front.pages.sub_page_stayWithUs.partials.introduction', ['data'=>$result])
@php
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
                'images'=>['front/media/img/saved/img5.png', 'front/media/img/saved/img4.png','front/media/img/saved/img_2.png']
                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas ',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_2.png']
                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']

                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']


                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelasiaa',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']
            ],
            [
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
                'images'=>['front/media/img/saved/img5.png', 'front/media/img/saved/img4.png','front/media/img/saved/img_2.png']
                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas ',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_2.png']
                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']

                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']


                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelasiaa',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']
        ],[
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
                'images'=>['front/media/img/saved/img5.png', 'front/media/img/saved/img4.png','front/media/img/saved/img_2.png']
                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas ',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_2.png']
                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']

                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelas',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']


                ],
                [
                'home'=>'Gaia-Chelas, Gaia-Chelas, Gaia-Chelasiaa',
                'subhome'=>'CAMPANHÃ',
                'field__1'=>'2',
                'field__2' => '1',
                'field__3' => '3',
                'field__4' => '1',
                'inidvidual_field_1'=>'WIFI',
                'inidvidual_field_2'=>'Cozinha Equipada',
                'inidvidual_field_3'=>'Maquina Lavar',
                'price'=>'100',
                'deal'=>'Rent Home',
                'images'=>['front/media/img/saved/img_0.png', 'front/media/img/saved/img_0.png']
                ]
    ]]];

@endphp

@include('front.pages.sub_page_stayWithUs.partials.homes_list', ['data'=>$result])

@include('front.pages.sub_page_stayWithUs.partials.go-next')

@include('front.pages.home.partials.section-3',[
    'title_section'=>'You Are Welcome!',
    'sub_title_section'=>'Creating strong partnerships.',
])
@endsection


@push('scripts')
<script>
    $(document).ready(function() { 
        AOS.init({
            once: true,
            duration: 1200
        })
     });
</script>

@endpush