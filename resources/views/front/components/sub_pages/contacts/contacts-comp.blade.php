<div class="contacts_form_left__container">
    @if(!empty($field_title))
        <h5>{{$field_title}}</h5>
    @endif
    @if(!empty($field))
        <p>
            {{$field}}
            @if(!empty($link))
            <a href="#">
                {{$link}}
            </a>
            @endif
        </p>
    @endif
</div>