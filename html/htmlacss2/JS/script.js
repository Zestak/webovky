(function($){
    $(function(){
        $('a[href*="#our-pizza"]').on('click', function(e){
            e.preventDefault();
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

