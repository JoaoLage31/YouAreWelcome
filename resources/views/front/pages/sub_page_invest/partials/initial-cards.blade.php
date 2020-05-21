
<div id="link0" class="cards_invest_title">
    <div  class="section2 row col-md-8 justify-content-center">
        <div class="col-11 col-md-8">
            @foreach($title as $key => $collection)
                @foreach($collection['items'] as $item)
                    @include('front.components.section-1-block',[
                        'subtitle'=>$item['subtitle'],
                        'title'=>$item['title'],
                    ])
                @endforeach
            @endforeach
        </div>
    </div>
</div>

<div class="cards_invest col-xl-11">
    @include('front.components.home.invest.cards')    
</div>