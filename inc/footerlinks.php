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
<!-- Text Animation  -->
<script>
(function() {
    "use strict";

    // DOM refs
    const wrapper = document.getElementById('kiteWrapper');
    const kiteBody = document.getElementById('kiteBody');
    const tailGroup = document.getElementById('tailGroup');
    const kiteString = document.getElementById('kiteString');


    // ---- SMOOTH FOLLOW (GSAP ticker) ----
    // we use gsap.ticker for ultra-smooth, frame-accurate updates
    gsap.ticker.add(() => {
        gsap.to(wrapper, {
            x: mouseX,
            y: mouseY,
            duration: 0.4,
            ease: "power2.out",
            overwrite: 'auto'
        });
    });

    // ---- KITE SWAY (body rotation) ----
    // organic, slow pendulum swing
    gsap.to(kiteBody, {
        rotation: 16,
        transformOrigin: "50% 20%",
        duration: 2.2,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // also a subtle scale "breathe" to make it alive
    gsap.to(kiteBody, {
        scale: 1.02,
        transformOrigin: "50% 20%",
        duration: 2.6,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // ---- TAIL FLUTTER (rotation + scale) ----
    // quick, playful flapping
    gsap.to(tailGroup, {
        rotation: 22,
        transformOrigin: "50% 0%",
        duration: 0.6,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // secondary tail wave (slight scale)
    gsap.to(tailGroup, {
        scaleX: 1.1,
        scaleY: 1.05,
        transformOrigin: "50% 0%",
        duration: 0.8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // ---- STRING WAVE (morphing path) ----
    // two alternating path states for a flowing wave
    const stringPath1 = "M110 150 C120 172 94 188 108 210";
    const stringPath2 = "M110 150 C105 168 130 182 115 206";
    const stringPath3 = "M110 150 C135 170 88 190 102 208";

    // cycle through multiple path variations for richer wave
    let stringIndex = 0;
    const stringPaths = [stringPath1, stringPath2, stringPath3];

    // create a timeline that loops through path changes
    function animateString() {
        const nextPath = stringPaths[(stringIndex + 1) % stringPaths.length];
        gsap.to(kiteString, {
            attr: {
                d: nextPath
            },
            duration: 0.9,
            ease: "sine.inOut",
            onComplete: () => {
                stringIndex = (stringIndex + 1) % stringPaths.length;
                animateString(); // loop
            }
        });
    }
    // start the string animation
    animateString();

    // also add a gentle rotation to the string group for extra life
    gsap.to(kiteString, {
        rotation: 3,
        transformOrigin: "110px 150px",
        duration: 1.8,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // ---- ADDITIONAL PLAYFUL DETAILS ----
    // small bounce on the whole kite wrapper (subtle float)
    gsap.to(wrapper, {
        y: "+=6",
        duration: 2.4,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
    });

    // extra shimmer on the orange accents (opacity pulse)
    const orangeAccents = document.querySelectorAll(
        'circle[fill="url(#orangeAccent)"], path[fill="url(#orangeAccent)"]');
    if (orangeAccents.length) {
        gsap.to(orangeAccents, {
            opacity: 0.7,
            duration: 1.2,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            stagger: 0.15
        });
    }

    // ---- RESIZE HANDLER (optional) ----
    window.addEventListener('resize', () => {
        // just keep cursor in bounds if needed, but mouse coords will update naturally
    });

    console.log('✨ Kite cursor with GSAP animation — उड़ान शुरू!');
})();

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
