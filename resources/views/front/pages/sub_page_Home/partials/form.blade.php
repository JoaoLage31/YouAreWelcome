@foreach($data as $key=>$collection)
    @foreach($collection['items'] as $item)
        @include('front.components.home.form',[
            'title'=>$item['title'],
        ])
    @endforeach
@endforeach



<form class="col-10 home_form" action="">
    <div class="home_form__container">
        <span class="home_form__icon"><img  src="{{URL::asset('front/media/icons/home/form/Edit.svg')}}" alt="" alt=""></span>
          <input type="text" class="home_form__input" placeholder="Your Name">
    </div>
    <div class="home_form__container">
        <span class="home_form__icon"><img  src="{{URL::asset('front/media/icons/home/form/Edit.svg')}}" alt="" alt=""></span>
          <input type="text" class="home_form__input" placeholder="Your Contact">
    </div>
    <div class="home_form__container">
        <span class="home_form__icon"><img  src="{{URL::asset('front/media/icons/home/form/mentions.svg')}}" alt="" alt=""></span>
          <input type="text" class="home_form__input" placeholder="Your Email">
    </div>


    <div class="home_form__container">
        <span class="home_form__icon"><img  src="{{URL::asset('front/media/icons/home/form/help-alt-3.svg')}}" alt="" alt=""></span>
        <select class="home_form__input">
            <option class="home_form__option" value=""disabled selected>Select one of our services / areas</option>
            <option class="home_form__option" value="volvo">First</option>
            <option class="home_form__option" value="saab">Second</option>
            <option class="home_form__option"  value="opel">Third</option>
            <option class="home_form__option" value="audi">Fourth</option>
        </select>
      </div>

      <div class="home_form__container__last">
        <span class="home_form__icon__last"><img  src="{{URL::asset('front/media/icons/home/form/Edit.svg')}}" alt="" alt=""></span>
        <textarea class="home_form__input home_form__input__last" placeholder="Write your message" ></textarea>
      </div>

    <div class="home_form__policy">
        <p>Consent: By submitting your details, you consent to us getting in touch with your enquiry. For more information on how we store your details see ourm 
            <a href=""> 
                <b> Privacy Policy. </b>
            </a></p>
    </div>
    <input class="home_form__submit" type="submit">
</form>