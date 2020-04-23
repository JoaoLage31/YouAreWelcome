<div class="home_ind">
    <div class="home_ind__container col-12 col-md-10 col-lg-10 col-xl-11">
        <div class="col-12 col-xl-11 home_ind__container__invest-sec">
            <div>
                <h2 class="home_ind__container__invest-sec-title">Documents</h2>
                <div class="home_ind__container__invest-line"></div>
            </div>
            @foreach($result as $key=>$collection)
                @foreach($collection['items'] as $item)
                    @foreach($item["documents"] as $documents)
                    <div class="home_ind__container__invest__download-c">
                        @if(!empty($documents))
                            <h2 class="home_ind__container__invest-documents">{{$documents}}</h2>
                            <a href="#" class="home_ind__container__invest__download-c__a">
                                <p class="home_ind__container__invest-download">Download</p>
                                <img class="" src="{{URL::asset('front/media/icons/Download-Alt2.svg')}}" alt="">
                            </a>
                        @endif
                    </div>
                    @endforeach
                @endforeach
            @endforeach
        </div>
    </div>
</div>

<div class="col-11 slide_home_section__line"></div>