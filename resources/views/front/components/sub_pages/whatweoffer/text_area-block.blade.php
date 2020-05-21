<div class="card-header" id="">
    <h5 class="">
      <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$key_k}}" aria-expanded="true" aria-controls="collapse{{$key_k}}">
        @if (!empty($title))
            {{$title}}
        @endif
      </button>
    </h5>
  </div>
  <div id="collapse{{$key_k}}" class="card-collapse {{$key_k == 1 ? 'show' : 'collapse'}}" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="">
        @if (!empty($description))
        <p class="card-body_p">{{$description}}</p>
    @endif
    </div>
  </div>
