@if (!empty($subtitle))
   <h2 class="whatweoffer__title__sub">{{$subtitle}}</h2>
@endif

@if (!empty($title))
   <h2 class="whatweoffer__title">{{$title}}</h2>
@endif

@if (!empty($description))
    <p class="card-body_p">{{$description}}</p>
@endif

@foreach($item["topic"] as $topic)
    @if (!empty($topic))
                <div class="topic_container">
                    <img src="{{URL::asset('front/media/icons/invest/Path.svg')}}" alt=""><p class="topic">{{$topic}}</p>
                </div>
            @endif    
@endforeach