
<div class="whatweoffer col-xl-11">
    <div class="col-xl-6">
        @foreach($text_area as $key => $collection)
            <img src=" {{$collection['image']}}" alt="">
        @endforeach
    </div>
    <div class="col-xl-1"></div>
    <div class="col-xl-5">
        @foreach($team as $key => $collection)
            @foreach($collection['items'] as $item)
            <div class="card">
                @include('front.components.sub_pages.whatweoffer.team-block',[
                    'subtitle'=>$item['subtitle'],
                    'title'=>$item['title'],
                    'description'=>$item['description'],
                    'topic'=>$item['topic'],
                ])
            </div>
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



