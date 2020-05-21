<div class="col-xl-11 help">
    <div class="subnav col-xl-3">
        <h2>Browse by topic</h2>
        @foreach($queries as $key => $collection)
            <button id="{{$key == 0 ? '' : 'none'}} slider{{$key}}"{{-- id="slide{{$key}}" --}} class="button_help {{$key == 0 ? 'button_help_active' : ''}}" data-target=".button_help{{$key}}"> {{$collection['title']}}</button>
        @endforeach
    </div>
    @php
    $key_k = 0;
    @endphp
    <div class="col-1"></div>
    <div class="help__queries col-xl-7">
        <h2>Top Queries</h2>
        <div id="accordion">
        @foreach($queries as $key=>$collection)
       
                <div class="accordion {{$key == 0 ? '' : 'accordion_none'}} button_help{{$key}}">
                    @foreach($collection['items'] as $item)
                        @include('front.components.sub_pages.help.accordion-comp',[
                            'title'=>$item['title'],
                            'description'=>$item['description'],
                            ])
                            @php
                            $key_k++;
                            @endphp
                    @endforeach
                </div>
                
        @endforeach
    </div>
    </div>
</div>

@push('scripts')
<script>
    function filter_help(el) {
      $('.button_help').removeClass('button_help_active');    
      $('.accordion').addClass('accordion_none');
      var idSlide = $(el).attr("data-target");
      $(el).addClass('button_help_active');
      $(idSlide).removeClass('accordion_none');
}

     $('.button_help').on('click', function(){
        filter_help(this);
     })

</script>
@endpush