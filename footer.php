


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/anime.min.js"></script>
<script>
        $(document).ready(function(){
            var typed = new Typed(".typing", {
            strings: [
                "Passion",
                "Power",
                "Creativity"
            ],
            typeSpeed:80,
            backSpeed:80,
            loop:true
            });

            $(".skills").addClass("active")
            $(".skills .skill .skill-bar span").each(function() {
               $(this).animate({
                  "width": $(this).parent().attr("data-bar") + "%"
               }, 1000);
               $(this).append('<b>' + $(this).parent().attr("data-bar") + '%</b>');
            });
            setTimeout(function() {
               $(".skills .skill .skill-bar span b").animate({"opacity":"1"},1000);
            }, 2000);

            $("nav li a").on('click', function(event) {
            if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
            }
            });

            $("#cta a").on('click', function(event) {
            if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
            }
            });

        var $window = $(window),
        $mainMenuBar = $('header'),
        $mainMenuBarAnchor = $('#mainMenuBarAnchor');

    // Run this on scroll events.
    $window.scroll(function() {
        var window_top = $window.scrollTop();
        var div_top = $mainMenuBarAnchor.offset().top;
        if (window_top > div_top) {
            // Make the div sticky.
            $mainMenuBar.addClass('stick');
            $mainMenuBarAnchor.height($mainMenuBar.height());
        }
        else {
            // Unstick the div.
            $mainMenuBar.removeClass('stick');
            $mainMenuBarAnchor.height(0);
        }
    });
        });
        var btn = document.getElementById('cta');
        var btn2 = document.getElementById('cta2');
        btn.onclick = function(){
            $('#head_content').addClass('opa0');
            $('#head_content').removeClass('opa1');

            var morphing = anime({
            targets: '.polymorph',
            points: [
                {value: '215,110 0,110 0,0 25.2,0 51.2,71.7'},
                {value: '215,110 0,110 0,0 0,0 51.2,71.7'},
            ],
            easing: 'easeOutQuad',
            duration: 1200,
            loop: false
            });
            anime({
                targets:'#blip',
                opacity:1,
                duration:500,
                translateY:150,
            });

            var promise = morphing.finished.then(() =>{
                btn2.onclick = function(){

                $('#head_content').removeClass('opa0');
                $('#head_content').addClass('opa1');
                var morphing = anime({
                targets: '.polymorph',
                points: [
                    {value: '215,110 0,110 0,0 25.2,0 51.2,71.7'},
                    {value: '215,110 0,110 0,0 47.7,0 215,0'},
                ],
                easing: 'easeOutQuad',
                duration: 1200,
                loop: false
                });
                anime({
                targets:'#blip',
                opacity:0,
                duration:1000,
                translateY:-800
            });
                }
            });
        }

    </script>
</body>
</html>
