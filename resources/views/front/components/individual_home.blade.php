
              
<div class="col-12 col-lg-12">
    <div  class="home">
        <div class="slide_home_individual">
          @foreach($item["images"] as $img)
            <a href="#" class="home__img"  style="background-image: url({{($img)}}); "></a>
          <!--  <a href=""><img class="home__img" src="{{($img)}}" alt=""></a> -->
          @endforeach
        </div>
          <div  class="home__text_section col-lg-12" >
              @include('front.components.home-cards-block',[
              'subhome'=>$item['subhome'],
              'home'=>$item['home'],
              ])
              
                  @include('front.components.homes-text-block',[
                  'field__1'=>$item['field__1'],
                  'field__2'=>$item['field__2'],
                  'field__3'=>$item['field__3'],
                  'field__4'=>$item['field__4'],
                  'inidvidual_field_1'=>$item['inidvidual_field_1'],
                  'inidvidual_field_2'=>$item['inidvidual_field_2'],
                  'inidvidual_field_3'=>$item['inidvidual_field_3'],
                  'deal'=>$item['deal'],
                  'price'=>$item['price'],
                  ])
          </div>
    </div>
</div>
