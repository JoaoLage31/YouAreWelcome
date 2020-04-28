<div class="ourteam col-xl-11">
    <div class="col-12 col-xl-6">
        @foreach($team as $key => $collection)
            @foreach($collection['items'] as $item)
                @foreach($item["image"] as $img)
                    <img class="buisness_img" src="{{$img}}" alt="">
                @endforeach
            @endforeach
        @endforeach
    </div>
    <div class="ourteam__none col-xl-1"></div>
    <div class="ourteam__container col-12 col-xl-5">
        @foreach($team as $key => $collection)
            @foreach($collection['items'] as $item)
                @include('front.components.sub_pages.whatweoffer.team-block',[
                    'subtitle'=>$item['subtitle'],
                    'title'=>$item['title'],
                    'description'=>$item['description'],
                    'topic'=>$item['topic'],
                ])
            @endforeach
        @endforeach
    </div>
</div>

{{--
    
<div class="col-xl-11">
    @foreach($team as $key => $collection)
        @foreach($collection['items'] as $item)
            @include('front.components.sub_pages.whatweoffer.team-block',[
                'title'=>$item['title'],
                'description'=>$item['description'],
                'topic'=>$item['topic'],
            ])
        @endforeach
    @endforeach
</div>

    --}}



