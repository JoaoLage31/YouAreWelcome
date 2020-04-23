<div id="buisness" class="buisness-invest col-xl-11">
    <div  class="section2 row col-10 col-md-10 col-lg-10 justify-content-center">
            @foreach($data as $key => $collection)
                @foreach($collection['items'] as $item)
                <div class="V2">
                    @include('front.components.tilles-2-block',[
                        'title'=>$item['title'],
                        'description'=>$item['description'],
                        'subtitle'=>$item['subtitle'],
                    ])
                </div>
                @endforeach
            @endforeach
    </div>

    <div class="buisness_qualities col-xl-11">
        @foreach($qualities as $key => $collection)
            @foreach($collection['items'] as $item)
                    @include('front.components.home.invest.qualities-component',[
                        'number'=>$item['number'],
                        'title'=>$item['title'],
                        'description'=>$item['description'],
                    ])
            @endforeach
        @endforeach
    </div>
</div>

<div id="toinvest"></div>