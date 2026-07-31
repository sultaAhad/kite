// Banner GSAP Animation
gsap.registerPlugin(ScrollTrigger);
document.addEventListener("DOMContentLoaded", () => {
	const ship = document.querySelector(".boat______image");

	if (!ship) return;

	gsap.set(ship, {
		transformOrigin: "50% 80%",
	});

	const sail = gsap.timeline({
		repeat: -1,
		yoyo: true,
		ease: "sine.inOut",
	});
	sail
		.to(ship, {
			x: 100,
			y: -35,
			rotation: 2.5,
			duration: 8,
		})
		.to(ship, {
			x: -100,
			y: 15,
			rotation: -2.5,
			duration: 8,
		});
	gsap.to(ship, {
		y: "+=18",
		duration: 3.5,
		repeat: -1,
		yoyo: true,
		ease: "sine.inOut",
	});
	gsap.to(ship, {
		rotation: 1.5,
		duration: 4,
		repeat: -1,
		yoyo: true,
		ease: "sine.inOut",
	});

	// Slight depth movement
	gsap.to(ship, {
		scale: 1.02,
		duration: 5,
		repeat: -1,
		yoyo: true,
		ease: "sine.inOut",
	});
});

gsap.fromTo(
	".banner___card",
	{
		opacity: 0,
		y: 40,
		filter: "blur(10px)",
	},
	{
		opacity: 1,
		y: 0,
		filter: "blur(0px)",
		duration: 1,
		stagger: 0.15,
		ease: "power3.out",
		scrollTrigger: {
			trigger: ".banner_____cards_____wrapper",
			start: "top 85%",
			toggleActions: "play reverse play reverse",
		},
	},
);
// Banner GSAP Animation

// community Slider
$(".comunnity_____slider").on(
	"afterChange",
	function (event, slick, currentSlide) {
		gsap.fromTo(
			".slick-center .community_____wrapper",
			{
				y: 30,
				opacity: 0.7,
				filter: "blur(8px)",
			},
			{
				y: 0,
				opacity: 1,
				filter: "blur(0px)",
				duration: 0.8,
				ease: "power3.out",
			},
		);
	},
);
// community Slider

// events Card Animation
document.querySelectorAll(".event_____image").forEach((card) => {
	const image = card.querySelector("img");
	card.addEventListener("mousemove", (e) => {
		const rect = card.getBoundingClientRect();
		const x = (e.clientX - rect.left) / rect.width - 0.5;
		const y = (e.clientY - rect.top) / rect.height - 0.5;
		gsap.to(image, {
			x: x * 40,
			y: y * 40,
			scale: 1.12,
			rotationY: x * 15,
			rotationX: -y * 15,
			transformPerspective: 1500,
			duration: 0.5,
			ease: "power3.out",
		});
	});
	card.addEventListener("mouseleave", () => {
		gsap.to(image, {
			x: 0,
			y: 0,
			scale: 1,
			rotationX: 0,
			rotationY: 0,
			duration: 1,
			ease: "expo.out",
		});
	});
});
// events Card Animation

// sell cards Animaition
gsap.utils.toArray(".sell_____wrapper").forEach((card, i) => {
	gsap.from(card, {
		scrollTrigger: {
			trigger: card,
			start: "top 85%",
		},

		x: i % 2 ? 60 : -60,
		y: 60,
		opacity: 0,
		scale: 0.9,
		duration: 0.75,
		ease: "expo.out",
	});
});
// sell cards Animaition

// map Aniamtion
gsap.from(".map_____container", {
	scrollTrigger: {
		trigger: ".map_____container",
		start: "top 80%",
		toggleActions: "play reverse play reverse",
	},
	scale: 0.94,
	y: 50,
	opacity: 0,
	filter: "blur(15px)",
	duration: 1,
	ease: "expo.out",
	clearProps: "filter",
});
gsap.to(".pin____dot", {
	scale: 2,
	opacity: 0,
	duration: 2,
	repeat: -1,
	ease: "power1.out",
});
gsap.to(".map____scatter____dot", {
	scale: 1.8,
	opacity: 0.25,
	duration: 1.8,
	repeat: -1,
	stagger: 0.3,
	yoyo: true,
	ease: "sine.inOut",
});
gsap.fromTo(
	".map-scan",
	{
		y: "-100%",
	},
	{
		y: "100%",
		duration: 5,
		repeat: -1,
		ease: "none",
	},
);
gsap.to(".map____badge", {
	y: -4,
	duration: 2,
	stagger: 0.2,
	repeat: -1,
	yoyo: true,
	ease: "sine.inOut",
});
// map Aniamtion

