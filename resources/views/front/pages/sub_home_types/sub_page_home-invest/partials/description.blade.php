<div class="home_ind">
    <div class="home_ind__container col-12 col-md-10 col-lg-10 col-xl-11">
        <div class="col-12 col-xl-11">
            @foreach($result as $key=>$collection)
                @foreach($collection['items'] as $item)
                    @include('front.components.home.home_invest-descriptions',[
                    'description'=>$item['description'],
                    'description2'=>$item['description2'],
                    'description3'=>$item['description3'],
                    'description4'=>$item['description4'],
                    ])
                @endforeach
            @endforeach
        </div>
    </div>
</div>