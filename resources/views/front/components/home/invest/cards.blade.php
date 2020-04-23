@foreach($data as $key=>$collection)
        @foreach($collection['items'] as $item)
        <div class="cards__card">
            <div class="cards__card__individual">
                @foreach($item["images"] as $img)
                <img src="{{($img)}}" alt="">
              @endforeach
            </div>
            <div class="cards__card__individual__center">  
                @include('front.components.initial-cards-block',[
                    'title'=>$item['title'],
                    'subtitle'=>$item['subtitle'],
                    ])
            </div>    
        </div>
        @endforeach
    @endforeach