// feed-section Animation
window.addEventListener("load", () => {
	gsap.fromTo(
		".story____item",
		{
			y: 40,
			opacity: 0,
			scale: 0.8,
		},
		{
			y: 0,
			opacity: 1,
			scale: 1,
			duration: 0.8,
			stagger: 0.1,
			ease: "back.out(1.7)",
			scrollTrigger: {
				trigger: ".feed____stories",
				start: "top 80%",
				toggleActions: "play none none none",
			},
		},
	);
	gsap.to(".story____avatar img", {
		y: -5,
		duration: 2,
		repeat: -1,
		yoyo: true,
		ease: "sine.inOut",
		stagger: {
			each: 0.2,
			from: "random",
		},
	});
	gsap.fromTo(
		".feed_____wrapper",
		{
			y: 100,
			opacity: 0,
			filter: "blur(10px)",
		},
		{
			y: 0,
			opacity: 1,
			filter: "blur(0px)",
			duration: 1,
			stagger: 0.15,
			ease: "power3.out",
			scrollTrigger: {
				trigger: ".feed_____main",
				start: "top 75%",
				toggleActions: "play none none none",
			},
		},
	);
	gsap.utils.toArray(".feed_____image img").forEach((img) => {
		gsap.to(img, {
			scale: 1.08,
			duration: 8,
			ease: "none",
			scrollTrigger: {
				trigger: img,
				start: "top bottom",
				end: "bottom top",
				scrub: true,
			},
		});
	});
	gsap.to(".live____badge", {
		scale: 1.08,
		duration: 0.8,
		repeat: -1,
		yoyo: true,
		ease: "power1.inOut",
	});
	gsap.to(".play_____wrapper", {
		y: -8,
		duration: 1.5,
		repeat: -1,
		yoyo: true,
		ease: "sine.inOut",
	});
	document.querySelectorAll(".feed_____wrapper").forEach((card) => {
		card.addEventListener("mouseenter", () => {
			gsap.to(card, {
				y: -12,
				scale: 1.03,
				duration: 0.4,
				ease: "power3.out",
			});
			const img = card.querySelector("img");
			if (img) {
				gsap.to(img, {
					scale: 1.12,
					duration: 0.6,
				});
			}
		});
		card.addEventListener("mouseleave", () => {
			gsap.to(card, {
				y: 0,
				scale: 1,
				duration: 0.4,
				ease: "power3.out",
			});
			const img = card.querySelector("img");
			if (img) {
				gsap.to(img, {
					scale: 1,
					duration: 0.6,
				});
			}
		});
	});
	ScrollTrigger.refresh();
});
// feed-section Animation

// Cursor Animation
gsap.set(".ball", { xPercent: -50, yPercent: -50 });
let targets = gsap.utils.toArray(".ball");
window.addEventListener("mousemove", (e) => {
	gsap.to(targets, {
		duration: 0.25,
		x: e.clientX + 30,
		y: e.clientY + 10,
		ease: "none",
		overwrite: "auto",
	});
});
$(".target-heading").on("mouseenter", function () {
	gsap.to(targets, {
		scale: 10,
		backgroundColor: "rgba(255,255,255,0.9)",
		backdropFilter: "blur(10px)",
		duration: 0.3,
		ease: "power2.out",
	});
	gsap.to(this, {
		color: "#ffffff",
		duration: 0.2,
	});
});
$(".target-heading").on("mouseleave", function () {
	gsap.to(targets, {
		scale: 1,
		backgroundColor: "var(--secondary-color)",
		backdropFilter: "blur(0px)",
		duration: 0.3,
		ease: "power2.out",
	});
	gsap.to(this, {
		color: "#ffffff",
		duration: 0.2,
	});
});
// Cursor Animation

// Loader JS
$(window).on("load", function () {
	$(".loader").fadeOut(1500);
});
// Loader JS

// header Nav active
$(document).ready(function () {
	let currentUrl = window.location.href;
	$(".header-link").each(function () {
		let linkUrl = this.href;
		if (currentUrl === linkUrl) {
			$(this).addClass("active");
		}
	});
});

// community Slider
$(".comunnity_____slider").slick({
	centerMode: true,
	centerPadding: "250px",
	slidesToShow: 3,
	autoplay: true,
	arrows: false,
	responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: "40px",
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: "40px",
				slidesToShow: 1,
			},
		},
	],
});
// community Slider

