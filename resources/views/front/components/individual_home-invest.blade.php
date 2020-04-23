<div class="col-12 col-lg-12">
    <div  class="home">
        <div class="slide_home_individual">
          @foreach($item["images"] as $img)
          <a href="a_home{{$key}}" class="home__img"  style="background-image: url({{($img)}}); "></a>
          @endforeach
        </div>
          <div class="home__text_section col-lg-12">
              @include('front.components.home-cards-block',[
              'subhome'=>$item['subhome'],
              'home'=>$item['home'],
              ])
                  @include('front.components.home-text-individual',[
                  'description'=>$item['description'],
                  ])
          </div>
    </div>
</div>

