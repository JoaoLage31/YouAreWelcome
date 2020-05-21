$(document).ready(function() { 
    AOS.init({
        once: true,
        duration: 1200
    })
 });

 $(document).ready(function(){
    $(".sub-menu__menu__button").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
          window.location.hash = hash;
        });
      }
    });
  });


