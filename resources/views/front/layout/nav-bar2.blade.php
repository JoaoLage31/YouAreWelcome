<nav class="nav">
    <section class="nav__menu">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">
            <img src="{{URL::asset('front/media/img/logo/MenuHamburguerV2.svg')}}" alt="">
        </span>
        <div class="nav__menu__img">
            <a href="/"> <img class="nav__img" src="{{URL::asset('front/media/img/logo/logo_V2.svg')}}"></a>
        </div>
        <ul class="nav__buttons menu__buttonV2">
            @include('front.components.navbar-buttons')
        </ul>
    </section>


    <section class="nav__right_side">
        <a class="nav__right_side__button button-text" href="#">Contact Us</a>
            
            <div id="myNav" class="overlay justify-content-between">
                <div class="nav__right_side__menu">
                    <div class="top-side">
                        <div>
                            <div class="d-flex justify-content-between align-middle">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="d-flex">
                                    <a class="d-flex" href="#"><h1 class="language active"> Pt</h1></a>
                                    <a class="d-flex"  href="#"><h1 class="language"> En</h1></a>
                                    <a class="d-flex"  href="#"><h1 class="language"> Es</h1></a>
                                </div>
                                    
                                </div>
                        </div>
                        
                        <div class="overlay-content ">
                            @include('front.components.navbar-comp')
                        </div>
                    </div>
                    <div  class="nav__right_side__menu__log-in">  
                        <a class="nav__right_side__menu__log-in__element button-text" href="#">Sign Up</a>
                        <img  class="nav__right_side__menu__log-in__element"  src="{{URL::asset('front/media/icons/lock-alt-2-lock.svg')}}" alt="">
                    </div>
                </div>
                <div class="nav__right_side__tilles">
                    <div class="row justify-content-end">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4327.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4310.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4322.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4325.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4319.svg')}}" alt="">
                    </div>
                    <div class="row justify-content-end">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4321.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4318.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4332.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4331.svg')}}" alt="">
                    </div>
                    <div class="row justify-content-end">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4327.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4329.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4324.svg')}}" alt="">
                    </div>
                    <div class="row justify-content-end">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4310.svg')}}" alt="">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4330.svg')}}" alt="">
                    </div>
                    <div class="row justify-content-end">
                        <img class="section1__row__tilles_menu" src="{{URL::asset('front/media/Grupo 4327.svg')}}" alt="">
                    </div>
                </div>
            </div>
    </section>
    <ul class="nav__buttons nav__buttons2 ">
        <li>
        <a class="hover" href="#">
            <div class="menu-hover-img">
                <img src="{{('front/media/icons/other_arrows/Caminho 6.svg')}}" alt="">
            </div>
            <p class="small-title__variant">stay with us</p>
        </a>
        </li>
        <li>
            <a class="hover" href="#">
                <div class="menu-hover-img">
                    <img src="{{('front/media/icons/other_arrows/Caminho 6.svg')}}" alt="">
                </div>
                <p class="small-title__variant">buy with us</p>
            </a>
        </li>
        <li>
            <a class="hover" href="invest_us">
                <div class="menu-hover-img">
                    <img src="{{('front/media/icons/other_arrows/Caminho 6.svg')}}" alt="">
                </div>
                <p class="small-title__variant">invest with us</p>
            </a>
        </li>
    </ul>
</nav>
@push('scripts')
<script>
    
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }
    
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }

    function active_language(el) {
      $('.language').removeClass('active');
      $(el).addClass('active');
}

     $('.language').on('click', function(){
        active_language(this);
     })

</script>
@endpush