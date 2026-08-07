<!-- GSAP Core + ScrollTrigger + 3D Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/InertiaPlugin.min.js"></script>
<!-- GSAP Core + ScrollTrigger + 3D Plugins -->

<!-- Bootstrap CDN -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap CDN -->

<!-- Fancybox CDN  -->
<script src='https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js'></script>
<!-- Fancybox CDN  -->

<!-- Slick Slider CDN -->
<script src="slick/slick.min.js"></script>
<!-- Slick Slider CDN -->


<!-- Swiper Slider  -->
<script src="js/swiper.js"></script>
<!-- Swiper Slider  -->

<!-- Main Js -->
<script src="js/main.js"></script>
<!-- Main Js -->
<!-- Wow Js CDN -->
<script src="js/wow.min.js"></script>
<!-- AOS ANIMTAION CDN -->

<script>
new WOW().init();
</script>

<!-- Animation CDN  -->
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.27/bundled/lenis.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
<!-- Animation CDN  -->


<!-- navbar active script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentLocation = location.href;
        const menuItems = document.querySelectorAll('.kf-nav__link');

        menuItems.forEach(menuItem => {
            if (menuItem.href === currentLocation) {
                document.querySelector('.kf-nav__link.active').classList.remove('active');
                menuItem.classList.add('active');
            }
        });
    });
</script>
<!-- navbar-active -->
<script>
    const CurrentLocation = location.href;
    const menuItem = document.querySelectorAll('.kf-nav__list li a');
    const menuLength = menuItem.length
    for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === CurrentLocation) {
            // menuItem[i].className = "active";
            menuItem[i].classList.add('active');
        }
    }
</script>


<!-- Text Animation  -->
<script>
document.querySelectorAll(".ml14 .letters").forEach(function(textWrapper) {
    textWrapper.innerHTML = textWrapper.textContent.replace(
        /\S/g,
        "<span class='letter'>$&</span>",
    );
});

document.querySelectorAll(".ml14").forEach(function(ml14, index) {
    var animation = anime
        .timeline({
            autoplay: false,
        })
        .add({
            targets: ml14.querySelector(".line"),
            scaleX: [0, 1],
            opacity: [0.5, 1],
            easing: "easeInOutExpo",
            duration: 100,
        })
        .add({
            targets: ml14.querySelectorAll(".letter"),
            opacity: [0, 1],
            translateX: [40, 0],
            translateZ: 0,
            scaleX: [0.3, 1],
            easing: "easeOutExpo",
            duration: 800,
            offset: "-=600",
            delay: function(el, i) {
                return 150 + 50 * i;
            },
        })
        .add({
            targets: ml14,
            opacity: 1,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 500,
        });
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animation.play();
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2,
        },
    );

    observer.observe(ml14);
});
</script>

<script>
$(document).ready(function(){
    // Initialize Inner Card Sliders with Line Dots
    $('.inner-card-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 400,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        fade: true /* Fade transition matches design smooth look */
    });
});
</script>
<!-- newslatter -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    // Smooth reveal animation when section enters viewport
    gsap.from("#newsletterSec .newsletter-card", {
        scrollTrigger: {
            trigger: "#newsletterSec",
            start: "top 80%",
            toggleActions: "play none none reverse"
        },
        scale: 0.95,
        opacity: 0,
        y: 30,
        duration: 0.9,
        ease: "power2.out"
    });
});
</script>
