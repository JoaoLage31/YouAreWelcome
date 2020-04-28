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
        'subtitle'=>'ABOUT US',
    ]  
    ]]];
@endphp
@include('front.pages.sub_page_stayWithUs.partials.introduction', ['data'=>$result])

@php
    $queries = ['0'=>
    [
    'title'=>'Top Queries',
    'items'=>[[
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
                        'collapse'=>'whoweare1',
        'key_k'=>1,
    ],  [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
                        'collapse'=>'whoweare2',
        'key_k'=>2,
    ],  [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
                        'collapse'=>'whoweare3',
                        'key_k'=>3,
    ],  [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
                        'collapse'=>'whoweare4',
                        'key_k'=>4,
    ],  [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
                        'collapse'=>'whoweare5',
                        'key_k'=>5,
    ],  
    ]]];
@endphp

@include('front.pages.sub_page_help.partials.queries',['queries'=>$queries])

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