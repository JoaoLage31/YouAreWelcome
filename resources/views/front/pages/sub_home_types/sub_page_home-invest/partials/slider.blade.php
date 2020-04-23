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
            </div>
        @endforeach
    @endforeach 
</div>



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