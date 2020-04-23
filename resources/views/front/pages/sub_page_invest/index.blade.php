@extends('front.layout.app')

@section('content')

@php
$result = ['0'=>
    [
    'items'=>[[
        'title'=>'Lorem ipsum dolor sit amet, 
        consectetur adipiscing elit, sed do 
        eiusmod tempor incididunt ut.',
        'images'=>['front/media/img/saved/O6ZG0D0.jpg'],
        'subtitle'=>'Invest with Us',
    ]  
]]];
@endphp

@include('front.pages.sub_page_invest.partials.intro_invest', ['data'=>$result])

@php
    $button =['0'=>[
        'items'=>[[
            'button'=>'what we offer',
            'link'=>'work'
        ]]
    ],
        '1'=>[
            'items'=>[[
                'button'=>'what we offer',
                'link'=>'buisness'
            ]]
        ], 
        '2'=>[
            'items'=>[[
                'button'=>'To Invest',
                'link'=>'toinvest'
            ]]
        ],
];
@endphp

@include('front.pages.sub_page_invest.partials.sub_menu',['button'=>$button])
@php
    $title = ['0'=>
    [
    'items'=>[[
        'title'=>'How to sell your property on Hold & Flip',
        'subtitle'=>'How we work',
    ]  
    ]]];
    
    $cards = ['0'=>
    [
    'items'=>[[
        'title'=>'Report',
        'subtitle'=>'Review property details and learn more about the value of your portfolio with customized report.',
        'images'=>['front/media/icons/invest/house.svg'],
    ],
    [
        'title'=>'Report',
        'subtitle'=>'We collect documents such as inspection reports and lease information in order to attract qualified investors.',
        'images'=>['front/media/icons/invest/house-5.svg'],
    ],
    [
        'title'=>'Report',
        'subtitle'=>'Create an account with usand Enter your property’s information and our team start working on it immediately.',
        'images'=>['front/media/icons/invest/house-3.svg'],
    ],
    [
        'title'=>'Report',
        'subtitle'=>'Once you’ve accepted an offer, we’ll oversee the entire closing process and complete the transaction generally within 30 days.',
        'images'=>['front/media/icons/invest/mortgage-4.svg'],
    ]  
    ]]];
@endphp

@include('front.pages.sub_page_invest.partials.initial-cards',['data'=>$cards],['title'=>$title])


@php
    $buiness = ['0'=>
    [
    'items'=>[[
        'title'=>'Modelo You are Welcome',
        'description'=>'Um dos grandes objetivos da Housefy é acabar com a necessidade de pagar elevados custos de 
        comissão às tradicionais agências imobiliárias. O nosso modelo oferece uma equipa de 
        profissionais especializados que trabalham através de ferramentas digitais para facilitar o processo 
        de venda diretamente entre o proprietário e o comprador. É assim que vamos vender o seu imóvel:',
        'subtitle'=>'ABOUT US',
    ]  
    ]]];

    $qualities = ['0'=>
    [
    'items'=>[[
        'number'=>1,
        'title'=>'Captamos potenciais compradores',
        'description'=>['Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade',],
    ],[
        'number'=>2,
        'title'=>'Captamos potenciais compradores',
        'description'=>['Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade',],
    ],[
        'number'=>3,
        'title'=>'Captamos potenciais compradores',
        'description'=>['Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade','Visitamos o seu imóvel e fazemos um estudo de mercado da propriedade',],
    ]  
    ]]];
@endphp

@include('front.pages.sub_page_invest.partials.buisness-modal',['data'=>$buiness],['qualities'=>$qualities])

@include('front.components.title-section',[
        'title_section'=>'Invest in our properties.',
        'sub_title_scetion'=>'to invest',
    ]
)

@php
    $result_invest =
['2'=>
    [
    
        'id' =>'1',
        'filter'=>'Invest',
        'name'=>'All For Invest',
        'items'=>[[
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
        'subhome'=>'CAMPANHÃ',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
        culpa qui officia deserunt mollit anim id est laborum.',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']
            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum.',
                    'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


                        ],
                        [
                        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
                        'subhome'=>'CAMPANHÃ',
                        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum.',
                    'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


                    ],
                    [
                        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
                        'subhome'=>'CAMPANHÃ',
                        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum.',
                    'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


                        ],
                        [
                        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
                        'subhome'=>'CAMPANHÃ',
                        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum.',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']

            ],
            [
        'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
        'subhome'=>'CAMPANHÃ',
        'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
        culpa qui officia deserunt mollit anim id est laborum.',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']
            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum.',
            'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']


            ],
            [
            'home'=>'Porto Loft 2.3 - Gil Vicente Guesthouse',
            'subhome'=>'CAMPANHÃ',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
            culpa qui officia deserunt mollit anim id est laborum.',
        'images'=>['front/media/img/saved/img_2.png', 'front/media/img/saved/img_0.png']

        ],

        

]]];
@endphp

@include('front.pages.sub_page_invest.partials.slider_invest',['data_invest'=>$result_invest])

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