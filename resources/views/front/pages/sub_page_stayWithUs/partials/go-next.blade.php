<div class="go-next">
@php
    $k = 10;
    $j = 1
@endphp
<img class="go-next__svg-arrow" src="{{URL::asset('front/media/icons/other_arrows/ic-arrows-left.svg')}}" alt="">
<div class="d-flex col-2 justify-content-center">
    <p class="go-next__increment">{{$j}}</p>
    <p>/</p>
    <p>{{$k}}</p>
</div>
<img class="go-next__svg-arrow" src="{{URL::asset('front/media/icons/other_arrows/ic-arrows-right.svg')}}" alt="">
</div>

@push('scripts')

<script>
</script>

@endpush