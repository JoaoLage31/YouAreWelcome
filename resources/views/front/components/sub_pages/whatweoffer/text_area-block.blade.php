<div class="card-header" id="headingOne">
    <h5 class="">
      <button class="btn btn-link" data-toggle="collapse" data-target="#{{$collapse}}" aria-expanded="true" aria-controls="{{$collapse}}">
        @if (!empty($title))
            {{$title}}
        @endif
      </button>
    </h5>
  </div>
  <div id="{{$collapse}}" class="card-collapse {{$key_k == 1 ? 'show' : 'collapse'}}" aria-labelledby="headingOne" data-parent="#accordion">
    <div class="">
        @if (!empty($description))
        <p class="card-body_p">{{$description}}</p>
    @endif
    </div>
  </div>
