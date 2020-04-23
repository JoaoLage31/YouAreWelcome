@if(!empty($button))
    <a class="sub-menu__menu__button {{$key == 0 ? 'sub-menu__menu__button__active' : ''}}" href="#{{$link}}">{{$button}}</a>
@endif