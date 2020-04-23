<div class="buisness_qualities__individual col-xl-4">
    <div class="buisness_qualities__individual__number">
        @if(!empty($number))
            <p>{{$number}}</p>
            <div class="buisness_qualities__individual__number__line"></div>
        @endif
    </div>
    <div class="buisness_qualities__individual__title">
        @if(!empty($title))
            <p>{{$title}}</p>
        @endif
    </div>
    <div class="buisness_qualities__individual__qualities col-12">
        @foreach($item["description"] as $description)
            @if (!empty($description))
            <div class="buisness_qualities__individual__qualities__ind">
                <img src="{{URL::asset('front/media/icons/invest/Path.svg')}}" alt=""><p>{{$description}}</p>
            </div>
            @endif    
        @endforeach
    </div>
</div>

