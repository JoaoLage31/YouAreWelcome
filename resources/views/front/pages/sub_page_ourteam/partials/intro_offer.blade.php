@foreach($data as $key => $collection)
        @foreach($collection['items'] as $item)
            @foreach($item["images"] as $img)
                <div class="intro_invest" style="background-image: url({{($img)}});">
                    <div class="intro_invest__overlay"></div>
            @endforeach
                <div class="col-xl-8 intro_invest__intro">
                    @include('front.components.tilles-2-block',[
                        'title'=>$item['title'],
                        'subtitle'=>$item['subtitle'],
                        'description'=>$item['description'],
                    ])
    @endforeach
@endforeach
    </div>
</div>
