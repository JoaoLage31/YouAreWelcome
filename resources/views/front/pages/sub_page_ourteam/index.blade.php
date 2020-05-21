@extends('front.layout.app')

@section('content')

@php
$result = ['0'=>
    [
    'items'=>[[
        'title'=>'Lorem ipsum dolor sit amet, consectetur adipiscing.',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.',
        'subtitle'=>'About us',
        'images'=>['front/media/img/saved/O6ZG0D0.jpg'],
    ]  
]]];
@endphp

@include('front.pages.sub_page_ourteam.partials.intro_offer', ['data'=>$result])


@php
    $button =[
        '0'=>[
        'items'=>[[
            'button'=>'who we are',
        ]]
    ],
    '1'=>[
        'items'=>[[
            'button'=>'why us',
        ]]
    ],
    '2'=>[
        'items'=>[[
            'button'=>'our team',
        ]]
    ],
];
@endphp

@include('front.pages.sub_page_invest.partials.sub_menu',['button'=>$button])

@php
    $text_area = ['0'=>
    [
    'subtitle' => 'Who we are',
    'title' => 'Lorem ipsum dolor sit amet, consectetur.',
    'image' =>'front/media/img/saved/offer.jpg',
    'items'=>[
        [
        'title'=>'Who we are',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.',
        'key_k'=>1,
        ],
           [
        'title'=>'Our Mission',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.',
        'key_k'=>2,
        ],
        [
        'title'=>'Our History',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.',
        'key_k'=>3,
        ],
    ]]];
@endphp

@include('front.pages.sub_page_ourteam.partials.who_are_we',['text_area'=>$text_area])

@php
    $title = ['0'=>
    [
    'items'=>[[
        'title'=>'Maximize revenue. Minimize headaches.',
        'subtitle'=>'Why us?',
    ]  
    ]]];
    
    $cards = ['0'=>
    [
    'items'=>[[
        'title'=>'Sell Faster',
        'subtitle'=>'Review property details and learn more about the value of your portfolio with customized report.',
        'images'=>['front/media/img/ourteam/house-key.png'],
    ],
    [
        'title'=>'Earn Commision',
        'subtitle'=>'We collect documents such as inspection reports and lease information in order to attract qualified investors.',
        'images'=>['front/media/img/ourteam/chat-2.png'],
    ],
    [
        'title'=>'Grow Your Business',
        'subtitle'=>'Create an account with usand Enter your property’s information and our team start working on it immediately.',
        'images'=>['front/media/img/ourteam/command.png'],
    ]
    ]]];
@endphp

@include('front.pages.sub_page_ourteam.partials.cards',['data'=>$cards],['title'=>$title])

@php
    $team = ['0'=>
    [
    'items'=>[
        [
        'subtitle' => 'Our team',
        'title' => 'Lorem ipsum dolor sit amet, consectetur.',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.',
        'topic'=>['Verificação e gestão do processo judicial','Verificação e gestão do processo judicial','Verificação e gestão do processo judicial','Verificação e gestão do processo judicial','Verificação e gestão do processo judicial'],
        'image' =>['front/media/img/saved/offer_2.png'],
        ]
    ]]];
@endphp

@include('front.pages.sub_page_ourteam.partials.team',['team'=>$team])



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