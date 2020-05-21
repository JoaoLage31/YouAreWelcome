<div id="link2" class="desktop">
  <div id="here">
    @foreach($data_invest as $key=>$collection)
      <div class="slide_section2  homes_for_rent">
        @foreach($collection['items'] as $item)
          @include('front.components.individual_home-invest')
        @endforeach
      </div>
    @endforeach
  </div>
</div>
<div class="tablet">
  <div id="here">
    @foreach($data_invest as $key=>$collection)
      <div class="slide_tablet  homes_for_rent  ">
        @foreach($collection['items'] as $item)
          @include('front.components.individual_home-invest')
        @endforeach
      </div>
    @endforeach
  </div>
</div>
<div class="mobile">
  <div id="here">
    @foreach($data_invest as $key=>$collection)
      <div class="slide_mobile  homes_for_rent">
        @foreach($collection['items'] as $item)
          @include('front.components.individual_home-invest')
        @endforeach
      </div>
    @endforeach
  </div>
</div>

@push('scripts')

<script>

$('.slide_section2').on('afterChange init',  function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').addClass("slick-arrow2");
    $(".slick-current").find('.home').addClass("on"); 
});

$('.slide_section2').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').removeClass("slick-arrow2");
    $(".slick-current").find('.home').removeClass("on");
});


$('.slide_tablet').on('afterChange init',  function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').addClass("slick-arrow2");
    $(".slick-current").find('.home').addClass("on");  
});

$('.slide_tablet').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').removeClass("slick-arrow2");
    $(".slick-current").find('.home').removeClass("on");
});

$('.slide_mobile').on('afterChange init',  function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').addClass("slick-arrow2");
    $(".slick-current").find('.home').addClass("on");  
});

$('.slide_mobile').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    $(".slick-current").find('.slick-arrow').removeClass("slick-arrow2");
    $(".slick-current").find('.home').removeClass("on");
});

  $('.slide_section2').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    slidesToScroll:3,
    prevArrow:false,
    nextArrow: false,
}); 

$('.slide_tablet').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 2,
    slidesToScroll:1,
    prevArrow:false,
    nextArrow: false,
}); 
  $('.slide_mobile').slick({
    centerMode: true,
    slidesToShow: 1,
    slidesToScroll:1,
    prevArrow:false,
    nextArrow: false,
    centerPadding: '15px',
}); 

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