(function($){
    $(function(){
        $('a[href*="#our-pizza"]').on('click', function(e){
            e.preventDefault();
            console.log("Scroll event triggered");
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 250, 'linear');
        });
    });
})(jQuery);
(function($){
    $(function(){
        $('a[href*="#about-our-pizza"]').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 350, 'linear');
        });
    });
})(jQuery);
(function($){
    $(function(){
        $('a[href*="#ref"]').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500, 'linear');
        });
    });
})(jQuery);

(function($){
    $(function(){
        $('a[href*="#Photos"]').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({    
                scrollTop: $($(this).attr('href')).offset().top
            }, 600, 'linear');
        });
    });   
})(jQuery);

(function($){
    $(function(){
        $('a[href*="#contact"]').on('click', function(e){
            e.preventDefault();
            if ($(this).attr('href') !== undefined) {
                $('html, body').animate({
                    scrollTop: $($(this).attr('href')).offset().top
                }, 800, 'linear');
            }
        });
    });
})(jQuery);

(function($){
     $(function(){
        $('a[href*="#top"]').on('click', function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 400, 'linear');
})








$(".jq--nav-icon").click(function(){
    $(".nav-background, .mobile-nav-back, nav").toggleClass("js-nav-open");
    console.log("Nav toggle clicked");

  });

        // $(".jq--nav-icon").click(function(){
            
        //     $(".nav-background ").fadeToggle(200);
        //     $(".mobile-nav-back .js-nav-open").slideToggle(200);
        //     $("nav ul .js-nav-open").slideToggle(200);
          
        //   });

  
        //   $(".jq--nav-icon").click(function(){
            
        //     $(".nav-background ").fadeToggle(200);
        //     $(".mobile-nav-back ").slideToggle(200);
        //     $("nav ul").slideToggle(200);
          
        //   });

  










$(".jq--nav-icon").click(function(){
    var src = $(".jq--image-hamburger").attr("src");
    if(src !== undefined && src.endsWith("hamburger.svg")) {
        $(".jq--image-hamburger").attr("src","img/xmark-solid.svg");
        console.log("switch1");
    } else {
        $(".jq--image-hamburger").attr("src","img/hamburger.svg");
        console.log("switch2");
    }
});








      });
  })(jQuery);