// map JS
document.addEventListener("DOMContentLoaded", () => {
	const lakesData = [
		{
			id: "havasu",
			name: "Lake Havasu",
			state: "AZ / CA",
			wind: "6mph",
			marinas: "12 marinas",
			temp: "82°F",
			trending: true,
			coordinates: { top: "35%", left: "22%" },
			activeBoats: "184 active",
		},
		{
			id: "ozarks",
			name: "Lake of the Ozarks",
			state: "MO",
			wind: "9mph",
			marinas: "28 marinas",
			temp: "78°F",
			trending: true,
			coordinates: { top: "25%", left: "60%" },
			activeBoats: "342 active",
		},
		{
			id: "smith",
			name: "Smith Mountain Lake",
			state: "VA",
			wind: "4mph",
			marinas: "9 marinas",
			temp: "75°F",
			trending: false,
			coordinates: { top: "65%", left: "75%" },
			activeBoats: "98 active",
		},
		{
			id: "tahoe",
			name: "Lake Tahoe",
			state: "CA / NV",
			wind: "11mph",
			marinas: "17 marinas",
			temp: "68°F",
			trending: false,
			coordinates: { top: "52%", left: "42%" },
			activeBoats: "207 active",
		},
	];

	const cardsStack = document.getElementById("lake-cards-stack");
	const mapContainer = document.getElementById("map-graphic-container");
	function renderMap(activeLakeId) {
		const mapImage = mapContainer.querySelector("img");
		mapContainer.innerHTML = "";
		mapContainer.appendChild(mapImage);

		lakesData.forEach((lake) => {
			const isCurrentActive = lake.id === activeLakeId;
			const element = document.createElement("div");
			element.style.top = lake.coordinates.top;
			element.style.left = lake.coordinates.left;

			if (isCurrentActive) {
				element.className =
					"map____pin position-absolute d-flex flex-column align-items-center";
				element.innerHTML = `
                    <span class="pin____dot"></span>
                    <div class="pin____tooltip rounded-pill px-3 py-1 text-white level-10">
                        ${lake.name.split(" ")[1] || lake.name} - ${lake.activeBoats}
                    </div>
                `;
			} else {
				element.className = "map____scatter____dot position-absolute";
				element.style.cursor = "pointer";
				element.addEventListener("click", () => {
					renderCards(lake.id);
					renderMap(lake.id);
				});
			}
			mapContainer.appendChild(element);
		});
	}
	function renderCards(activeLakeId) {
		cardsStack.innerHTML = "";
		lakesData.forEach((lake) => {
			const isActiveClass = lake.id === activeLakeId ? "active-card-glow" : "";
			const trendingBadge = lake.trending
				? `<span class="badge badge-orange text-uppercase pe-2 py-0.5 rounded-pill">Trending</span>`
				: "";
			const colClass = `col-lg-${cardsStack.dataset.col}`;
			const cardHTML = `
    <div class="${colClass}">
        <div class="lake_____card rounded-4 p-3 d-flex justify-content-between align-items-start border____fade ${isActiveClass}" data-id="${lake.id}">
            <div class="lake____card____details">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <h3 class="level-4 heading-font text-white mb-0 text-uppercase tracking-1">${lake.name}</h3>
                    ${trendingBadge}
                </div>
                <p class="level-10 primary-regular-font extra-color-1 mb-1 d-flex align-items-center gap-1">
                    <img src="img/location-icon.svg" alt="" width="10">
                    ${lake.state}
                </p>
                <div class="d-flex align-items-center gap-3 level-10 primary-regular-font extra-color-1">
                    <span class="d-flex align-items-center gap-1">
                        <img src="img/wind-icon.png" alt="" width="12">
                        ${lake.wind}
                    </span>
                    <span class="d-flex align-items-center gap-1">
                        <img src="img/marina-icon.png" alt="" width="12">
                        ${lake.marinas}
                    </span>
                </div>
            </div>
            <div class="lake____card____temp">
                <span class="level-4 heading-font secondary-color">${lake.temp}</span>
            </div>
        </div>
    </div>
`;
			cardsStack.insertAdjacentHTML("beforeend", cardHTML);
		});
		document.querySelectorAll(".lake_____card").forEach((card) => {
			card.addEventListener("click", function () {
				const selectedId = this.getAttribute("data-id");
				renderCards(selectedId);
				renderMap(selectedId);
			});
		});
		gsap.to(".active-card-glow", {
			backgroundPosition: "200% 50%",
			duration: 4,
			ease: "none",
			repeat: -1,
			yoyo: true,
		});
	}
	renderCards("tahoe");
	renderMap("tahoe");
});
// map JS

