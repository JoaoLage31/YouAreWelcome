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

@include('front.pages.sub_page_buyWithUs.partials.introduction', ['data'=>$result])
@php
        $result =
    ['0'=>
    [
        'id' =>'1',
        'filter'=>'Buy',
        'name'=>'All For Buy',
        'items'=>[[
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'240',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100.000',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']
            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


        ],
        [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T4',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T3',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']

            ],
            [
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
        'subhome'=>'CAMPANHÃ',
        'field__1'=>'240',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100.000',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']
            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'field__1'=>'2',
        'field__2' => '1',
        'field__3' => '3',
        'field__4' => '1',
        'inidvidual_field_1'=>'B',
        'inidvidual_field_2'=>'240',
        'inidvidual_field_3'=>'T2',
        'price'=>'100',
        'deal'=>'Rent Home',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']
                ]
    ]]];

@endphp

@include('front.pages.sub_page_buyWithUs.partials.homes_list_buy', ['data'=>$result])

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