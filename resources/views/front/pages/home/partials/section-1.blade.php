
<section  class="section2 row col-md-8 justify-content-center">
    <section  class="section2 col-11 col-md-8">
        @foreach($data as $key => $collection)
        @foreach($collection['items'] as $item)
            @include('front.components.section-1-block',[
                'title'=>$item['title'],
                'description'=>$item['description'],
            ])
        @endforeach
        @endforeach
    </section>
</section>

<section class="section1 rotate col-md-12">
    @include('front.components.tilles')
</section>