// mapbox JS
// document.addEventListener("DOMContentLoaded", () => {
// 	mapboxgl.accessToken = "YOUR_MAPBOX_ACCESS_TOKEN";
// 	const lakesData = [
// 		{
// 			id: "havasu",
// 			name: "Lake Havasu",
// 			state: "AZ / CA",
// 			wind: "6mph",
// 			marinas: "12 marinas",
// 			temp: "82°F",
// 			trending: true,
// 			coordinates: [-114.3489, 34.4696], // [Lng, Lat]
// 			activeBoats: "184 active",
// 		},
// 		{
// 			id: "ozarks",
// 			name: "Lake of the Ozarks",
// 			state: "MO",
// 			wind: "9mph",
// 			marinas: "28 marinas",
// 			temp: "78°F",
// 			trending: true,
// 			coordinates: [-92.6247, 38.2012], // [Lng, Lat]
// 			activeBoats: "342 active",
// 		},
// 		{
// 			id: "smith",
// 			name: "Smith Mountain Lake",
// 			state: "VA",
// 			wind: "4mph",
// 			marinas: "9 marinas",
// 			temp: "75°F",
// 			trending: false,
// 			coordinates: [-79.5392, 37.0504], // [Lng, Lat]
// 			activeBoats: "98 active",
// 		},
// 		{
// 			id: "tahoe",
// 			name: "Lake Tahoe",
// 			state: "CA / NV",
// 			wind: "11mph",
// 			marinas: "17 marinas",
// 			temp: "68°F",
// 			trending: false,
// 			coordinates: [-120.0324, 39.0968], // [Lng, Lat]
// 			activeBoats: "207 active",
// 		},
// 	];
// 	const cardsStack = document.getElementById("lake-cards-stack");
// 	let map;
// 	let mapMarkers = [];
// 	try {
// 		map = new mapboxgl.Map({
// 			container: "map-graphic-container",
// 			style: "mapbox://styles/mapbox/dark-v11",
// 			center: [-120.0324, 39.0968],
// 			zoom: 9.5,
// 			pitch: 45,
// 			bearing: -15,
// 		});
// 		map.on("style.load", () => {
// 			const layersToHide = [
// 				"road-label",
// 				"transit-label",
// 				"poi-label",
// 				"airport-label",
// 				"natural-point-label",
// 				"natural-line-label",
// 				"state-label",
// 				"country-label",
// 			];
// 			layersToHide.forEach((layerId) => {
// 				if (map.getLayer(layerId)) {
// 					map.setLayoutProperty(layerId, "visibility", "none");
// 				}
// 			});
// 			if (map.getLayer("water")) {
// 				map.setPaintProperty("water", "fill-color", "#051824");
// 				map.setPaintProperty("water", "fill-opacity", 1);
// 			}
// 			if (map.getLayer("road-minor")) {
// 				map.setPaintProperty(
// 					"road-minor",
// 					"line-color",
// 					"rgba(0, 210, 255, 0.05)",
// 				);
// 			}
// 			if (map.getLayer("road-primary")) {
// 				map.setPaintProperty(
// 					"road-primary",
// 					"line-color",
// 					"rgba(0, 210, 255, 0.12)",
// 				);
// 			}
// 			renderMapMarkers("tahoe");
// 		});
// 	} catch (e) {
// 		console.error("Mapbox interface loading script failed:", e);
// 	}
// 	function renderMapMarkers(activeLakeId) {
// 		if (!map) return;
// 		mapMarkers.forEach((marker) => marker.remove());
// 		mapMarkers = [];
// 		lakesData.forEach((lake) => {
// 			const isCurrentActive = lake.id === activeLakeId;
// 			const el = document.createElement("div");
// 			if (isCurrentActive) {
// 				el.className =
// 					"map____pin d-flex flex-column align-items-center position-relative";
// 				el.innerHTML = `
// 					<span class="pin____dot"></span>
// 					<div class="pin____tooltip rounded-pill px-3 py-1 text-white level-10">
// 						${lake.name.split(" ")[1] || lake.name} - ${lake.activeBoats}
// 					</div>
// 				`;
// 				map.flyTo({
// 					center: lake.coordinates,
// 					zoom: 9.5,
// 					essential: true,
// 					duration: 1800,
// 				});
// 			} else {
// 				el.className = "map____scatter____dot";
// 				el.style.cursor = "pointer";
// 				el.addEventListener("click", () => {
// 					renderCards(lake.id);
// 					renderMapMarkers(lake.id);
// 				});
// 			}
// 			const marker = new mapboxgl.Marker({
// 				element: el,
// 				anchor: "center",
// 			})
// 				.setLngLat(lake.coordinates)
// 				.addTo(map);

