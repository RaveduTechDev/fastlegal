import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton = document.getElementById(
        "mega-menu-full-dropdown-button"
    );
    const dropdownMenu = document.getElementById("mega-menu-full-dropdown");
    const iconV1 = document.getElementById("icon-megamenu-dropdown");
    const navigation = document.getElementById("navigation");
    const body = document.body;

    dropdownButton.addEventListener("click", function () {
        if (dropdownMenu.classList.contains("lg:hidden")) {
            dropdownMenu.classList.remove("lg:hidden", "animate-slideUp");
            dropdownMenu.classList.add("lg:block", "animate-slideDown");
            navigation.classList.add("shadow-lg", "shadow-gray-400/40");
            dropdownButton.classList.add("active");
            body.classList.add("overflow-y-hidden");
            iconV1.classList.add("-rotate-180", "transition");
        } else {
            dropdownMenu.classList.remove("block", "animate-slideDown");
            dropdownMenu.classList.add("animate-slideUp");
            dropdownButton.classList.remove("active");
            navigation.classList.remove("shadow-lg", "shadow-gray-400/40");
            body.classList.remove("overflow-y-hidden");
            iconV1.classList.remove("-rotate-180", "transition");

            dropdownMenu.addEventListener(
                "animationend",
                function () {
                    if (dropdownMenu.classList.contains("animate-slideUp")) {
                        dropdownMenu.classList.remove("animate-slideUp");
                        dropdownMenu.classList.add("lg:hidden");
                    }
                },
                { once: true }
            );
        }
    });

    const btnLayananMobile = document.getElementById("btn-layanan-mobile");
    const dropdownLayananMobile = document.getElementById(
        "dropdown-layanan-mobile"
    );

    btnLayananMobile.addEventListener("click", function () {
        if (dropdownLayananMobile.classList.contains("hidden")) {
            dropdownLayananMobile.classList.remove("hidden");
            dropdownLayananMobile.classList.add("block");
            btnLayananMobile.classList.add("bg-gray-200", "text-gray-900");
        } else {
            dropdownLayananMobile.classList.remove("block");
            dropdownLayananMobile.classList.add("hidden");
            btnLayananMobile.classList.remove("bg-gray-200", "text-gray-900");
        }
    });

    if (location.pathname === "/") {
        const numCounters = [
            { id: "counter1", value: 2 },
            { id: "counter2", value: 30 },
            { id: "counter3", value: 500 },
        ];

        const numObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    numCounters.forEach((counter) => {
                        animateNumCount(counter.id, counter.value);
                    });
                    numObserver.disconnect();
                }
            });
        });

        const numTarget = document.querySelector(".countAbout");
        numObserver.observe(numTarget);
    }

    function animateNumCount(id, targetValue) {
        const element = document.getElementById(id);
        let startValue = 0;
        const duration = 2000;
        const increment = targetValue / (duration / 20);

        const timerInterval = setInterval(() => {
            startValue += increment;
            if (startValue >= targetValue) {
                element.textContent =
                    targetValue +
                    (id === "counter2" || id === "counter3" ? "+" : "");
                clearInterval(timerInterval);
            } else {
                element.textContent = Math.floor(startValue);
            }
        }, 20);
    }

    document.addEventListener("scroll", function () {
        navigation.classList.toggle("shadow-custom3", window.scrollY > 0);
    });
});

$(document).ready(function () {
    let owl1 = $(".layanan-link");
    owl1.owlCarousel({
        margin: 20,
        nav: false,
        dots: false,
        responsive: {
            0: {
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                items: 1,
            },
            325: {
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                items: 1.4,
            },
            450: {
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                items: 2,
            },
            750: {
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                items: 3,
            },

            1000: {
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                items: 4,
            },

            1200: {
                loop: false,
                autoplay: false,
                autoplayTimeout: 0,
                autoplayHoverPause: false,
                items: 5,
            },
        },
    });

    $(".layanan-link .owl-item img").css({
        width: "40px",
    });

    let owl2 = $(".layanan-page");
    owl2.owlCarousel({
        loop: false,
        margin: 30,
        dots: false,
        nav: false,
        responsive: {
            0: {
                items: 1.2,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
            },
            550: {
                items: 2,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
            },
            750: {
                items: 3,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
            },
            1000: {
                items: 4,
            },
        },
        onInitialized: checkNavButtons,
        onTranslated: checkNavButtons,
    });

    $(".service-carousel .owl-stage-outer").css({
        "box-shadow": "inset -40px 0 35px -35px hsla(0,0%,0%,.25)",
    });

    $(".owl-stage").css({
        padding: "2rem 0",
    });

    $(".layanan-page .owl-item img").css({
        width: "150px",
    });

    $(".layanan-page .owl-item .imgfasttax").css({
        width: "160px",
    });

    $(".layanan-page .owl-item .imgfasthalal").css({
        width: "110px",
    });

    $(".layanan-page .owl-item .imgfastkontruksi").css({
        width: "120px",
    });

    $(".custom-next").click(function () {
        owl2.trigger("next.owl.carousel");
    });

    $(".custom-prev").click(function () {
        owl2.trigger("prev.owl.carousel", [300]);
    });

    function checkNavButtons(event) {
        let currentIndex = event.item.index;
        let pageSize = event.page.size;

        let carousel = event.target;
        let items = $(carousel).find(".owl-item");

        if (currentIndex === 0) {
            $(".custom-prev").hide();
        } else {
            $(".custom-prev").show();
        }

        if (currentIndex + pageSize >= items.length) {
            $(".custom-next").hide();
        } else {
            $(".custom-next").show();
        }

        if (window.matchMedia("(max-width: 1000px)").matches) {
            $(".custom-next").hide();
            $(".custom-prev").hide();
        }
    }

    owl2.on("initialized.owl.carousel", function (event) {
        checkNavButtons(event);
    });

    let owl3 = $(".partner-link");
    owl3.owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 4000,
        smartSpeed: 3000,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2.5,
            },
            500: {
                items: 3,
            },
            700: {
                items: 5,
            },
            1000: {
                items: 6,
            },
        },
    });

    $(".partner-link .owl-stage").css({
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
    });

    $(".partner-link .owl-item .img-partner").css({
        width: "120px",
    });

    let owl4 = $(".client-link");
    owl4.owlCarousel({
        loop: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 4000,
        smartSpeed: 3000,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 2.5,
            },
            500: {
                items: 3,
            },
            700: {
                items: 5,
            },
            1000: {
                items: 6,
            },
        },
    });

    $(".client-link .owl-stage").css({
        display: "flex",
        justifyContent: "center",
        alignItems: "center",
    });

    $(".client-link .owl-item .img-partner").css({
        width: "200px",
    });
});

lightGallery(document.querySelector("#gallery-content"));
// Menampilkan gambar tersembunyi
document.getElementById("show-more").addEventListener("click", function () {
    const hiddenImages = document.querySelectorAll(".gallery-item.hidden");
    hiddenImages.forEach((image) => {
        image.classList.remove("hidden");
    });
    this.style.display = "none";
});
