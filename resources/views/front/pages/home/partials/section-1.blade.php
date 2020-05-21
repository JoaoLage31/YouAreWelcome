
    <section class="section2 col-11 col-md-8 col-xl-6">
        @foreach($data as $key => $collection)
        @foreach($collection['items'] as $item)
            @include('front.components.section-1-block',[
                'title'=>$item['title'],
                'description'=>$item['description'],
            ])
        @endforeach
        @endforeach
    </section>

<section class="section1 rotate col-md-12">
    @include('front.components.tilles')
</section>

