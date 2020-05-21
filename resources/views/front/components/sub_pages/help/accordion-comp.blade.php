

<div class="card-header">
    <h5>
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key_k}}" aria-expanded="true">
        @if(!empty($title))
            {{$title}}
        @endif
      </button>
    </h5>
</div>
<div id="collapse{{$key_k}}" class="card-collapse {{$key_k == 0 ? 'show' : 'collapse'}}" aria-labelledby="headingOne{{$key_k}}" data-parent="#accordion">
    <div class="">
        @if (!empty($description))
        <p class="card-body_p">{{$description}}</p>
    @endif
    </div>
</div>