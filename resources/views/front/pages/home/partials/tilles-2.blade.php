<section  class="section2 row col-10 col-md-10 col-lg-10 justify-content-center">
    <section  class="section2-2 col-11 col-md-10 col-lg-9">
        @foreach($data as $key => $collection)
            @foreach($collection['items'] as $item)
                @include('front.components.tilles-2-block',[
                    'title'=>$item['title'],
                    'description'=>$item['description'],
                    'subtitle'=>$item['subtitle'],
                ])
            @endforeach
        @endforeach
    </section>  
</section>

<section class="section1 col-md-12">
    @include('front.components.tilles')
</section>

