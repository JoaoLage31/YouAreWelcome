<div class="slide_home_section__container_info__amenities">
@if(!empty($wifi_hispeed))
    <div class="slide_home_section__container_info__amenities__individual">
        <img src="{{($wifi_hispeed[0])}}" alt="">
        <h4>{{$wifi_hispeed[1]}}</h4>
    </div>
@endif
@if(!empty($shower))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($shower[0])}}" alt="">
        <h4>{{$shower[1]}}</h4>
    </div>
@endif
@if(!empty($air_condicioned))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($air_condicioned[0])}}" alt="">
        <h4>{{$air_condicioned[1]}}</h4>
    </div>
@endif
@if(!empty($hair_dryer))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($hair_dryer[0])}}" alt="">
        <h4>{{$hair_dryer[1]}}</h4>
    </div>
@endif
@if(!empty($kitchen))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($kitchen[0])}}" alt="">
        <h4>{{$kitchen[1]}}</h4>
    </div>
@endif
@if(!empty($towel))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($towel[0])}}" alt="">
        <h4>{{$towel[1]}}</h4>
    </div>
@endif
@if(!empty($utensils))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($utensils[0])}}" alt="">
        <h4>{{$utensils[1]}}</h4>
    </div>
@endif
@if(!empty($tv))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($tv[0])}}" alt="">
        <h4>{{$tv[1]}}</h4>
    </div>
@endif
@if(!empty($laundry))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($laundry[0])}}" alt="">
        <h4>{{$laundry[1]}}</h4>
    </div>
@endif
@if(!empty($park))
    <div class="slide_home_section__container_info__amenities__individual ">
        <img src="{{($park[0])}}" alt="">
        <h4>{{$park[1]}}</h4>
    </div>
@endif
</div>

@if(!empty($description))
    <p class="more">
        {{$description}}
    </p>
@endif