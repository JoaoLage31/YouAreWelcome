    <section  class="section2 col-12 col-md-10 col-lg-7">
        @foreach($data as $key => $collection)
            @foreach($collection['items'] as $item)
            <div class="V2">
                @include('front.components.tilles-2-block',[
                    'title'=>$item['title'],
                    'description'=>$item['description'],
                    'subtitle'=>$item['subtitle'],
                ])
            </div>
            @endforeach
        @endforeach
    </section>

<section class="rotate col-md-12">
    @include('front.components.tilles')
</section>

