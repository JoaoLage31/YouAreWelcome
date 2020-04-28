<div id="accordion" class="whatweoffer">
    <div class="col-12 col-xl-4">
        @foreach($text_area as $key => $collection)
        <h2 class="whatweoffer__title__sub"> {{$collection['subtitle']}}</h2>
        <h2 class="whatweoffer__title"> {{$collection['title']}}</h2>
            @foreach($collection['items'] as $item)
            <div class="card">
                @include('front.components.sub_pages.whatweoffer.text_area-block',[
                    'title'=>$item['title'],
                    'description'=>$item['description'],
                    'collapse'=>$item['collapse'],
                    'key_k'=>$item['key_k'],
                ])
            </div>
            @endforeach
        @endforeach
    </div>
    <div class="ourteam__none col-xl-1"></div>
    <div class=" col-12 col-xl-6">
        @foreach($text_area as $key => $collection)
            <img class="buisness_img" src=" {{$collection['image']}}" alt="">
        @endforeach
    </div>
</div>

