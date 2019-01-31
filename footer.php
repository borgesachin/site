



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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