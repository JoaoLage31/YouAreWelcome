<div class="slide_home_section">
    @foreach($data as $key=>$collection)
        @foreach($collection['items'] as $item)
            <div class="">
                <div class="slide_home_section__bigtitle">
                    <div class="">
                        @include('front.components.home-cards-block',[
                            'subhome'=>$item['subhome'],
                            'home'=>$item['home'],
                            ])
                    </div>
                    <div>
                        <a href="#">
                            Share
                            <img  class="prev" src="{{URL::asset('front/media/icons/home/form/Upload.svg')}}" alt="">
                        </a>
                    </div>
                </div>
                    <div class="d-flex justify-content-center">
                        <div class="slide_home_section__arrows">
                            <img  class="prev" src="{{URL::asset('front/media/icons/other_arrows/prev_grey.svg')}}" alt="">
                            <img  class="next" src="{{URL::asset('front/media/icons/other_arrows/next_grey.svg')}}" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="slide_home_section__arrows__mobile">
                            <img  class="prev" src="{{URL::asset('front/media/icons/ic-arrows-left.svg')}}" alt="">
                            <img  class="next" src="{{URL::asset('front/media/icons/ic-arrows-right.svg')}}" alt="">
                        </div>
                    </div>
                <div class="slide_home">
                    @foreach($item["images"] as $img)
                        <a href="a_home" class="home__img"  style="background-image: url({{($img)}}); "></a>
                    @endforeach
                </div>

                <!-- NEW START -->
                <div class="home_ind">
                    <div class="home_ind__container col-12 col-md-10 col-lg-10 col-xl-11 ">
                        @include('front.pages.sub_home_types.partials_global.col-left-feutures')
                        <div class="col-sm-12 col-lg-5 col-xl-5" style="padding:0">
                            <div class="col-12 slide_home_section__container_info">
                                @include('front.pages.sub_home_types.sub_page_home-buy.partials.home_buy_rating')
                                <div class="col-12 slide_home_section__container_info__mapa_sec">
                                    
                                    <div class="col-12 slide_home_section__container_info__mapa">
                                        <iframe class="slide_home_section__container_info__mapa__iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12038.599997417676!2d-8.5611249!3d41.03291264999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-PT!2spt!4v1585754519024!5m2!1spt-PT!2spt" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        @foreach($data as $key=>$collection)
                                            @foreach($collection['items'] as $item)
                                                @include('front.components.home.features-components',[
                                                    'adress'=>$item['adress'],
                                                    ])
                                            @endforeach
                                        @endforeach
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach 
</div>
<div class=" col-11 slide_home_section__line"></div>


@push('scripts')
<script>
    $('.slide_home').slick({
        slidesToShow: 1,
        slidesToScroll:1,
        arrows:true,
        centerMode: true,
        prevArrow:'.prev',
        nextArrow:'.next',
    }); 
    $(document).ready(function() {
    var minChar = 600;
    var ellipsestext = "...";
    var moretext = "Read More";
    var lesstext = "Show Less";
    $('.more').each(function() {
        var content = $(this).html();
        if(content.length > minChar) {
 
            var c = content.substr(0, minChar);
            //var h = content.substr(minChar-1, content.length - minChar);
 			var h = content;	
            var html = '<div style="display:block;position:relative;margin-bottom:2rem;">' + c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><div class="text_contaiener__gradient"></div></div><div class="more content" style="display:none;margin-bottom:2rem;">' + h + '</div></span><a style="z-index:2;" href="" class="morelink">' + moretext + '</a> <img class="arrow" src="{{URL::asset('front/media/icons/home/read_more.svg')}}" alt="">';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(".text_contaiener").find('.arrow').removeClass("arrow_less"); 
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
            $(".text_contaiener").find('.arrow').addClass("arrow_less");  
        }
        $(this).prev('.content').prev().toggle();
		$(this).prev().toggle();
        return false;
    });
});

</script>
@endpush