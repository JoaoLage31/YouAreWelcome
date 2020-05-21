@extends('front.layout.app')

@section('content')

@php
$result = ['0'=>
    [
    'items'=>[[
        'title'=>'How Hold & Flip Works . Lorem ipsum dolor sit amet, consectetur adipiscing.',
        'description'=>'Finding a new home is a pain, moving is expensive, and making new friends as 
        an adult is hard. We give people a better way to live, and a better community to 
        live with.',
        'subtitle'=>'What we offer',
        'images'=>['front/media/img/saved/O5MCDL0.png'],
    ]  
]]];
@endphp

@include('front.pages.sub_page_ourteam.partials.intro_offer', ['data'=>$result])


@php
    $button =['0'=>[
        'items'=>[[
            'button'=>'For Sellers',
        ]]
    ],
    '1'=>[
        'items'=>[[
            'button'=>'for buyers',
        ]]
    ],
    '2'=>[
        'items'=>[[
            'button'=>'For rents',
        ]]
    ],
];
@endphp

@include('front.pages.sub_page_invest.partials.sub_menu',['button'=>$button])

@php
    
$result = [
    '0'=>
    [
    'title'=> 'For Sellers',
    'description'=> 'Um dos grandes objetivos da Housefy é acabar com a necessidade de pagar elevados custos de 
                    comissão às tradicionais agências imobiliárias. O nosso modelo oferece uma equipa de 
                    profissionais especializados que trabalham através de ferramentas digitais para facilitar o processo 
                    de venda diretamente entre o proprietário e o comprador. É assim que vamos vender o seu imóvel:',
    'items'=>[[
        'incon_svg'=>'front/media/icons/offer/information.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/mortgage-4.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
            'incon_svg'=>'front/media/icons/offer/information.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/laptop.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/mortgage-4.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
]],
'1'=>
    [
    'title'=> 'For Buyers',
    'description'=> 'Um dos grandes objetivos da Housefy é acabar com a necessidade de pagar elevados custos de 
                    comissão às tradicionais agências imobiliárias. O nosso modelo oferece uma equipa de 
                    profissionais especializados que trabalham através de ferramentas digitais para facilitar o processo 
                    de venda diretamente entre o proprietário e o comprador. É assim que vamos vender o seu imóvel:',
    'items'=>[[
        'incon_svg'=>'front/media/icons/offer/information.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/mortgage-4.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
            'incon_svg'=>'front/media/icons/offer/information.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/laptop.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/mortgage-4.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
]],

'2'=>
    [
    'title'=> 'For Rents',
    'description'=> 'Um dos grandes objetivos da Housefy é acabar com a necessidade de pagar elevados custos de 
                    comissão às tradicionais agências imobiliárias. O nosso modelo oferece uma equipa de 
                    profissionais especializados que trabalham através de ferramentas digitais para facilitar o processo 
                    de venda diretamente entre o proprietário e o comprador. É assim que vamos vender o seu imóvel:',
    'items'=>[[
        'incon_svg'=>'front/media/icons/offer/information.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/mortgage-4.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
            'incon_svg'=>'front/media/icons/offer/information.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/laptop.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
        [
        'incon_svg'=>'front/media/icons/offer/mortgage-4.svg',
        'title'=>'Property Advertisement',
        'description'=>'Professional photo session and social media communication.',
        ],
]]
];
    
@endphp

@include('front.pages.sub_page_whatweoffer.partials.slider-section',['data'=>$result,])

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