// 			mapMarkers.push(marker);
// 		});
// 	}
// 	function renderCards(activeLakeId) {
// 		if (!cardsStack) return;
// 		cardsStack.innerHTML = "";
// 		lakesData.forEach((lake) => {
// 			const isActiveClass = lake.id === activeLakeId ? "active-card-glow" : "";
// 			const trendingBadge = lake.trending
// 				? `<span class="badge badge-orange text-uppercase pe-2 py-0.5 rounded-pill">Trending</span>`
// 				: "";
// 			const cardHTML = `
// 				<div class="lake_____card rounded-4 p-3 d-flex justify-content-between align-items-start border____fade ${isActiveClass}" data-id="${lake.id}">
// 					<div class="lake____card____details">
// 						<div class="d-flex align-items-center gap-2 mb-2">
// 							<h3 class="level-4 heading-font text-white mb-0 text-uppercase tracking-1">${lake.name}</h3>
// 							${trendingBadge}
// 						</div>
// 						<p class="level-10 primary-regular-font extra-color-1 mb-1 d-flex align-items-center gap-1">
// 							<img src="img/location-icon.svg" alt="" width="10"> ${lake.state}
// 						</p>
// 						<div class="d-flex align-items-center gap-3 level-10 primary-regular-font extra-color-1 ">
// 							<span class="d-flex align-items-center gap-1"><img src="img/wind-icon.png" alt="" width="12"> ${lake.wind}</span>
// 							<span class="d-flex align-items-center gap-1"><img src="img/marina-icon.png" alt="" width="12"> ${lake.marinas}</span>
// 						</div>
// 					</div>
// 					<div class="lake____card____temp">
// 						<span class="level-4 heading-font secondary-color">${lake.temp}</span>
// 					</div>
// 				</div>
// 			`;
// 			cardsStack.insertAdjacentHTML("beforeend", cardHTML);
// 		});
// 		document.querySelectorAll(".lake_____card").forEach((card) => {
// 			card.addEventListener("click", function () {
// 				const selectedId = this.getAttribute("data-id");
// 				renderCards(selectedId);
// 				renderMapMarkers(selectedId);
// 			});
// 		});
// 		if (typeof gsap !== "undefined") {
// 			gsap.to(".active-card-glow", {
// 				backgroundPosition: "200% 50%",
// 				duration: 4,
// 				ease: "none",
// 				repeat: -1,
// 				yoyo: true,
// 			});
// 		}
// 	}
// 	renderCards("tahoe");
// });

// map JS

// mobile slider JS
// mapbox JS

// mobile slider JS
new Swiper(".mobile-mockup-swiper", {
	effect: "creative",
	centeredSlides: true,
	slidesPerView: "auto",
	loop: true,
	loopAdditionalSlides: 10,
	watchSlidesProgress: true,
	watchSlidesVisibility: true,
	grabCursor: false,
	speed: 800,
	creativeEffect: {
		perspective: true,
		prev: {
			translate: ["-60%", "0%", -180],
			rotate: [0, 0, -18],
			scale: 0.82,
		},
		next: {
			translate: ["60%", "0%", -180],
			rotate: [0, 0, 18],
			scale: 0.82,
		},
	},
	autoplay: {
		delay: 4000,
		disableOnInteraction: false,
	},

	pagination: {
		el: ".custom-dots-container",
		clickable: true,
	},
});
// mobile slider JS

window.addEventListener("load", () => {
	ScrollTrigger.refresh();
});

// message items Active
document.querySelectorAll(".message-list-item").forEach((item) => {
	item.addEventListener("click", function () {
		document
			.querySelectorAll(".message-list-item")
			.forEach((el) => el.classList.remove("active"));
		this.classList.add("active");
		const user = this.dataset.user;
		const message = this.dataset.message;
		document.getElementById("chatUserName").textContent = user;
		document.getElementById("chatBody").innerHTML = `
            <div class="chat-bubble chat-left">
                ${message}
            </div>
        `;
	});
});
// message items Active

// fuel gallery Slider
$(".fuel-gallery-slider").slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	arrows: true,
	dots: false,
	infinite: true,
	autoplay: true,
	speed: 600,
	prevArrow:
		'<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
	nextArrow:
		'<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
	responsive: [
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
			},
		},
	],
});
// fuel gallery Slider

// review Slider
$(".review-slider").slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	arrows: false,
	dots: false,
	infinite: true,
	autoplay: true,
	autoplaySpeed: 3000,
	responsive: [
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
			},
		},
	],
});
// review Slider

// Public dropdown JS
document.querySelectorAll(".dropdown-item").forEach((item) => {
	item.addEventListener("click", function (e) {
		e.preventDefault();

		document.querySelector("#visibilityBtn span").textContent =
			this.dataset.value;
	});
});
// Public dropdown JS
