<div class="d-flex">
    <div class="subnav col-xl-2">
        <ul>
            <li>nav</li>
            <li>nav</li>
            <li>nav</li>
            <li>nav</li>
        </ul>
    </div>
    <div id="accordion" class="">
        <div class="col-12 col-xl-6">
            @foreach($queries as $key => $collection)
                <h2>{{$collection['title']}}</h2>
                @foreach($collection['items'] as $item)
                    @include('front.components.sub_pages.whatweoffer.text_area-block',[
                        'title'=>$item['title'],
                        'description'=>$item['description'],
                        'collapse'=>$item['collapse'],
                        'key_k'=>$item['key_k'],
                    ])
                @endforeach
            @endforeach
        </div>
    </div>
</div>

@push('scripts')
<script>
    
</script>
@endpush