
<div class="cards_offer col-xl-11">
    <div id="work" class="cards_invest_title">
        <div  class="section2 row col-md-8 justify-content-center">
            <div class="">
                @foreach($title as $key => $collection)
                    @foreach($collection['items'] as $item)
                        @include('front.components.section-1-block',[
                            'subtitle'=>$item['subtitle'],
                            'title'=>$item['title'],
                        ])
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    
    <div class="cards_invest">
        @include('front.components.home.invest.cards') 
    </div>

</div>
@include('front.components.button') 

@push('scripts')
<script>



</script>
@endpush