<section  class="section2 row col-md-7 justify-content-center">
    <section  class="help_intro">
        @foreach($data as $key => $collection)
            @foreach($collection['items'] as $item)
                @include('front.components.section-1-block',[
                    'subtitle'=>$item['subtitle'],
                    'title'=>$item['title'],
                ])
            @endforeach
        @endforeach
    </section>
</section>

@include('front.components.tilles')
