<header class="header">
    <div class="header-wrapper">
        <a class="name">Rahat <span class="text-theme">Chowdhury</span></a>
        <div class="menu">
            <a class="active" href="#Home">Home</a>
            <a href="#AboutMe">About</a>
            <a href="#Services">Services</a>
            <a href="#Works">Works</a>
            <a href="#Expertises">Resume</a>
            <a href="#Contact">Contacts</a>
        </div>
        <div class="menu-bar" onclick="toggleMenu(event)">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="mobile-menu">
        <a class="active mobile-link" href="#Home">Home</a>
        <a class=" mobile-link" href="#AboutMe">About</a>
        <a class=" mobile-link" href="#Services">Services</a>
        <a class=" mobile-link" href="#Works">Works</a>
        <a class=" mobile-link" href="#Expertises">Resume</a>
        <a class=" mobile-link" href="#Contact">Contacts</a>
    </div>
</header>
<script>
    $(window).scroll(function() {
        let  scroll = $(window).scrollTop();
        if (scroll >= 200) {
            $(".header").addClass("active");
            $(".mobile-menu").addClass("show");
        }else{
            $(".header").removeClass("active");
            $(".mobile-menu").removeClass("show");
        }
    });

    $(document).ready(function () {
        $(function () {
            $('.menu a').click(function (e) {
                $('a').removeClass('active');
                $(this).addClass('active');
            });
        });
    });
    $(document).ready(function () {
        $(function () {
            $('.mobile-link').click(function (e) {
                $('.mobile-menu').removeClass('active');
                $('.menu-bar').removeClass('active')
            });
        });
    });

    toggleMenu = (e) => {
        let trigger = $(e.target).closest('.header-wrapper').find('.menu-bar')
        if(trigger.hasClass('active')){
            $('.menu-bar').removeClass('active')
            $('.mobile-menu').removeClass('active')
        }else{
            $('.menu-bar').addClass('active')
            $('.mobile-menu').addClass('active')
        }
    }
</script>
