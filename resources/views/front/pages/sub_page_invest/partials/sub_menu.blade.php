<div class="sub-menu sidebar__inner">
    <div id="sub-menu__menu" class="col-xl-10 sub-menu__menu">
        @foreach($button as $key => $collection)
            @foreach($collection['items'] as $item)
            @include('front.components.home.invest.button_invest',[
                'button'=>$item['button'],
            ])
            @endforeach
        @endforeach

    </div>
</div>
@push('scripts')
<script>
    var header = document.getElementById("sub-menu__menu");
        var btns = header.getElementsByClassName("sub-menu__menu__button");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("sub-menu__menu__button__active");
        current[0].className = current[0].className.replace(" sub-menu__menu__button__active", "");
        this.className += " sub-menu__menu__button__active";
        });
    }

    var sidebar = new StickySidebar('#sidebar', {
        containerSelector: '#main-content',
        innerWrapperSelector: '.sidebar__inner',
        topSpacing: 20,
        bottomSpacing: 20
    });
</script>
@endpush