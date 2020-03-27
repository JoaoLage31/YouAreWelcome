<div class="Stay_container">
    @foreach($data as $key=>$collection)
        @foreach($collection['items'] as $item)
            <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                @include('front.components.individual_home')
            </div>
        @endforeach
    @endforeach
</div>



@push('scripts')
<script>
    $('.slide_home_individual').slick({
        slidesToShow: 1,
        slidesToScroll:1,
        draggable: false,
        swipe: false,
        swipeToSlide: false,
        touchMove: false,
        draggable: false,
        accessibility: false,
        dots: true,
        arrows:true,
        prevArrow:'<div><img  class="prev" src="{{URL::asset('front/media/icons/ic-arrows-left.svg')}}" alt=""></div>',
        nextArrow:'<div class="right"><img  class="next" src="{{URL::asset('front/media/icons/ic-arrows-right.svg')}}" alt=""></div>',
    }); 

    
</script>
@endpush