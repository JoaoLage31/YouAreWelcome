
@foreach($data as $key=>$collection)
<div id="link{{$key}}" class="slide slide_paddings {{$key == 1 ? 'slide_background' : ''}}">
  <div class="slide-offer col-xl-10">
      <h2 class="slide-offer__title">{{$collection['title']}}</h2>
      <p class="slide-offer__description">{{$collection['description']}}</p>
   
  </div>
  <div class="d-flex justify-content-center">
      <div class="aside_pos">
        <div class="aside"></div>
        <div class="aside"></div>
      </div>
    </div>
    <div class="slider-container">
        <div class="slide_section my-edit col-lg-11">
                @foreach($collection['items'] as $item)
                <div class="hello">
                    @include('front.components.slider-block',[
                        'incon_svg'=>$item['incon_svg'],
                        'title'=>$item['title'],
                        'description'=>$item['description'],
                        ])
                </div>
                @endforeach
        </div>
    </div>
</div>
@endforeach
  
  
@push('scripts')
<script>
  
  $('.slide_section').slick({
      centerMode:false,
      slidesToShow: 3,
      slidesToScroll:3,
      arrows:true,
      prevArrow:'<div><img  class="prev2" src="{{URL::asset('front/media/icons/Caminho 593.svg')}}" alt=""></div>',
      nextArrow:'<div><img  class="next2" src="{{URL::asset('front/media/icons/Layer.svg')}}" alt=""></div>',
      responsive: [
        {
        
        breakpoint: 1180,
        settings: {
          centerMode: false,
          slidesToShow:2,
          slidesToScroll:2,
        }
      },
      {
        
        breakpoint: 1024,
        settings: {
          centerMode: false,
          slidesToShow:2,
          slidesToScroll:2,
        }
      },
      {
        breakpoint: 825,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 680,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerPadding: '0px',
        }
      }
    ]
  }); 

</script>
@endpush