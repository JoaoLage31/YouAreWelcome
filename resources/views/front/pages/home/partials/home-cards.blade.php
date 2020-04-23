<!-- DESKTOP -->
<div class="desktop">
  <div id="myBtnContainer" class="d-flex justify-content-center">
    @foreach($data as $key=>$collection)
      <button id="{{$key == 0 ? '' : 'none'}} slider{{$key}}" id="slide{{$key}}" class="btn1 {{$key == 0 ? 'active2' : ''}}   slector-slick" data-target="#slide{{$key}}"> {{$collection['name']}} <p class="filter-number">{!!count($collection['items'])!!}</p></button>
    @endforeach
    @foreach($data_invest as $key=>$collection)
      <button id="{{$key == 1 ? '' : 'none'}} slider{{$key}}" id="slide{{$key}}" class="btn1   slector-slick" data-target="#slide{{$key}}"> {{$collection['name']}} <p class="filter-number">{!!count($collection['items'])!!}</p></button>
    @endforeach
  </div>
</div>
  <div class="desktop">
    <div style="position:relative">
      <div class="add__Blank"></div>
      <div class="add__Blank"></div>
    </div>
    <div id="here">
      @foreach($data as $key=>$collection)
        <div class="slide_section2  homes_for_rent  {{$key == 0 ? '' : 'none'}}" id="slide{{$key}}">
          @foreach($collection['items'] as $item)
            @include('front.components.individual_home')
          @endforeach
        </div>
      @endforeach
    </div>
  </div>

  <div class="desktop">
    <div id="here">
      @foreach($data_invest as $key=>$collection)
        <div class="slide_section2  homes_for_rent  none" id="slide{{$key}}">
          @foreach($collection['items'] as $item)
            @include('front.components.individual_home-invest')
          @endforeach
        </div>
      @endforeach
    </div>
  </div>

<!-- END DESKTOP -->
<!-- TABLET -->

<div class="tablet">
  <div id="myBtnContainer" class="d-flex justify-content-center">
    @foreach($data as $key=>$collection)
    <button id="{{$key == 0 ? '' : 'none'}} slider2{{$key}}" id="slide2{{$key}}" class="btn2 {{$key == 0 ? 'active2' : ''}}   slector-slick2" data-target="#slide2{{$key}}"> {{$collection['name']}} <p class="filter-number">{!!count($collection['items'])!!}</p></button>
    @endforeach
    @foreach($data_invest as $key=>$collection)
    <button id="{{$key == 2 ? '' : 'none'}} slider2{{$key}}" id="slide2{{$key}}" class="btn2   slector-slick2" data-target="#slide2{{$key}}"> {{$collection['name']}} <p class="filter-number">{!!count($collection['items'])!!}</p></button>
  @endforeach
  </div>
</div>
  <div class="tablet">

    <div id="here">
      @foreach($data as $key=>$collection)

      <div class="slide_tablet  homes_for_rent  {{$key == 0 ? '' : 'none'}}" id="slide2{{$key}}">
        @foreach($collection['items'] as $item)
            @include('front.components.individual_home')
            @endforeach
          </div>
          @endforeach
    </div>
  </div>

  <div class="tablet">
    <div id="here">
      @foreach($data_invest as $key=>$collection)
        <div class="slide_tablet  homes_for_rent  none" id="slide2{{$key}}">
          @foreach($collection['items'] as $item)
            @include('front.components.individual_home-invest')
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
<!-- END TABLET -->
<!-- MOBILE -->

<div class="mobile">
  <div id="myBtnContainer_mobile" class="d-flex justify-content-center">
    @foreach($data as $key=>$collection)
    <button id="{{$key == 0 ? '' : 'none'}} slider2{{$key}}" id="slide_mobile{{$key}}" class="btn_mobile {{$key == 0 ? 'active2' : ''}}   slector-slick_mobile" data-target="#slide_mobile{{$key}}"> {{$collection['name']}} <p class="filter-number">{!!count($collection['items'])!!}</p></button>
    @endforeach
    @foreach($data_invest as $key=>$collection)
    <button id="{{$key == 2 ? '' : 'none'}} slider2{{$key}}" id="slide_mobile{{$key}}" class="btn_mobile slector-slick_mobile" data-target="#slide_mobile{{$key}}"> {{$collection['name']}} <p class="filter-number">{!!count($collection['items'])!!}</p></button>
  @endforeach
  </div>
</div>

  <div class="mobile">
    <div id="here">
      @foreach($data as $key=>$collection)

      <div class="slide_mobile  homes_for_rent  {{$key == 0 ? '' : 'none'}}" id="slide_mobile{{$key}}">
          @foreach($collection['items'] as $item)
                @include('front.components.individual_home')
          @endforeach
          </div>
          @endforeach
    </div>
  </div>

  <div class="mobile">
    <div id="here">
      @foreach($data_invest as $key=>$collection)
        <div class="slide_mobile  homes_for_rent  none" id="slide_mobile{{$key}}">
          @foreach($collection['items'] as $item)
            @include('front.components.individual_home-invest')
          @endforeach
        </div>
      @endforeach
    </div>
  </div>
<!-- END MOBILE -->
@push('scripts')

<script>

/*
$( window ).resize(function() {
  location.reload(true);
});
*/




function filterSelection(el) {
      $('.btn1').removeClass('active2');    
      $('.slide_section2').addClass('none');
      var idSlide = $(el).attr("data-target");
      $(el).addClass('active2');
      $(idSlide).removeClass('none');
}

     $('.slector-slick').on('click', function(){
      filterSelection(this);
     })




     function filterSelection_tablet(el) {
      $('.btn2').removeClass('active2');    
      $('.slide_tablet').addClass('none');
      var idSlide_tablet = $(el).attr("data-target");
      $(el).addClass('active2');
      $(idSlide_tablet).removeClass('none');
}

     $('.slector-slick2').on('click', function(){
      filterSelection_tablet(this);
     })


     
     function filterSelection_mobile(el) {
      $('.btn_mobile').removeClass('active2');    
      $('.slide_mobile').addClass('none');
      var idSlide_mobile = $(el).attr("data-target");
      $(el).addClass('active2');
      $(idSlide_mobile).removeClass('none');
}

     $('.slector-slick_mobile').on('click', function(){
      filterSelection_mobile(this);
     })


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


  
    $(document).ready(function() { 
        AOS.init({
            once: true,
            duration: 1200
        })
     });


     
    </script>
@endpush
