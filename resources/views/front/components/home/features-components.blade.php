<div class="slide_home_section__container_info__features__data">
   @if(!empty($check_in))
        <div class="slide_home_section__container_info__features__data__individual">
            <h3>Check In</h3>
            <h4>{{$check_in}}</h4>
        </div>
    @endif
    @if(!empty($checkout))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Check-Out</h3>
        <h4>{{$checkout}}</h4>
    </div>
    @endif
    @if(!empty($area))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Àrea</h3>
        <h4>{{$area}}</h4>
    </div>
    @endif
    @if(!empty($floor))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Piso</h3>
        <h4>{{$floor}}</h4>
    </div>
    @endif
    @if(!empty($type))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Tipo</h3>
        <h4>{{$type}}</h4>
    </div>
    @endif
   
    @if(!empty($field__2))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Nº Quartos</h3>
        <h4>{{$field__2}}</h4>
    </div>
    @endif
    @if(!empty($elevator))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Elevador</h3>
        <h4>{{$elevator}}</h4>
    </div>
    @endif
    @if(!empty($field__3))
    <div class="slide_home_section__container_info__features__data__individual">
        <h3>Nº Banheiro</h3>
        <h4>{{$field__3}}</h4>
    </div>
    @endif
</div>

@if(!empty($adress))
    <div class="slide_home_section__container_info__mapa__adress">
        <h3>Morada</h3>
        <h4>{{$adress}}</h4>
    </div>
@endif

