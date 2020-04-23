@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @include('front.components.home.form',[
            'title'=>$item['title'],
        ])
    @endforeach
@endforeach

<form class="col-10 home_form" action="">
    @include('front.pages.sub_home_types.partials_global.form')
</form>