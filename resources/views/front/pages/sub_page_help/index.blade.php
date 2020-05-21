@extends('front.layout.app_menu_2')

@section('content')

@php
    $result = ['0'=>
    [
    'items'=>[[
        'title'=>'Frequently asked questions. Not getting your answer here?',
        'subtitle'=>'Need Help?',
    ]  
    ]]];
@endphp

@include('front.pages.sub_page_help.partials.intro_help', ['data'=>$result])

@php
    $queries =
['0'=>
    [
    'title'=>'Stay With Us',
    'items'=>[
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
    ]],
    '1'=>
        [
    'title'=>'Buy With Us',
    'items'=>[
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
    ]],
    '2'=>
        [
    'title'=>'Invest With Us',
    'items'=>[
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ], 
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
    ]],
    '3'=>
        [
    'title'=>'Services',
    'items'=>[
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
        [
        'title'=>'Como a YRW irá ajudar a vender o meu imóvel?',
        'description'=>'A equipa da YRW irá acompanhar todo o processo, desde a criação de 
                        anúncios com fotos e textos profissionais, posicionamento de topo das 
                        melhores plataformas imobiliárias até à conquista de compradores reais. De 
                        tal forma a assegurar a negociação, oferecemos ainda o financiamento para o 
                        seu comprador e tratamos de toda a documentação legal para venda. Eficácia 
                        garantida.',
        ],
    ]],
];
@endphp

@include('front.pages.sub_page_help.partials.queries', ['queries'=>$queries])

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